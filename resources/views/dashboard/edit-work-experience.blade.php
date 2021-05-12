@extends('layouts.public-template')
@section('main-content')

    <section id="build-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-wrap">
                        <form class="mt-0" method="POST" action="edit-work-experience">
                            @csrf
                            <h2>My Work Experience <br /><span>Please note that all fields are required</span></h2>


                            @foreach ($experiences as $experience)
                                <div id="work_exp">
                                    <div class="row">

                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Title</label>
                                            <input type="text" name="title[]" class="form-control" id="firstname"
                                                value="{{ $experience->title }}" placeholder="Ex: Sales Manager">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Job type</label>
                                            <select class="form-control" name="job_type[]" id="exampleFormControlSelect1">
                                                <option value="{{ $experience->job_type }}">
                                                    {{ ucfirst($experience->job_type) }}</option>
                                                <option value="fulltime">Fulltime</option>
                                                <option value="partime">Partime</option>
                                                <option value="remote">Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Company</label>
                                            <input type="text" name="company[]" value="{{ $experience->company }}"
                                                class="form-control" id="firstname" placeholder="Company name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Location</label>
                                            <input type="text" class="form-control" id="firstname"
                                                value="{{ $experience->location }}" name="location[]"
                                                placeholder="Lagos Nigeria">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                name="description[]" rows="3">{{ $experience->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Start Date</label>
                                            <input type="text" name="start_date[]" value="{{ $experience->start_date }}"
                                                class="form-control" id="firstname" placeholder="Month">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">End Date</label>
                                            <input type="text" name="end_date[]" value="{{ $experience->end_date }}"
                                                class="form-control" id="firstname" placeholder="Year">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-check col-lg-12">
                                                <input class="form-check-input radios-btn" name="current_working[]"
                                                    type="checkbox" value="checked" id="defaultCheck1"
                                                    {{ $experience->currently_working }}>
                                                <label class="form-check-label" for="defaultCheck1">
                                                    I am currently working in this role
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr />
                            @endforeach


                            <div id="new_exp"></div>
                            <input type="hidden" value="1" id="total_exp_no">
                            <p><small><a onclick="add()" style="cursor: pointer">Add New Work Experience</a></small></p>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src={{ url('js/work-experience.js') }}></script>
@endsection
