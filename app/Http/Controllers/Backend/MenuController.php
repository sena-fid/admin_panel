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
            'title' => 'required',
        ]);

        try {
            $menus = Menu::create([
                'title' => $request->title,
                'order' => $request->order ?? Menu::max('order') + 1,
                'status' => $request->status ?? 0,
            ]);

            return redirect()->back()->with('success', 'İşlem Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }


    public function edit(Menu $menus)
    {
        return view('backend.menu.edit', compact('menus'));
    }

    
    public function update(Request $request, Menu $menus)
    {
        $request->validate([
            'title' => 'required',
        ]);
        try {
            $menus->update([
                'title' => $request->title,
                'order' => $request->order ?? Menu::max('order') + 1,
                'status' => $request->status ?? 0,
            ]);

            return redirect()->back()->with('success', 'İşlem Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }


    public function destroy(Menu $menus)
    {
        $menus->delete();

        return redirect()->back()->with('success', 'Silme Başarılı!');

    }
}
