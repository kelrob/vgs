@extends('admin.layouts.template')

@section('main-content')

    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <img src="{{ url('img/logo.png') }}" style="max-width: 40%" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Signin</h4>
                            <form action="{{ url('/admin/login') }}" method="POST">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <span>
                                            @foreach ($errors->all() as $error)
                                                <p class="m-0">{{ $error }}</p>
                                            @endforeach
                                        </span>
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="floating-label" for="Email">Email address</label>
                                    <input type="text" name="email" class="form-control" id="Email" placeholder="">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="floating-label" for="Password">Password</label>
                                    <input type="password" name="password" class="form-control" id="Password"
                                        placeholder="">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
