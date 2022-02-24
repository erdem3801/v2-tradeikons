<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CategoryModel;
use App\Models\SettingsModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


use CodeIgniter\Validation\Exceptions\ValidationException;
use Config\Services;
use Exception;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function getDefaults()
    {
        $cache = \Config\Services::cache();
        $settingsModel = new SettingsModel();
        $categoryModel = new CategoryModel();
        $cartModel = new CartModel();
        if (!$categories = $cache->get('categories')) {
            $category = $categoryModel->orderBy('category_parent', 'ASC')->findAll();
            $categories = $categoryModel->getCategoryTree($category);
            $cache->save('categories', $categories);
        }

        if (!$settings = $cache->get('settings')) {
            $settings = $settingsModel->first();
            // Save into the cache for 5 minutes
            $cache->save('settings', $settings, 3000);
        }
        $returnData['settings'] =    $settings;
        $returnData['categories'] =  $categories;

        $sessionID = getSessionID();
        $whereData = array(
            "api_id" =>   0,
            "customer_id" =>  session()->get('user.user.user_id') ?? 0,
            "session_id" =>  $sessionID,
            "recurring_id" => $recurringID ?? 0,
        );

        $basket = $cartModel->where($whereData)
            ->select('*,cart.quantity as cart_quantity')
            ->join('product', 'product.product_id = cart.product_id')
            ->join('product_description', 'product_description.product_id = cart.product_id')
            ->findAll();
        $sum = $cartModel->select('SUM(price * cart.quantity) as basket_sum')
            ->join('product', 'product.product_id = cart.product_id')
            ->where($whereData)->findAll();
        $count = $cartModel->select('COUNT(product_id) as basket_count')->where($whereData)->findAll();


        $returnData['cartData'] = $basket;
        $returnData['totalPrice'] = $sum[0]['basket_sum'];
        $returnData['basketCount'] = $count[0]['basket_count'];
        return $returnData;
    }
    public function validateRequest($input, array $rules, array $messages = [])
    {
        $this->validator = Services::Validation()->setRules($rules);
        // If you replace the $rules array with the name of the group
        if (is_string($rules)) {
            $validation = config('Validation');
            // If the rule wasn't found in the \Config\Validation, we
            // should throw an exception so the developer can find it.
            if (!isset($validation->$rules)) {
                throw ValidationException::forRuleNotFound($rules);
            }
            // If no error message is defined, use the error message in the Config\Validation file
            if (!$messages) {
                $errorName = $rules . '_errors';
                $messages = $validation->$errorName ?? [];
            }
            $rules = $validation->$rules;
        }
        return $this->validator->setRules($rules, $messages)->run($input);
    }
}
