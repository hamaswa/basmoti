<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Gcategory;
use App\Gallery;
use App\Mcategory;
use App\Siteconfig;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['config'] = Siteconfig::find(1);
        $data['slider'] = Slider::find(1);
        //$data['slider'] = Slider::find(1);
        $data['about'] = About::find(1);
        $data['gcategory'] = Gcategory::all(["id","name"]);
        $data['gallery'] = Gallery::all(["id",'category_id',"image_url"]);
        $data['mcategory'] = Mcategory::all(['id','name']);


        foreach($data['mcategory'] as $key => $cat){

            $data['mcategory'][$key]["menu"] = $cat->menu;
        }


        return view('index' , $data);

    }

    public function about()
    {
        return view('about-us');
    }

    public function contact()
    {
        return view('contact-us');
    }
}
