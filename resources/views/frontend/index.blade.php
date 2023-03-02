@extends('layouts.frontend')
@section('content')
  <!-- ***** Main Banner Area Start ***** -->
  <div id="top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-content">
            <div class="inner-content">
              <h4>KlassyCafe</h4>
              <h6>THE BEST EXPERIENCE</h6>
              <div class="main-white-button scroll-to-section">
                <a href="#reservation">Make A Reservation</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="main-banner header-text">
            <div class="Modern-Slider">
              <!-- Item -->
              <div class="item">
                <div class="img-fill">
                  <img src="frontend/assets/images/slide-01.jpg" alt="">
                </div>
              </div>
              <!-- // Item -->
              <!-- Item -->
              <div class="item">
                <div class="img-fill">
                  <img src="frontend/assets/images/slide-02.jpg" alt="">
                </div>
              </div>
              <!-- // Item -->
              <!-- Item -->
              <div class="item">
                <div class="img-fill">
                  <img src="frontend/assets/images/slide-03.jpg" alt="">
                </div>
              </div>
              <!-- // Item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  <!-- ***** Menu Area Starts ***** -->
  @include('frontend.menu_meal')
  <!-- ***** Menu Area Ends ***** -->



  <!-- ***** cake Area Starts ***** -->
  @include('frontend.menu_cake')
  <!-- ***** cake Area Ends ***** -->

  <!-- ***** Chefs Area Starts ***** -->
  @include('frontend.chefs')
  <!-- ***** Chefs Area Ends ***** -->

  <!-- ***** Reservation Us Area Starts ***** -->
  <section class="section" id="reservation">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text-content">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
            </div>
            <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna
              diam, sed commodo purus porta ut.</p>
            <div class="row">
              <div class="col-lg-6">
                <div class="phone">
                  <i class="fa fa-phone"></i>
                  <h4>Phone Numbers</h4>
                  <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="message">
                  <i class="fa fa-envelope"></i>
                  <h4>Emails</h4>
                  <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-form">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <h4>Table Reservation</h4>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                      placeholder="Your Email Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <fieldset>
                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <select value="number-guests" name="number-guests" id="number-guests">
                      <option value="number-guests">Number Of Guests</option>
                      <option name="1" id="1">1</option>
                      <option name="2" id="2">2</option>
                      <option name="3" id="3">3</option>
                      <option name="4" id="4">4</option>
                      <option name="5" id="5">5</option>
                      <option name="6" id="6">6</option>
                      <option name="7" id="7">7</option>
                      <option name="8" id="8">8</option>
                      <option name="9" id="9">9</option>
                      <option name="10" id="10">10</option>
                      <option name="11" id="11">11</option>
                      <option name="12" id="12">12</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-6">
                  <div id="filterDate2">
                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                      <input name="date" id="date" type="text" class="form-control"
                        placeholder="dd/mm/yyyy">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <select value="time" name="time" id="time">
                      <option value="time">Time</option>
                      <option name="Breakfast" id="Breakfast">Breakfast</option>
                      <option name="Lunch" id="Lunch">Lunch</option>
                      <option name="Dinner" id="Dinner">Dinner</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Reservation Area Ends ***** -->
  <!-- ***** About Area Starts ***** -->
  <section class="section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="left-text-content">
            <div class="section-heading">
              <h6>About Us</h6>
              <h2>We Leave A Delicious Memory For You</h2>
            </div>
            <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank"
                rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS framework. You can download and
              feel free to use this website template layout for your restaurant business. You are allowed to use this
              template for commercial purposes. <br><br>You are NOT allowed to redistribute the template ZIP file on any
              template donwnload website. Please contact us for more information.</p>
            <div class="row">
              <div class="col-4">
                <img src="frontend/assets/images/about-thumb-01.jpg" alt="">
              </div>
              <div class="col-4">
                <img src="frontend/assets/images/about-thumb-02.jpg" alt="">
              </div>
              <div class="col-4">
                <img src="frontend/assets/images/about-thumb-03.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="right-content">
            <div class="thumb">
              <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
              <img src="frontend/assets/images/about-video-bg.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** About Area Ends ***** -->
@endsection
