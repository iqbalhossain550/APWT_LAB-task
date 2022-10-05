<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $message = "welcome using variable";
        return view('home')->with('message',$message);
    }

    public function bio(){
        $message = "Here is my details";
        return view('about')->with('message',$message);
    }

    public function serve(){
        $message = "The service we provide";
        $products=array("car", "Motorcycle");
        return view('services')
        ->with('products', $products);
    }
    public function address(){
        $message = "My address location";
        return view('contact')->with('message',$message);
    }

    public function group(){

        $name = "Binary boomers";
        $id="11-11111-1";
        $names=array("Mohammad Iqbal Hossain", "Durlov paul", "Tamanna Mahejabin");

        return view('team')

        ->with('name', $name)
        ->with('id', $id)
        ->with('names', $names);
    }




}
