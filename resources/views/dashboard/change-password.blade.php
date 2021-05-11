<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VGS Recruitment</title>
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        .logo a {
            color: #fff;
        }

        .logo a:hover {
            text-decoration: none;
        }

    </style>

</head>

<body>

    <section id="user-auth">
        <div class="auth-wrap">
            <div class="auth-lhs">
                <!-- <div class="">
        <a class="navbar-brand" href="index.html">
          <img class="logo" src="img/logo-white.png">
        </a>
      </div>
      <h2>Get Connected to<br/> Top Employers</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p> -->
            </div>
            <div class="auth-rhs">
                <form action="{{ url('change-password') }}" method="POST">

                    @csrf
                    <p class="mb-5"><a href="{{ url('/my-profile') }}">Go back to Profile</a></p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="margin: 2px; padding:2px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <h2>Update Account Password</h2>
                    <p class="login-subtitle">Please complete the form below to update your password</p>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Current Password</label>
                        <input type="password" name="current_password" class="form-control"
                            id="exampleFormControlInput1" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">New Password</label>
                        <input type="password" name="new_password" class="form-control" id="exampleFormControlInput1"
                            placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Confirm New Password</label>
                        <input type="password" class="form-control" name="new_password_again"
                            id="exampleFormControlInput1" placeholder="Confirm New Password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Update Password</button>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>

</html>
