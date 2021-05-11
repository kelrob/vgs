<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::with('user_profile', 'work_experiences', 'educations')->orderBy('id', 'DESC')->get();
        return view('admin.index', compact('users'));
    }

    public function users()
    {
        $users = User::with('user_profile', 'work_experiences', 'educations')->orderBy('id', 'DESC')->get();
        return view('admin.users', compact('users'));
    }

    public function addUser()
    {
        return view('admin.new-user');
    }

    public function saveUser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->email);
        $user->phone = $request->phone;
        $user->save();

        //resume
        $resume = $request->file('resume');

        // Upload Resume
        $resumeName = time() . '.' . $request->file('resume')->extension();
        $resume->move(public_path("/resume"), $resumeName);
        $resumeLink = env('APP_URL') . "/resume/$resumeName";

        $userProfile = new UserProfile;
        $userProfile->user_id = $user->id;
        $userProfile->gender = $request->gender;
        $userProfile->resume = $resumeLink;
        $userProfile->pref_industry = $request->pref_industry;
        $userProfile->save();

        return redirect()->to('/admin/users');

    }
}
