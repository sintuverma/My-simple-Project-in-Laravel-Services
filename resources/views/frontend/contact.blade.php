
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
                  {!! Form::open(
                     [
                        'url' => 'contact/store',
                        'method'=>'POST',
                        'id'=>'contact',
                        'role'=>'form',
                        'class'=>'main_form',
                        'enctype'=>'multipart/formdata',
                     ]
                     ) !!}
                     <div class="row">
                        <div class="col-md-12">
                           {!!Form::select('size',
                            [
                              'User' => 'User',
                             'Admin' => 'Admin'
                        ],null,['class'=>'contactus', 'name'=>'usertype','placeholder'=>'selsect user type this is laravel form tag'])
                           !!}   
                        </div>
                        <div class="col-md-12">
                           {!!
                           Form::text('text', '',[
                              'id'=>'name','value'=>'','required'=>'','class'=>'contactus','placeholder'=>' Enter Full Name','name'=>'full_name'
                              ]) !!}    
                        </div>
                         <div class="col-md-12">
                           {!!
                              Form::email('email', '',[
                                 'id'=>'email','value'=>'','required'=>'','class'=>'contactus','placeholder'=>' Enter Your Email','name'=>'email'
                         ]) !!} 
                         </div>
                 
                         <div class="col-md-12">
                           {!!
                              Form::number('number', '',[
                                 'id'=>'email','value'=>'','required'=>'','class'=>'contactus','placeholder'=>' Enter Your Phone Number','name'=>'phone_number'
                         ]) !!} 
                         </div>
                         <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           {!! Form::label('label', 'check if you admin');!!}
                 
                           {!!Form::checkbox('check_box', '1', ['class' => 'form-control'])!!} &nbsp;
                 
                           {!!Form::radio('radio_button', '0', ['class' => 'form-control'] )!!}
                        </div>
                     </div>
                     {!!Form::submit('Send',['class'=>'send_btn']) !!}
                     {!! Form::close() !!}
                  
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