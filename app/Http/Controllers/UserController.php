<?php

namespace App\Http\Controllers;

use App\Education;
use App\Http\Requests\ChangeAvatarRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\User;
use App\UserProfile;
use App\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Redirect;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function buildProfile()
    {
        $currentYear = date('Y');
        $minYear = $currentYear - 17;

        $experience = WorkExperience::whereUserId(Auth::user()->id)->first();
        if ($experience) {
            return redirect()->back();
        }

        return view('dashboard.build-profile', compact('minYear'));
    }

    public function myCV()
    {
        $user = User::with(['educations', 'user_profile', 'work_experiences'])->whereId(Auth::id())->first();
        $recentCert = Education::whereUserId(Auth::id())->latest()->first();

        return view('dashboard.my-cv', compact('user', 'recentCert'));
    }

    public function myProfile()
    {
        $user = User::with(['user_profile'])->whereId(Auth::id())->first();

        return view('dashboard.my-profile', compact('user'));
    }

    public function submitBuildProfile(ProfileRequest $request)
    {

        // Compulsory rules
        $validateData = $request->validated();

        //resume
        $resume = $request->file;

        // Upload Resume
        $resumeName = time() . '.' . $request->file('file')->extension();
        $resume->move(public_path("/resume"), $resumeName);
        $resumeLink = env('APP_URL') . "/resume/$resumeName";

        // Create User Profile
        $userProfile = UserProfile::create([
            'user_id' => Auth::id(),
            'about' => $request->about_you,
            'gender' => $request->gender,
            'dob' => $request->birth_day . ' ' . $request->birth_month . ', ' . $request->birth_year,
            'country' => $request->country,
            'state' => $request->state,
            'pref_job_title' => $request->pref_job_title,
            'pref_role' => $request->pref_role,
            'pref_job_level' => $request->pref_job_level,
            'pref_industry' => $request->pref_industry,
            'resume' => $resumeLink,
        ]);

        // Work Experience
        $counter = 0;
        foreach ($request->title as $title) {
            $workExperience = new WorkExperience;
            $workExperience->user_id = Auth::id();
            $workExperience->title = $request->title[$counter];
            $workExperience->company = $request->company[$counter];
            $workExperience->location = $request->location[$counter];
            $workExperience->job_type = $request->job_type[$counter];
            $workExperience->description = $request->description[$counter];
            $workExperience->start_date = $request->start_date_month[$counter] . ' ' . $request->start_date_year[$counter];
            $workExperience->end_date = $request->end_date_month[$counter] . ' ' . $request->end_date_year[$counter];
            $workExperience->currently_working = isset($request->current_working[$counter]) ? $request->current_working[$counter] : null;
            $workExperience->save();
            $counter++;
        }

        // Education
        $edCounter = 0;
        foreach ($request->school as $school) {
            $education = new Education;
            $education->user_id = Auth::id();
            $education->school = $request->school[$edCounter];
            $education->degree = $request->degree[$edCounter];
            $education->field_of_study = $request->field_of_study[$edCounter];
            $education->grade = $request->grade[$edCounter];
            $education->start_year = $request->start_year[$edCounter];
            $education->end_year = $request->end_year[$edCounter];
            $education->description = $request->achool_description[$edCounter];
            $education->save();
            $edCounter++;
        }

        return redirect('my-cv');
    }

    public function changePassword()
    {
        return view('dashboard.change-password');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        // Compulsory rules
        $validateData = $request->validated();

        // User Password
        $user = User::whereId(Auth::id())->first();

        // Compare password inputed with server password
        if (Hash::check($request->current_password, $user->password) != true) {
            return Redirect::back()->withErrors(['Current Password is wrong']);
        }

        // Encrypt New Password
        $encryptedPassword = Hash::make($request->new_password);

        // Save the password to db
        $user->password = $encryptedPassword;
        $user->save();

        return Redirect::back()->with('message', 'Password Changed succesfully!');

    }

    public function changeAvatar(ChangeAvatarRequest $request)
    {

        $userProfile = UserProfile::whereUserId(Auth::id())->first();

        // Compulsory rules
        $validateData = $request->validated();

        //avatar
        $avatar = $request->avatar;

        // Upload Avatar
        $avatarName = time() . '.' . $request->file('avatar')->extension();
        $avatar->move(public_path("/avatar"), $avatarName);
        $avatarLink = env('APP_URL') . "/avatar/$avatarName";

        $userProfile->avatar = $avatarLink;
        $userProfile->save();

        return Redirect::back()->with('message', 'Avatar Changed successfully!');
    }

    public function editWorkExperience()
    {
        $experiences = WorkExperience::whereUserId(Auth::id())->get();
        return view('dashboard.edit-work-experience', compact('experiences'));
    }

    public function updateWorkExperience(Request $request)
    {

        $work = WorkExperience::whereUserId(Auth::id())->delete();

        // Work Experience
        $counter = 0;
        foreach ($request->title as $title) {

            if (isset($request->start_date_month[$counter]) == true) {
                $startDate = $request->start_date_month[$counter] . ' ' . $request->start_date_year[$counter];
            }

            if (isset($request->start_date[$counter]) == true) {
                $startDate = $request->start_date[$counter];
            }

            if (isset($request->end_date_month[$counter]) == true) {
                $endDate = $request->end_date_month[$counter] . ' ' . $request->end_date_year[$counter];
            } else {
                $endDate = null;
            }

            if (isset($request->end_date[$counter]) == true) {
                $endDate = $request->end_date[$counter];
            } else {
                $endDate = null;
            }

            $workExperience = new WorkExperience;
            $workExperience->user_id = Auth::id();
            $workExperience->title = $request->title[$counter];
            $workExperience->company = $request->company[$counter];
            $workExperience->location = $request->location[$counter];
            $workExperience->job_type = $request->job_type[$counter];
            $workExperience->description = $request->description[$counter];
            $workExperience->start_date = $startDate;
            $workExperience->end_date = $endDate;
            $workExperience->currently_working = isset($request->current_working[$counter]) ? $request->current_working[$counter] : null;
            $workExperience->save();
            $counter++;
        }

        return redirect('my-cv');
    }

    public function editEducation()
    {
        $educations = Education::whereUserId(Auth::id())->get();
        return view('dashboard.edit-education', compact('educations'));
    }

    public function updateEducation(Request $request)
    {

        $education = Education::whereUserId(Auth::id())->delete();

        // Education
        $edCounter = 0;
        foreach ($request->school as $school) {
            $education = new Education;
            $education->user_id = Auth::id();
            $education->school = $request->school[$edCounter];
            $education->degree = $request->degree[$edCounter];
            $education->field_of_study = $request->field_of_study[$edCounter];
            $education->grade = $request->grade[$edCounter];
            $education->start_year = $request->start_year[$edCounter];
            $education->end_year = $request->end_year[$edCounter];
            $education->description = $request->school_description[$edCounter];
            $education->save();
            $edCounter++;
        }

        return redirect('my-cv');
    }

    public function editJobPreference()
    {
        $jobPreference = User::whereId(Auth::id())->with('user_profile')->first();
        return view('dashboard.edit-job-preference', compact('jobPreference'));
    }

    public function updateJobPrefernce(Request $request)
    {
        $userProfile = UserProfile::whereUserId(Auth::id())->first();
        $userProfile->update($request->all());

        return redirect('my-cv');
    }
}
