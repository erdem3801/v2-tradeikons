<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InformationController extends BaseController
{
    private $settingsModel;
    private $viewData;

    public function __construct()
    {
        $cache = \Config\Services::cache();
        $this->settingsModel = model('SettingsModel');
        if (!$categories = $cache->get('categories')) { 
            $categories = $this->settingsModel->getCategories();
            // Save into the cache for 5 minutes
            $cache->save('categories', $categories, 3000);
        } 
        if (!$settings = $cache->get('settings')) { 
            $settings = $this->settingsModel->first();
            // Save into the cache for 5 minutes
            $cache->save('settings', $settings, 3000);
        } 
        $this->viewData['settings'] =    $settings;
        $this->viewData['categories'] =  $categories; 
    }

    public function about()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'hakkimizda',
                'title' => 'Hakkımızda' 
            ],
        );
        return view('information/about',$this->viewData);
        //
    }
    public function sss()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'sss',
                'title' => 'SSS' 
            ],
        );
        return view('information/sss',$this->viewData);
        //
    }
    public function contact()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'contact',
                'title' => 'İletişim' 
            ],
        );
        return view('information/contact',$this->viewData);
        //
    }
}
