@extends('layouts.public-template')
@section('main-content')

    <section id="build-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-wrap">
                        <form class="mt-0" method="POST" action="edit-job-preference">
                            @csrf
                            <h2>Preferred job information <br /><span>Please note that all fields are required</span></h2>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Job title</label>
                                    <input type="text" class="form-control"
                                        value="{{ $jobPreference->user_profile->pref_job_title }}" name="pref_job_title"
                                        id="firstname" placeholder="Job title">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Preferred Role</label>
                                    <input type="text" class="form-control" name="pref_role"
                                        value="{{ $jobPreference->user_profile->pref_role }}" id="lastname"
                                        placeholder="Preferred Role">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Job level</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="pref_job_level">
                                        <option>{{ $jobPreference->user_profile->pref_job_level }}</option>
                                        <option value="Intern">Intern</option>
                                        <option value="Fulltime">Fulltime</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Remote">Remote</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Industry</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="pref_industry">
                                        <option value="{{ $jobPreference->user_profile->pref_industry }}">
                                            {{ ucfirst(str_replace('-', ' ', $jobPreference->user_profile->pref_industry)) }}
                                        </option>
                                        <option value="advertising-media-communications">Advertising, Media &amp;
                                            Communications</option>
                                        <option value="agriculture-fishing-forestry">Agriculture, Fishing &amp; Forestry
                                        </option>
                                        <option value="automotive-aviation">Automotive &amp; Aviation</option>
                                        <option value="banking-finance-insurance">Banking, Finance &amp; Insurance</option>
                                        <option value="construction">Construction</option>
                                        <option value="education">Education</option>
                                        <option value="energy-utilities">Energy &amp; Utilities</option>
                                        <option value="enforcement-security">Enforcement &amp; Security</option>
                                        <option value="entertainment-events-sport">Entertainment, Events &amp; Sport
                                        </option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="hospitality-hotel">Hospitality &amp; Hotel</option>
                                        <option value="it-telecoms">IT &amp; Telecoms</option>
                                        <option value="law-compliance">Law &amp; Compliance</option>
                                        <option value="manufacturing-warehousing">Manufacturing &amp; Warehousing</option>
                                        <option value="mining-energy-metals">Mining, Energy &amp; Metals</option>
                                        <option value="ngo-npo-charity">NGO, NPO &amp; Charity</option>
                                        <option value="real-estate">Real Estate</option>
                                        <option value="recruitment">Recruitment</option>
                                        <option value="retail-fashion-fmcg">Retail, Fashion &amp; FMCG</option>
                                        <option value="shipping-logistics">Shipping &amp; Logistics</option>
                                        <option value="tourism-travel">Tourism &amp; Travel</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src={{ url('js/education.js') }}></script>
@endsection
