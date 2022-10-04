@extends('frontend.layouts.main')

@section('main-container')

      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="{{url('frontend_files/images/banner_ing.jpg')}}" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>01/03</span>
                              <h1>Milina nail Salon Creating Beauty</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="{{url('frontend_files/images/banner_ing.jpg')}}" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>02/03</span>
                              <h1>Milina nail Salon Creating Beauty</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="{{url('frontend_files/images/banner_ing.jpg')}}" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>03/03</span>
                              <h1>Milina nail Salon Creating Beauty</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>
                              <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- what we do  -->
      <div class="we_do slin">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What We Do </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 offset-lg-1 col-md-12">
                  <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="{{url('frontend_files/images/weicon1.png')}}" alt="#"/></i>
                           <h3>Nail Art</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="{{url('frontend_files/images/weicon2.png')}}" alt="#"/></i>
                           <h3>Manicure</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="{{url('frontend_files/images/weicon3.png')}}" alt="#"/></i>
                           <h3>Pedicure</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="we_box">
                           <i><img src="{{url('frontend_files/images/weicon4.png')}}" alt="#"/></i>
                           <h3>Paraffin wax</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end what we do  -->
      <!-- about -->
      <div class="about slin2">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img src="{{url('frontend_files/images/about.png')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our pricing -->
      <div  class="pricing slin">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Pricing</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="pricing_box">
                     <div class="pricing_box_ti">
                        <h3> <span>$</span>20<strong>/one Day</strong></h3>
                     </div>
                     <div class="our_pricing">
                        <span>Regular</span>
                        <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                     </div>
                  </div>
                  <a class="read_more mar_top" href="Javascript:void(0)"> Book Now</a>
               </div>
               <div class="col-md-4">
                  <div class="pricing_box">
                     <div class="pricing_box_ti">
                        <h3> <span>$</span>30<strong>/one Day</strong></h3>
                     </div>
                     <div class="our_pricing">
                        <span>Standard</span>
                        <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                     </div>
                  </div>
                  <a class="read_more mar_top" href="Javascript:void(0)"> Book Now</a>
               </div>
               <div class="col-md-4">
                  <div class="pricing_box">
                     <div class="pricing_box_ti">
                        <h3> <span>$</span>40<strong>/one Day</strong></h3>
                     </div>
                     <div class="our_pricing">
                        <span>Premium</span>
                        <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                     </div>
                  </div>
                  <a class="read_more mar_top" href="Javascript:void(0)"> Book Now</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end our pricing -->
      <!-- experts -->
      <div  class="experts slin2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Meet Our Experts</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="{{url('frontend_files/images/blog1.jpg')}}" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Jacob</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="{{url('frontend_files/images/blog2.jpg')}}" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Lonut</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="{{url('frontend_files/images/blog3.jpg')}}" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Irina</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <a class="read_more mar_top exper" href="Javascript:void(0)"> Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end experts -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Get In Touch</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email " type="type" name="Email "> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="386" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
 @endsection