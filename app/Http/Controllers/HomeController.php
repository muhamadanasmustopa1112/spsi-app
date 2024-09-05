<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use App\Models\ServiceModel;
use App\Models\BannerModel;
use App\Models\LogoModel;
use App\Models\PartnerModel;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index () 
    {

        $contact = ContactModel::all(); 
        $banner = BannerModel::where('active', 'Y')->get(); 
        $logo = LogoModel::where('active', 'Y')->get(); 
        $partner = PartnerModel::all(); 


        $service = ServiceModel::all(); 

        return view('pages.home')->with([
            'contact' => $contact,
            'banner' => $banner,
            'service' => $service,
            'logo' => $logo,
            'partner' => $partner
        ]);  
    }

    public function contact () {
        
        $contact = ContactModel::all(); 
        $logo = LogoModel::where('active', 'Y')->get(); 

        $service = ServiceModel::all(); 

        return view('pages.contact')->with([
            'contact' => $contact,
            'service' => $service,
            'logo' => $logo
        ]);  
    }

    public function about () {

        $contact = ContactModel::all(); 
        $logo = LogoModel::where('active', 'Y')->get(); 


        $service = ServiceModel::all(); 

        return view('pages.about')->with([
            'contact' => $contact,
            'service' => $service,
            'logo' => $logo
        ]);  
    }
    
    public function service () {

        $contact = ContactModel::all(); 
        $logo = LogoModel::where('active', 'Y')->get(); 

        $service = ServiceModel::all(); 

        return view('pages.service')->with([
            'contact' => $contact,
            'service' => $service,
            'logo' => $logo
        ]);  

    }
}
