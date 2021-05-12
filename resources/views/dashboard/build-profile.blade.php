@extends('layouts.public-template')
@section('main-content')


    <section id="build-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-wrap">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <p><strong>Opps Something went wrong</strong></p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h1>Tell us about yourself</h1>
                        <form method="POST" action={{ url('build-profile-submit') }} enctype="multipart/form-data">

                            @csrf
                            <h2>Personal information <br /><span>Please note that all fields are required</span></h2>
                            <p></p>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="staticEmail" class="">Full name</label>
                                    <input type="text" class="form-control" id="firstname"
                                        value="{{ Auth::user()->name }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Email</label>
                                    <input type="text" class="form-control" id="firstname"
                                        value="{{ Auth::user()->email }}" placeholder="Email" disabled>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Phone number</label>
                                    <input type="text" class="form-control" id="lastname"
                                        value="{{ Auth::user()->phone }}" placeholder="Phone number" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="inputPassword" class="">Birth day</label>
                                    <select class="form-control" name="birth_day" id="exampleFormControlSelect1">
                                        <option value="{{ old('birth_day') }}">{{ old('birth_day') }}</option>
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value={{ $i }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="inputPassword" class="">Birth Month</label>
                                    <select name="birth_month" class="form-control">
                                        <option value="{{ old('birth_month') }}">{{ old('birth_month') }}</option>
                                        <option value="">Month of Birth</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="inputPassword" class="">Birth year</label>
                                    <select name="birth_year" class="form-control" id="exampleFormControlSelect1">
                                        <option value="{{ old('birth_year') }}">{{ old('birth_year') }}</option>
                                        @for ($i = 1; $i <= 43; $i++)
                                            {{ $year = $minYear - $i }}
                                            <option value={{ $year }}>{{ $year }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="exampleFormControlTextarea1">About (This will appear as a summary on your
                                        profile)</label>
                                    <textarea class="form-control" name="about_you" id="exampleFormControlTextarea1"
                                        rows="3">{{ old('about_you') }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="inputPassword" class="col-lg-12">Gender</label>
                                    <div class="col-lg-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radios-btn" type="radio" name="gender"
                                                id="inlineRadio1" value="Male">
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input radios-btn" type="radio" name="gender"
                                                id="inlineRadio1" value="Female">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Country</label>
                                    @include('includes.countries')
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">State</label>
                                    <input type="text" name="state" class="form-control" placeholder="Enter State" />
                                    {{-- @include('includes.states') --}}
                                </div>
                            </div>

                            <h2>Preferred job information <br /><span>Please note that all fields are required</span></h2>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Job title</label>
                                    <input type="text" class="form-control" value="{{ old('pref_job_title') }}"
                                        name="pref_job_title" id="firstname" placeholder="Job title">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Preferred Role</label>
                                    <input type="text" class="form-control" name="pref_role"
                                        value="{{ old('pref_role') }}" id="lastname" placeholder="Preferred Role">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Job level</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="pref_job_level">

                                        <option value="Intern">Intern</option>
                                        <option value="Fulltime">Fulltime</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Remote">Remote</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="staticEmail" class="">Industry</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="pref_industry">
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
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <div class="file-btn btn btn-light upload-btn">
                                        <span id="default-text">Upload CV</span>
                                        <input class="biz-logo-upload" id="file-upload" onchange="showName()" type="file"
                                            name="file" />
                                    </div>
                                </div>
                            </div>



                            <h2>Work Experience <br /><span>Please note that all fields are required</span></h2>
                            <div id="work_exp">
                                <div class="row">

                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Title</label>
                                        <input type="text" name="title[]" class="form-control" id="firstname"
                                            placeholder="Ex: Sales Manager">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Job type</label>
                                        <select class="form-control" name="job_type[]" id="exampleFormControlSelect1">
                                            <option value="fulltime">Full-time</option>
                                            <option value="partime">Part-time</option>
                                            <option value="remote">Remote</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Company</label>
                                        <input type="text" name="company[]" class="form-control" id="firstname"
                                            placeholder="Company name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Location</label>
                                        <input type="text" class="form-control" id="firstname" name="location[]"
                                            placeholder="Lagos Nigeria">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description[]"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Start Date</label>
                                        <input type="text" name="start_date_month[]" class="form-control" id="firstname"
                                            placeholder="Month">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="no-label">.</label>
                                        <input type="text" name="start_date_year[]" class="form-control" id="firstname"
                                            placeholder="Year">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-check col-lg-12">
                                            <input class="form-check-input radios-btn" name="current_working[]"
                                                type="checkbox" value="checked" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                I am currently working in this role
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">End Date</label>
                                        <input type="text" name="end_date_month[]" class="form-control" id="firstname"
                                            placeholder="Month">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="no-label">.</label>
                                        <input type="text" name="end_date_year" class="form-control" id="firstname"
                                            placeholder="Year">
                                    </div>
                                </div>
                            </div>
                            <div id="new_exp"></div>
                            <input type="hidden" value="1" id="total_exp_no">
                            <p><small><a onclick="add()" style="cursor: pointer">Add New Work Experience</a></small></p>


                            <h2>Education Information <br /><span>Please note that all fields are required</span></h2>
                            <div class="education">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">School</label>
                                        <input type="text" name="school[]" class="form-control" id="firstname"
                                            placeholder="School name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Degree</label>
                                        <input type="text" name="degree[]" class="form-control" id="firstname"
                                            placeholder="Ex: Bachelor">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Field of study</label>
                                        <input type="text" name="field_of_study[]" class="form-control" id="firstname"
                                            placeholder="Ex: Engineering">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Grade</label>
                                        <input type="text" name="grade[]" class="form-control" id="firstname"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">Start year</label>
                                        <select class="form-control" name="start_year[]" id="exampleFormControlSelect1">
                                            @for ($i = 1; $i <= 30; $i++)
                                                {{ $minimum = date('Y') - 3 }}
                                                {{ $year = $minimum - $i }}
                                                <option value={{ $year }}>{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="staticEmail" class="">End year</label>
                                        <select class="form-control" name="end_year[]" id="exampleFormControlSelect1">
                                            @for ($i = 1; $i <= 30; $i++)
                                                {{ $minimum = date('Y') - 3 }}
                                                {{ $year = $minimum - $i }}
                                                <option value={{ $year }}>{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" name="school_description[]"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="new_ed"></div>
                            <input type="hidden" value="1" id="total_ed_no">
                            <p><small><a onclick="addEducation()" style="cursor: pointer">Add Education</a></small></p>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src={{ url('js/work-experience.js') }}></script>
    <script src={{ url('js/education.js') }}></script>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script>
        function showName() {
            $('#default-text').text($('#file-upload')[0].files[0].name);
        }

    </script>
@endsection
