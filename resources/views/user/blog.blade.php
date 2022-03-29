@extends('layouts.user')

@section('content')
@include('user.includes.header')
      <!-- main_Blog -->
      <div class="main_Blog section" style="z-index: -1">
      <h2>Welcome</h2>
    </div>
    <!-- Latest News -->
    <div class="Latest_News">
      <div class="container">
        <h2 class="hadding">Latest News</h2>
        @foreach($blogs as $blog)
        @if($loop->iteration % 2 == 0)
        <div class="card even">
          <div class="img">
            <img src="{{asset('img/blogs/' . $blog->img)}}" alt="" />
          </div>
          <div class="txt">
            <div class="data">
              <h2>{{$blog->number}}</h2>
              <span>DEC 2022 </span>
            </div>
            <div class="title_News">
              <a href="#blog"><span>BY {{$blog->name}}</span> / WEDDING</a>
              <h3>{{$blog->desc}}</h3>
              <a href="#" class="red_more">READ MORE</a>
            </div>
          </div>
        </div>
        @else
        <div class="card odd">
          <div class="txt">
            <div class="data">
              <h2>{{$blog->number}}</h2>
              <span>DEC 2022 </span>
            </div>
            <div class="title_News">
              <a href="#blog"><span>BY {{$blog->name}}</span> / WEDDING</a>
              <h3>{{$blog->desc}}</h3>
              <a href="#" class="red_more">READ MORE</a>
            </div>
          </div>
          <div class="img">
            <img src="../img/c.jpg" alt="" />
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
    <!-- footer -->
    @include('user.includes.footer')
    <div class="btn_top">
      <i class="icon-arrow-up"></i>
      <p>Top</p>
    </div>
@endsection
