
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VGS Recruitment</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
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
        <a href="/">VGS Recruitment</a>
      </div>
      <h2>Get Connected to<br/> Top Employers</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p>
    </div>
    <div class="auth-rhs">
      <form>
        <h2>Get Started</h2>
        <p class="login-subtitle">You're one step closer to finding your dream job. Complete the form below.</p>
        <div class="form-group">
          <label for="exampleFormControlInput1">Full name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Phone number</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone number">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Sign up</button>
        <p>Already have an account? <a href="{{ url('login') }}">Login</a></p>
      </form>
    </div>
  </div>
</section>

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>
</html>
