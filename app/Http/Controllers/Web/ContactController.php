<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SendContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('web.contact.index');
    }

    public function send(SendContact $request)
    {
        $data = $request->except('_token');
        $adminEmail = 'quan.tran@silkwires.com';
        try {
            Mail::to($adminEmail)->send(new Contact($data));
            return redirect()->back()->with(['success' => 'Contact sent !']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['system' => 'Contact failed !']);
        }
    }
}
