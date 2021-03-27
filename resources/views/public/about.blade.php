@extends('layouts.public-template')
@section('main-content')

<section id="ab-company">
    <div class="container">
      <div class="row">
        <div class="col" align="left">

          <div class="row mb-5">
            <div class="col-lg-7">
              <h2>Who we are</h2>
              <div class="line"></div>
              <p class="pr-5">
                <span>With numerous recruitment agencies in the marketplace, VGS Recruitment Solution Limited, has distinguished  itself over the last few years as a unique team of talent identification and attraction professionals, steadily creating value for employers and candidates alike.</span><br/><br/>
                Established in 2015 as a non-profit company, we have quickly expanded our operations to provide our clients with bespoke staffing solutions and talent management services in collaboration with several independent recruiters across Africa.<br/><br/>
                We are a duly registered consultancy with the Federal Ministry of Labour & Employment with speciality in the speedy delivery of hiring services to employers through our database development of tested candidates. Not only do we help you fill vital roles smarter and faster, we also ensure our candidates make the best decisions on their professional move.<br/><br/>
                VGS Recruitment Solution is currently growing a social talent attraction pool that connects employers with independent recruiters across Africa, to ensure job mobility for Africans within the continent.
              </p>
            </div>
            <div class="col-lg-5">
              <div class="abt-img">
                <img class="img-fluid" src="{{ url('img/abt.jpg') }}">
              </div>
            </div>
          </div>


          <p class="subtitle">Why Choose us?</p>
          <p>We are collaborative and client focused to diminish business risk in key hires through over 15 years of combined experience in executive headhunting, training and outsourcing services.</p>
          <div class="row">
            <div class="col-lg-4">
              <div class="offer-card">
                <h3>Speed</h3>
                <p>We work closely with our clients to ensure their exact needs are met in the least achievable timeframe.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="offer-card">
                <h3>Quality</h3>
                <p>We go beyond borders to engage only skilled professionals to fill our clients’ roles across various industries.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="offer-card">
                <h3>Precision</h3>
                <p>The accuracy of our processes have been tested and trusted to guarantee repeat business.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="offer-card">
                <h3>Afro-centric Collaborations</h3>
                <p>We engage other professionals in other parts of Africa to ensure job mobility by forging strong partnerships.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="offer-card">
                <h3>Value</h3>
                <p>Our good name and industry relevance is a testament to the value of our service offerings to you.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="offer-card">
                <h3>Budget-friendly</h3>
                <p>We offer our services at reasonable costs to fit our clients’ budget.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
            <div class="client-box">
              <img src="img/client/6.svg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
