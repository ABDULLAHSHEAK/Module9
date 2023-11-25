@extends('layouts.master')

@section('project')
  <div class="container" id="portfolio">
    <div class="row">
      <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animate__animated animate__slideInDown">
        <span class="portfolio-title">PORTFOLIO</span>
        <h1 class="gallery-title">My Latest Work</h1>
      </div>

      <div align="center" class=" wow animate__animated animate__fadeIn">
        <button class="btn btn-default filter-button" data-filter="all">All</button>
        <button class="btn btn-default filter-button" data-filter="hdpe">NewsPaper Site</button>
               <button class="btn btn-default filter-button" data-filter="php">PHP Site</button>
        <button class="btn btn-default filter-button" data-filter="sprinkle">E-Commerce Site</button>
        <button class="btn btn-default filter-button" data-filter="spray">Personal/Blog </button>
        <button class="btn btn-default filter-button" data-filter="irrigation">Business/Education</button>
      </div>
      <br />



      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe abir">
        <a href="https://dailybatikrom.net/" target="_blank">
          <img src="{{asset('img')}}/portfolio/news1.jpg" class="img-responsive">
        </a>
      </div>
      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter php abir">
        <a href="https://blog.aizonepro.com/" target="_blank"><img src="{{asset('img')}}/portfolio/php2.png" class="img-responsive"></a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter php abir">
        <a href="https://blog.aizonepro.com/" target="_blank"><img src="{{asset('img')}}/portfolio/2.png" class="img-responsive"></a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter php abir">
        <a href="https://blog.aizonepro.com/" target="_blank"><img src="{{asset('img')}}/portfolio/3.png" class="img-responsive"></a>
      </div>


      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle abir">
        <a href="http://exceptiononline.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/ecommers.png" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe abir">
        <a href="https://mamavagnanews.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/news2.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation abir">
        <a href="http://nuaccountingsolution.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/bus1.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/personal (5).jpg" class="img-responsive">
        </a>
      </div>


      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="https://ssc76bangladesh.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/personal (3).jpg" class="img-responsive">
        </a>
      </div>



      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/personal (1).jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/bus2.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/personal (4).jpg" class="img-responsive">
        </a>
      </div>


      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/personal (2).jpg" class="img-responsive">
        </a>
      </div>



      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/blog1.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/bus3.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation abir">
        <a href="#" target="_blank">
          <img src="{{asset('img')}}/portfolio/edu1.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation abir">
        <a href="https://webrankingheroes.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/webr.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe abir">
        <a href="https://bdshikkhabarta.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/blog2.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation abir">
        <a href="https://aizonepro.com/" target="_blank">
          <img src="{{asset('img')}}/portfolio/ai.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray abir">
        <a href="https://educationbangla.net/" target="_blank">
          <img src="{{asset('img')}}/portfolio/blog3.jpg" class="img-responsive">
        </a>
      </div>

      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle abir">
        <a href="" target="_blank">
          <img src="{{asset('img')}}/portfolio/ecommers2.png.jpg" class="img-responsive">
        </a>
      </div>
    </div>
  </div>
  <br><br>

@endsection
