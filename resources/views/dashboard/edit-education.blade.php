@extends('layouts.public-template')
@section('main-content')

    <section id="build-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-wrap">
                        <form class="mt-0" method="POST" action="edit-education">
                            @csrf
                            <h2>Education Information <br /><span>Please note that all fields are required</span></h2>

                            @foreach ($educations as $education)
                                <div class="education">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">School</label>
                                            <input type="text" name="school[]" value="{{ $education->school }}"
                                                class="form-control" id="firstname" placeholder="School name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Degree</label>
                                            <input type="text" name="degree[]" value="{{ $education->degree }}" class="
                                                                            form-control" id="firstname"
                                                placeholder="Ex: Bachelor">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Field of study</label>
                                            <input type="text" name="field_of_study[]" class="form-control" id="firstname"
                                                placeholder="Ex: Engineering" value="{{ $education->field_of_study }}">
                                        </div>
                                        <div class=" form-group col-lg-6">
                                            <label for="staticEmail" class="">Grade</label>
                                            <input type="text" name="grade[]" value="{{ $education->grade }}" class="
                                                                                    form-control" id="firstname"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="staticEmail" class="">Start year</label>
                                            <select class="form-control" name="start_year[]" id="exampleFormControlSelect1">
                                                <option value="{{ $education->start_year }}">
                                                    {{ $education->start_year }}
                                                </option>
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
                                                <option value="{{ $education->end_year }}">{{ $education->end_year }}
                                                </option>
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
                                                id="exampleFormControlTextarea1"
                                                rows="3">{{ $education->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                            @endforeach
                            <div id="new_ed"></div>
                            <input type="hidden" value="1" id="total_ed_no">
                            <p><small><a onclick="addEducation()" style="cursor: pointer">Add Education</a></small></p>

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
