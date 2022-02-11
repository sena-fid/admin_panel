<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('backend.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('backend.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title.*' => 'required',
        ]);

        try {
            $menus = Menu::create([
                'order' => $request->order ?? Menu::max('order') + 1,
                'status' => $request->status ?? 0,
                'title' => $request->title,
            ]);

            return redirect()->back()->with('success', 'Menü Ekleme Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'İşlem başarısız, bir hata oluştu!');

        }
    }










    public function edit(){

        return view('backend.menu.edit');
    }

    public function update(Menu $menus, Request $request){

        $request->validate([
            'title.*' => 'required',
        ]);

        try {
            $menus = Menu::find($request->id);
            $menus->order = $request->order ?? Menu::max('order') + 1;
            $menus->title = $request->title;
            $menus->status = $request->status ?? 0;
            $menus->save();


            return redirect()->back()->with('success', 'Düzenleme Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }




    }
}
