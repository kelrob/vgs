@extends('layouts.public-template')
@section('main-content')

<section id="home">
    <div class="container">
      <div class="row align-items-center" style="height:70vh;">
        <div class="col" align="left">
          <h2>Let us Help You Find <br />Your Dream Job</h2>
          <p>We’re in the Business of creating more secure and <br />rewarding futures
          for our clients and their employees.</p>
          <a class="hvr-float" href="#"><button type="button" class="btn btn-light home-btn-a">Find a Job</button></a>
          <!-- <a class="hvr-float" href="#"><button type="button" class="btn btn-light home-btn-b">Post a Job</button></a> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics -->

  <section id="stats">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="stats-wrap">
            <div class="stats-block">
              <h2>153</h2>
              <p>Registered Companies</p>
            </div>
            <div class="stats-block">
              <h2>495</h2>
              <p>Candidates Hired</p>
            </div>
            <div class="stats-block">
              <h2>266+</h2>
              <p>Available Jobs</p>
            </div>
            <div class="stats-block">
              <h2>1500+</h2>
              <p>Registered Users</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro -->

  <section id="intro">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Who we are</h2>
          <p>At Vgs Recruitment, we are collaborative and client focused to diminish business risk in key hires
          through over 15 years of combined experience in executive headhunting,
          training and outsourcing services.</p>
          <a class="hvr-icon-forward" href="about-us.html">Learn more <img class="ml-2 hvr-icon" src="img/icons/chevron-right.svg"></a>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid intro-img" src="img/intro.png">
        </div>
      </div>
    </div>
  </section>


  <!-- Services -->

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <h2>Our Services</h2>
          <div class="line-dv"></div>
          <p class="mb-5 sub-title">At VGS Recruitment, our processes are tested and trusted in the selection<br/> of only the right candidates to fill our clients’ roles.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4">
              <div class="service-wrap">
                <h3>Executive Recruitment</h3>
                <p>VGS Recruitment conducts an extensive strategic search to help drive business transformation for our clients through engaging first-class executive and mid-level management leaders.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-wrap">
                <h3>Human Capital Outsourcing</h3>
                <p>We engage and manage qualified professionals to execute our client’s specific roles. Allow us manage your personnel functions and relieve you of all the associated business risks.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-wrap">
                <h3>Career Management Testing</h3>
                <p>We offer career management testing and counselling services to help young graduates and professionals successfully develop their careers. We will assist you make and implement informed occupational choices.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-wrap">
                <h3>Employment Sponsorships</h3>
                <p>Through our employment sponsorships, we will provide the financial and legal support needed to enable qualified professionals work overseas.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-wrap">
                <h3>Strategic Headhunting</h3>
                <p>We are committed to meeting the specific needs of our clients through recommending only quality talent following a uniquely designed process.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-wrap">
                <h3>Job Evaluation Consultancy</h3>
                <p>Our consultants assess the complexities and requirement of job roles across various industries, employing a uniquely designed grading system for your organization.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Customer -->

  <section id="customer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Our Customers</h2>
          <div class="line-dv"></div>
          <!-- <p class="mb-5 sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="customer-wrap">
            <div class="c-img">
              <img class="img-fluid" src="img/job.jpg">
            </div>
            <div class="customer-wrap-btm">
              <h3>Job Seekers</h3>
              <p>Take advantage of our services to position yourself a step closer to your dream job.</p>
              <a class="hvr-icon-forward" href="#">Find a Job <img class="ml-2 hvr-icon" src="img/icons/chevron-right.svg"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="customer-wrap">
            <div class="c-img">
              <img class="img-fluid" src="img/employers.jpg">
            </div>
            <div class="customer-wrap-btm">
              <h3>Employers</h3>
              <p>We cater to the specific needs of employers in a timely manner.</p>
              <a class="hvr-icon-forward" href="employers.html">Learn more <img class="ml-2 hvr-icon" src="img/icons/chevron-right.svg"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="customer-wrap">
            <div class="c-img">
              <img class="img-fluid" src="img/recruiter.jpg">
            </div>
            <div class="customer-wrap-btm">
              <h3>Recruiters</h3>
              <p>Our database of quality talent is tested and trusted for you to choose from.</p>
              <a class="hvr-icon-forward" href="#">Learn more <img class="ml-2 hvr-icon" src="img/icons/chevron-right.svg"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


   <!-- Contact us -->

 <!--  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col" align="center">
          <h2>Got a Question?</h2>
          <p>We would love to meet u and talk more about your needs hoping <br />
          to see u soon don’t forget to register.</p>
          <a class="hvr-shrink" href="#"><button class="btn btn-primary">Contact Us</button></a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Companies -->

  <section id="clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <p>Companies we've helped build</p>
        </div>
        <div class="col-lg-9">
          <div class="client-wrap">
            <div class="client-box">
              <img src="img/client/6.svg">
            </div>
            <div class="client-box">
              <img src="img/client/1.jpg">
            </div>
            <div class="client-box">
              <img src="img/client/2.png">
            </div>
            <div class="client-box">
              <img src="img/client/3.jpg">
            </div>
            <div class="client-box">
              <img src="img/client/4.jpg">
            </div>
            <div class="client-box">
              <img src="img/client/5.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
