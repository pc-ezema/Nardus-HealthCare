<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomePageController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function contactConfirm() {
        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'created_at' => now(),
            'admin' => 'info@nardushealthcare.co.uk',
        );
        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject('Contact Form Notification');
        });

        return back()->with('success_report', 'Form Submitted Successfully');
    }

    public function vacancies() {
        return view('vacancies');
    }

    public function learning_disabilities() {
        return view('learning_disabilities');
    }

    public function mental_health() {
        return view('mental_health');
    }

    public function children_and_young_peoples_service() {
        return view('children_and_young_peoples_service');
    }

    public function domiciliary_care() {
        return view('domiciliary_care');
    }

    public function complaints() {
        return view('complaints');
    }

    public function application()
    {
        return view('application');
    }

    public function applicationConfirm()
    {
        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'created_at' => now(),
            'admin' => 'info@nardushealthcare.co.uk',
        );
        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject('Contact Form Notification');
        });

        return back()->with('success_report', 'Form Submitted Successfully');
    }
}
