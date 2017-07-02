@extends('layouts.plane')
@section('dashboard')

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-black-333 sm-text-center p-5">
      <div class="container">
        <div class="row">

          <div class="col-md-3 pr-0">
            <div class="widget no-border m-0">

            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord orange bg-white">
            <a class="menuzord-brand pull-left flip xs-pull-center" href="{{url('/')}}">
              <img src="{{asset('img/logo.jpg')}}" alt="" style="width:40%; max-height:75px;">
            </a>
            <ul class="menuzord-menu">
              <li @if($s == 1) class="active" @endif><a href="{{url('/')}}">Home</a></li>
              <li @if($s == 2) class="active" @endif><a href="{{url('about-us')}}">About Us</a></li>
              <li @if($s == 3) class="active" @endif><a href="{{url('kontak')}}">Kontak</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="main-content container">
    @yield('content')
  </div>
  <!-- Footer -->
  <footer id="footer" class="footer col-sm-12" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-20 pb-30 ">
      <div class="row border-bottom-black">
        <div class="col-md-6">
          <p class="font-11 text-black-777 m-0 sm-text-center">Copyright &copy;2017 Trexton. All Rights Reserved</p>
        </div>
        <div class="col-md-6 text-right">
          <div class="widget no-border m-0">
            <ul class="list-inline sm-text-center mt-5 font-12">
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>|</li>
              <li>
                <a href="#">Help Desk</a>
              </li>
              <li>|</li>
              <li>
                <a href="#">Support</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
@stop
