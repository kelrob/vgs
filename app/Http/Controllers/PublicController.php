<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index()
    {
        return view('public/index');
    }

    public function about()
    {
        return view('public/about');
    }

    public function employers()
    {
        return view('public/employers');
    }

    public function login()
    {
        return view('public/login');
    }

    public function signup()
    {
        return view('public/signup');
    }
}
