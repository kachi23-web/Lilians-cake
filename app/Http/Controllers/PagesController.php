<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function about(){
        $title='welcome to Lilians Cakes';
        return view('pages.about')->with('title',$title);
    }

    public function pastries()
    {
        $title='Pastries';
        return view('pages.pastries')->with('title',$title);
    }

    public function cakes()
    {
        $title='Cakes';
        return view('pages.cakes')->with('title' ,$title);

    }


    public function training()
    {
        $title='Training';
        return view('pages.training')->with('title',$title);
    }

    public function blog()
    {
        $title='Blog';
        return view('pages.blog')->with('title',$title);
    }
}
