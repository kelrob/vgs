
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
<link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

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
      <div class="logo">
        VGS Recruitment
      </div>
      <h2>Get Connected to<br/> Top Employers</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p>
    </div>
    <div class="auth-rhs">
      <form>
        <h2>Welcome back</h2>
        <p class="login-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor.</p>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <p><a href="">Forgot Password?</a></p>
        <button type="submit" class="btn btn-primary mb-2">Login</button>
        <p>Dont have an account? <a href="{{ url('signup') }}">Signup</a></p>
      </form>
    </div>
  </div>
</section>


  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>
</html>
