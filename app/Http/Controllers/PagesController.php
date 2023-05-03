<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function markets(){
        $general_setting = GeneralSetting::first();

        return view('pages.markets');
    }
}
