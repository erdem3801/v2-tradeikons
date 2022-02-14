<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InformationController extends BaseController
{
    private $settingsModel;
    private $viewData;

    public function __construct()
    {
      $this->viewData = $this->getDefaults();
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
    public function cancellationPolicy()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'iptal-ve-iade',
                'title' => 'İptal ve İade' 
            ],
        );
        return view('information/cancellationPolicy',$this->viewData);
        //
    }
    public function shipingPolicy()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'kargo-ve-teslimat',
                'title' => 'Kargo ve Teslimat' 
            ],
        );
        return view('information/shipingPolicy',$this->viewData);
        //
    }
    public function kvkkPolicy()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'gizlilik-ve-kvkk',
                'title' => 'Gizlilik ve KVKK' 
            ],
        );
        return view('information/kvkkPolicy',$this->viewData);
        //
    }
    public function orderPolicy()
    {
        $this->viewData['baslik'] = array(
            [
                'url' => 'siparis-takip',
                'title' => 'Siparis Takip' 
            ],
        );
        return view('information/orderPolicy',$this->viewData);
        //
    }
}
