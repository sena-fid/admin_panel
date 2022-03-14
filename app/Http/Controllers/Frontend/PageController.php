<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function detail(Page $slug){
        $settings = Setting::first();

    return view('frontend.blog.detail', [
        'getPostBlog' => $slug,
        'settings' => $settings,

    ]);



    }
}
