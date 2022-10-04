@extends('frontend.layouts.main')

@section('main-container')
        <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Get In Touch</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form" enctype="multipart/form-data" action="{{url('/uploadfile')}}" method="POST">
                     <div class="row">
                        @csrf
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Full Name" type="file" required="required" name="uploadfile"> 
                        </div>

                        <div class="col-md-12">
                           <button class="send_btn" type="submit">Upload</button>
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