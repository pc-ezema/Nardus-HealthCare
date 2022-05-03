<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
