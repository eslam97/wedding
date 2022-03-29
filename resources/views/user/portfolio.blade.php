@extends('layouts.user')

@section('content')
@include('user.includes.header')
    <!-- Portfolio -->
    <div class="main_Gallery section" style="z-index: -1">
      <h2>Gallery</h2>
    </div>
    <!-- Gallery -->
    <div class="Gallery">
      <div class="container">
        <h2 class="title">Gallery</h2>
        <ul class="ul_g">
          <li><a href="#" class="active_g">Wadding</a></li>
          <li><a href="#">brthday</a></li>
          <li><a href="#">graduation</a></li>
        </ul>
        <div class="grid">
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_1.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_2.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_3.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_4.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_4.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_5.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_6.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_2.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
          <div class="card">
            <div class="img">
              <img src="../img/Gallery_1.jpg" alt="" />
            </div>
            <i class="icon-heart"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Gallery -->
    <div class="Video_Gallery">
      <div class="container">
        <h2 class="title">Video Gallery</h2>
        <ul class="ul_g">
          <li><a href="#" class="active_g">Wadding</a></li>
          <li><a href="#">brthday</a></li>
          <li><a href="#">graduation</a></li>
        </ul>
        <div class="grid_one">
          <div class="card">
            <img src="../img/vidoi.jpg" alt="" />
            <i class="icon-play3"></i>
          </div>
          <div class="card">
            <img src="../img/v3.jpg" alt="" />
            <i class="icon-play3"></i>
          </div>
          <div class="card">
            <img src="../img/v3.jpg" alt="" />
            <i class="icon-play3"></i>
          </div>
        </div>
        <div class="grid_tow">
          <div class="card">
            <img src="../img/v2.jpg" alt="" />
            <i class="icon-play3"></i>
          </div>
          <div class="card">
            <img src="../img/v3.jpg" alt="" />
            <i class="icon-play3"></i>
          </div>
          <div class="card">
            <img src="../img/v4.jpg" alt="" />
            <i class="icon-play3"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    @include('user.includes.footer')
    <div class="btn_top">
      <i class="icon-arrow-up"></i>
      <p>Top</p>
    </div>
@endsection
