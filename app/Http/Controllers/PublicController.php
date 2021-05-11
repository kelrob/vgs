<?php

namespace App\Http\Controllers;

use App\Education;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;

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

    public function forgotPassword()
    {
        return view('public/forgot-password');
    }

    public function employerViewCV($id)
    {
        $user = User::with(['educations', 'user_profile', 'work_experiences'])->whereId($id)->first();
        $recentCert = Education::whereUserId($id)->latest()->first();

        return view('dashboard.employer-view-my-cv', compact('user', 'recentCert'));
    }

    public function subscribeUser(Request $request)
    {
        $subscriber = new Subscriber;
        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect()->back()->with('sub-msg', 'Subscribed Successfully!');

    }
}
