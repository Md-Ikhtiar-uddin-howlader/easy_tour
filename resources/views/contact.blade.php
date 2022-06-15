@extends('master')
@section('container')


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
 <img src="{{ asset('contactimage\contact.jpg') }}" class="img" style="width: 100%" >
        <div class="Contact">
          <div class="Content">
            <div class="left-side">
              <div class="operation details">
                <i class="fas fa-bell"></i>
                <div class="topic">Operation Hours</div>
                <div class="text-one">Monday-Saturday: 9AM - 5PM</div>
                <div class="text-two">Sunday: 9AM - 1PM</div>
              </div>

              <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one"> +601131241670</div>
                <div class="text-two"> +601131241490</div>
              </div>

              <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">easytour@gmail.com</div>
              </div>
            </div>

            <div class="right-side">
              <div class="topic-text">Send us a message</div>
              <p style="text-align: left; padding-bottom: 30px; font-size: 15px;">If you have any types of queries, you can send us message from here. It's our pleasure to help you.</p>
              <form action="#">
                <div class="input-box">
                  <input type="text" required="required" placeholder="Enter your name" >
                </div>
                <div class="input-box">
                  <input type="email" required="required" placeholder="Enter your email">
                </div>
                <div class="input-box message-box">
                  <input type="textbox" required="required" placeholder="Enter your message" >
            </div>

            <div class="button">
              <input type="button" value="Send Now">
            </div>
              </form>
            </div>
          </div>
        </div>



@endsection
