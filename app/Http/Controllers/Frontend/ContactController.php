<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.page.contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/[0-9]/|min:10|max:11',
            'email' => 'required|email',
        ]);

        try {
            $message = new ContactMessage();
            $message->fill($request->all());
            $message->save();
            //Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMessageSend($request));
            return redirect()->back()->with('success', 'Mesaj Gönderme Başarılı!');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Bir Hata Oluştu!');
        }
    }
}
