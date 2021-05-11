<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required',
            'title' => 'required',
            'job_type' => 'required',
            'company' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date_month' => 'required',
            'start_date_year' => 'required',
            'end_date_month' => 'required',
            'end_date_year' => 'required',
            'school' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'grade' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'school_description' => 'required',
            'birth_day' => 'required',
            'birth_month' => 'required',
            'birth_year' => 'required',
            'gender' => 'required',
            'about_you' => 'required',
            'country' => 'required',
            'state' => 'required',
            'pref_job_title' => 'required',
            'pref_role' => 'required',
            'pref_job_level' => 'required',
            'pref_industry' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pref_job_title.required' => 'Prefferred Job Title is required',
            'pref_role.required' => 'Preferred Role is required',
            'pref_industry.required' => 'Preffered Industry is required',
            'pref_job_level.required' => 'Preferred Job is required',
        ];
    }
}
