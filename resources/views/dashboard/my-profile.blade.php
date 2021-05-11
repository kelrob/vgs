@extends('layouts.public-template')
@section('main-content')


    <section id="my-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                </div>
                <div class="col-lg-8">
                    <div class="alert alert-warning" role="alert">
                        Please note: Any information you change in "My Account" will also be changed in your CV.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="profile-card">
                        <h2>Personal Information
                        </h2>
                        <table class="table profile-table">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Birth date</th>
                                    <td>{{ $user->user_profile->dob }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $user->user_profile->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>{{ $user->user_profile->state }}, {{ $user->user_profile->country }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="profile-card">
                        <h2>Contact Information
                        </h2>
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
                    <div class="profile-card">
                        <h2>Password<span><a href="{{ url('change-password') }}"><img src="img/icons/edit.svg"></a></span>
                        </h2>
                        <p>Change your account password</p>
                    </div>
                    <div class="profile-card">
                        <h2>My CV</h2>
                        <p><a target="_blank" href="{{ $user->user_profile->resume }}">My Curriculum Vitae</a></p>
                    </div>
                </div>
                <div class="col-lg-4" align="center">

                    <div class="profile-card">
                        @if ($errors->any())
                            <div class="alert alert-warning">
                                <span>
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </span>
                            </div>
                        @endif

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="profile-photo">
                            @if ($user->user_profile->avatar == null)
                                <img src={{ url('/img/default.jpg') }} class="mr-3" alt="...">
                            @else
                                <img src={{ $user->user_profile->avatar }} class="mr-3" alt="...">
                            @endif
                        </div>
                        <form method="post" action="{{ url('change-avatar') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="file-btn btn btn-light upload-btn">
                                <span id="default-text">Change Profile Photo</span>
                                <input class="biz-logo-upload" id="file-upload" onchange="showName()" type="file"
                                    name="avatar" />
                            </div>
                            <div class="clearfix"></div>
                            <input type="submit" class="btn btn-primary btn-sm mt-4">
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script>
        function showName() {
            $('#default-text').text($('#file-upload')[0].files[0].name);
        }

    </script>

@endsection
