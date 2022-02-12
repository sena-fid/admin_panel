<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $page = Page::all();
        return view('backend.page.index', compact('page'));
    }

    public function create()
    {
        return view('backend.page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        try {
            $page = Page::create([
                'title' => $request->title,
                'content' => $request->content,
                'order' => $request->order ?? Page::max('order') + 1,
                'status' => $request->status ?? 0,
            ]);

            return redirect()->back()->with('success', 'İşlem Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }


    public function edit(Page $page)
    {
        return view('backend.page.edit', compact('page'));
    }


    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
        ]);
        try {
            $page->update([
                'title' => $request->title,
                'content' => $request->content,
                'order' => $request->order ?? Page::max('order') + 1,
                'status' => $request->status ?? 0,
            ]);

            return redirect()->back()->with('success', 'İşlem Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }


    public function destroy(Page $page)
    {
        $page->delete();
        
        return redirect()->back()->with('success', 'Silme Başarılı!');

    }
}
