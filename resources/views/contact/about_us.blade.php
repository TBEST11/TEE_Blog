@extends('layouts.app')

@section('content')

<div class="About-bg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="aboutheading">
                <h3>About <span class="orange_color">Us</span></h3>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 
 
       <div class="section layout_padding">
          <div class="container">
            
             <div class="row">
                <div class="col-md-6">
                   <img src="{{asset('uploads/blog1.png')}}" alt="#" />
                </div>
                <div class="col-md-6">
                   <div class="full blog_cont">
                      <h4>The biggest and most awesome camera  of  year</h4>
                      <h5>MAY 14 2019 5 READ</h5>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                   </div>
                </div>
             </div>
             <div class="row margin_top_30">
                <div class="col-md-6">
                   <img src="{{asset('uploads/blog2.png')}}" alt="#" />
                </div>
                <div class="col-md-6">
                   <div class="full blog_cont">
                      <h4>What 3 years of android taught me the hard way</h4>
                      <h5>MAY 19 2019  5 READ</h5>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                   </div>
                </div>
             </div>
 
             <div class="row margin_top_30">
                <div class="col-md-6">
                   <img src="{{asset('uploads/blog1.png')}}" alt="#" />
                </div>
                <div class="col-md-6">
                   <div class="full blog_cont">
                      <h4>The biggest and most awesome camera  of  year</h4>
                      <h5>MAY 14 2019 5 READ</h5>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                   </div>
                </div>
             </div>
             <div class="row margin_top_30">
                <div class="col-md-6">
                   <img src="{{asset('uploads/blog2.png')}}" alt="#" />
                </div>
                <div class="col-md-6">
                   <div class="full blog_cont">
                      <h4>What 3 years of android taught me the hard way</h4>
                      <h5>MAY 19 2019  5 READ</h5>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                   </div>
                </div>
             </div>
 
 
 
 
 
 
 
 
             <div class="row margin_top_30">
                <div class="col-md-12">
                   <div class="button_section full center margin_top_30">
                      <a style="margin:0;" href="{{url('./contact/about_us')}}">Read More</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- end section -->

@endsection