<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function markets(){

        return view('pages.markets');
    }
    public function careers(){
        return view('pages.careers');
    }
}
