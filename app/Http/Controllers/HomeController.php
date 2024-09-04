<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use App\Models\ServiceModel;
use App\Models\BannerModel;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index () 
    {

        $contact = ContactModel::all(); 
        $banner = BannerModel::all(); 
        $banner_first = $banner->first();
        $banner_last =  BannerModel::latest()->first();

        $service = ServiceModel::all(); 

        return view('pages.home')->with([
            'contact' => $contact,
            'banner_first' => $banner_first,
            'banner_last' => $banner_last,
            'service' => $service,
        ]);  
    }

    public function contact () {
        
        $contact = ContactModel::all(); 
        $banner = BannerModel::all(); 
        $banner_first = $banner->first();
        $banner_last =  BannerModel::latest()->first();

        $service = ServiceModel::all(); 

        return view('pages.contact')->with([
            'contact' => $contact,
            'banner_first' => $banner_first,
            'banner_last' => $banner_last,
            'service' => $service,
        ]);  
    }

    public function about () {

        $contact = ContactModel::all(); 
        $banner = BannerModel::all(); 
        $banner_first = $banner->first();
        $banner_last =  BannerModel::latest()->first();

        $service = ServiceModel::all(); 

        return view('pages.about')->with([
            'contact' => $contact,
            'banner_first' => $banner_first,
            'banner_last' => $banner_last,
            'service' => $service,
        ]);  
    }
    
    public function service () {

        $contact = ContactModel::all(); 
        $banner = BannerModel::all(); 
        $banner_first = $banner->first();
        $banner_last =  BannerModel::latest()->first();

        $service = ServiceModel::all(); 

        return view('pages.service')->with([
            'contact' => $contact,
            'banner_first' => $banner_first,
            'banner_last' => $banner_last,
            'service' => $service,
        ]);  

    }
}
