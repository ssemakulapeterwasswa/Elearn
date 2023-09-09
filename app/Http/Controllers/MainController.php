<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        //logic
        $name ='bukirwa <strong><em>Angella</em></strong>';
        $gender ='female';
        $college ='Cocis';
        $colors = [
            'Red',
            'Yellow',
            'Black',
            'White'
        ];
        return view('home',[
            'name'=>  $name,
            'sex' => $gender,
            'school'=>$college,
            'favcolor' => $colors
        ]);
    }
    public function aboutUs(){
        //logic
        return view('others/aboutUs');
    }
    public function contactUs(){
        //logic
        return view('others/contactUs');
    }
    public function learnInformation(){
        //logic
        return view('others/learnInformation');
    }
}
