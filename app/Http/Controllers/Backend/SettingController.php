<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('backend.settings.index', compact('setting'));
    }

    public function create(){

        return view('backend.settings.create');
    }

    public function store(Request $request){

        $request->validate([
            'phone' => 'required',
            'email' => 'required',
        ]);

        try {
            $setting = Setting::create([
                'address' => $request->address ?? null,
                'phone' => $request->phone,
                'email' => $request->email,
                'facebook' => $request->facebook ?? null,
                'twitter' => $request->twitter ?? null,
                'instagram' => $request->instagram ?? null,
            ]);

            return redirect()->back()->with('success', 'İşlem Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }

    public function edit(Setting $setting){

        return view('backend.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
        ]);

        try {
            $setting->update([
                'address' => $request->address ?? null,
                'phone' => $request->phone,
                'email' => $request->email,
                'facebook' => $request->facebook ?? null,
                'twitter' => $request->twitter ?? null,
                'instagram' => $request->instagram ?? null,

            ]);
            return redirect()->back()->with('success', 'İşlem Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }


    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->back()->with('success', 'Silme Başarılı!');

    }
}
