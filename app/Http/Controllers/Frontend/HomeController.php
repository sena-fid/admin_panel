<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $getPostBlog = Page::where('status', 1)->get();
        $menus = Menu::where('status', 1)->get();
        $settings = Setting::first();

    return view('frontend.index', [

        'getPostBlog' => $getPostBlog,
        'menus' => $menus,
        'settings' => $settings,
    ]);

    }
}
