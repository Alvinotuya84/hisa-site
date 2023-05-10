<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //

    public function allPages(){
        $pages= Page::all();
        $user=Auth::user();
        return view('pages.admin.pages',compact('pages','user'));
    }
    public function markets(){

        return view('pages.markets');
    }
    public function careers(){
        return view('pages.careers');
    }
    public function education(){
        return view('pages.education');
    }
    public function blog(){
        return view('pages.blog');
    }
}
