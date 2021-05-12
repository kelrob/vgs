@extends('layouts.public-template')
@section('main-content')


    <section id="my-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h2>My Account</h2> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="profile-card">
                        <div class="media">
                            <div class="img-wrapper">

                                @if ($user->user_profile->avatar == null)
                                    <img src={{ url('/img/default.jpg') }} class="mr-3" alt="...">
                                @else
                                    <img src={{ $user->user_profile->avatar }} class="mr-3" alt="...">
                                @endif

                            </div>
                            <div class="media-body">
                                <h5 class="mt-0">{{ ucfirst($user->name) }}</h5>
                                @if ($recentCert != null)
                                    <p class="edu-info">{{ ucfirst($recentCert->grade) }}</p>
                                @endif
                                <p class="about-info">{{ $user->user_profile->about }}</p>
                                {{-- <a href="{{ url('/employer-cv-view') }}"><button type="button" class="btn btn-light">View
                                        profile as
                                        Employer</button></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="profile-card">
                        <h2><img width="30" class="mr-3" src="{{ url('img/icons/suitcase.svg') }}">Work Experience</h2>

                        @foreach ($user->work_experiences as $experience)
                            <div class="work-wrapper">
                                <h3 class="work-name">{{ ucfirst($experience->title) }}
                                    <span class="work-year">{{ $experience->start_date }} -
                                        {{ $experience->end_date }}</span>
                                </h3>
                                <p class="company-name">{{ $experience->company }}</p>
                                <p class="work-description">{{ $experience->description }}
                                </p>
                                @if ($experience->currently_working != null)
                                    <p><small>Currently working here</small> </p>
                                @endif
                            </div>
                        @endforeach

                    </div>
                    <div class="profile-card">
                        <h2><img width="30" class="mr-3" src="{{ url('img/icons/edu.svg') }}">Education</h2>

                        @foreach ($user->educations as $education)
                            <div class="exp-wrapper">
                                <h3 class="school-name">{{ $education->school }}<span
                                        class="study-year">{{ $education->start_year }} -
                                        {{ $education->end_year }}</span>
                                </h3>
                                <p class="study-degree">{{ $education->grade }}</p>
                                <p class="study-description">{{ $education->description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="profile-card">
                        <h2><img width="30" class="mr-3" src="{{ url('img/icons/settings.svg') }}">Preferred Job</h2>
                        <table class="table profile-table">
                            <tbody>
                                <tr>
                                    <th>Job title</th>
                                    <td>{{ $user->user_profile->pref_job_title }}</td>
                                </tr>
                                <tr>
                                    <th>Preferred role</th>
                                    <td>{{ $user->user_profile->pref_role }}</td>
                                </tr>
                                <tr>
                                    <th>Job level</th>
                                    <td>{{ $user->user_profile->pref_level }}</td>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Industry</th>
                                    <td>{{ ucfirst(str_replace('-', ' ', $user->user_profile->pref_industry)) }}</td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="profile-card">
                        <h2><img width="30" class="mr-3" src="{{ url('img/icons/letter.svg') }}">Contact Information</h2>
                        <table class="table profile-table">
                            <tbody>
                                <tr>
                                    <th>Email address</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone number</th>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3" align="center">

                    <div class="profile-card">
                        <div class="cv-wrap">
                            <div class="doc-view">
                                <embed src={{ $user->user_profile->resume }} width="175px" height="246px" />
                            </div>
                            <p><a target="_blank" href="{{ $user->user_profile->resume }}">View CV</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
