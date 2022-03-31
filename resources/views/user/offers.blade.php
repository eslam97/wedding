@extends('layouts.regster')

@section('content')
@include('user.includes.header')
@include('admin.includes.alerts.success')
@include('admin.includes.alerts.error')
    <!-- main_Contact -->
    <div class="main_Contact section" style="z-index: -1">
      <h2>Booking</h2>
    </div>
    <div class="contactUs">
      <div class="container">
        <h2>Booking</h2>
        <div>
          <div class="txt">
            <p>
              Thank you so much for reaching out to us - we are excited to
              connect with you! Tell us about you. If you do not receive
              response within 24 hours, please contact us directly email or
              phone.
            </p>
            <br />
            <p><span>Phone </span> : +1.123.444.0000</p>
            <br />
            <p><span>eMail </span> : info@bethany.com</p>
            <br />
            <p>
              <span>Address </span> : Broadway 5 St Normain New York 98499, USA
            </p>
        </div>

    <div class="row d-flex justify-content-center" style='display:flex'>
            <!--Grid column-->
            @if(isset($halls) && $halls -> count() > 0)
                @foreach($halls as $hall)
                        <div class="card" style='width:20%; margin-right:25px; margin-bottom:25px'>
                            <div class="card-body text-center">
                                <h1 class="mt-0 mb-1 mb-2" style='text-align:center;'>{{$hall -> name}}
                                </h1>
                                <p class="grey-text mb-2" style='font-size:16px;text-align:center'>{{$hall -> desc}}</p>
                                <p class="grey-text mb-2" style='font-weight: bold;text-align:center'>{{$hall -> price}}</p>
                                <img style="width:100%; height:200px;" src="{{asset('img/halls/' . $hall->master_img)}}">

                                <br>
                                @auth
                                <a id="home-updates-angular" href="{{route('offer.show',$hall -> id)}}"
                                   role="button" class="btn  btn-success px-3 waves-effect waves-light" style='background-color: var(--main_color);width:50%;margin:auto; color:#fff;padding:20px 30px;text-align:center'>Book
                                    </a>
                                    @endauth
                            </div>

                        </div>

            @endforeach
        @endif
        <!--Grid column-->


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
