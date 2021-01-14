<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function store ()
    {
        $title='Store';
        return view('store.index')->with('title',$title); 
    }
}
