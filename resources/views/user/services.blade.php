@extends('layouts.user')

@section('content')
@include('user.includes.header')
    <!-- main Services -->
    <div class="main_Services">
      <h2>Services</h2>
    </div>
    <!-- Our Services -->
    <div class="Services section" style="z-index: -1">
      <div class="container">
        <h2 class="title">Services</h2>
        <div class="grid">
        @if(isset($halls) && $halls -> count() > 0)
            @foreach($halls as $hall)
          <div class="card">
            <img src="{{asset('img/halls/' . $hall->master_img)}}" alt="" />
            <div class="txt">
              <div>
                <h3>Weddings</h3>
                <h2><a href="{{route('offer.show',$hall->id)}}">{{$hall -> name}}</a></h2>
              </div>
            </div>
          </div>
          @endforeach
        @endif
        </div>
      </div>
    </div>
    <!--==================== QUESTIONS ====================-->
    <section class="questions section" id="F.A.Qs">
      <h2 class="hadding_q">F.A.Qs</h2>
      <div class="questions__container container">
        <div class="questions__group">
          <div class="questions__item">
            <header class="questions__header">
              <i class="icon-plus"></i>
              <h3 class="questions__item-title">
                Why do I need a wedding planner?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mauris porttitor magna vel ante luctus convallis. Nunc at tellus
                erat. Donec et magna lectus. Aliquam egestas vel arcu id
                maximus. Orci varius natoque penatibus et magnis
              </p>
            </div>
          </div>
          <br />
          <div class="questions__item">
            <header class="questions__header">
              <i class="icon-plus"></i>
              <h3 class="questions__item-title">
                What will working with a wedding planner entail?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mauris porttitor magna vel ante luctus convallis. Nunc at tellus
                erat. Donec et magna lectus. Aliquam egestas vel arcu id
                maximus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Praesent sollicitudin feugiat
                elementum.
              </p>
            </div>
          </div>
          <br />
          <div class="questions__item">
            <header class="questions__header">
              <i class="icon-plus"></i>
              <h3 class="questions__item-title">
                What happens on the wedding day itself?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mauris porttitor magna vel ante luctus convallis. Nunc at tellus
                erat. Donec et magna lectus. Aliquam egestas vel arcu id
                maximus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Praesent sollicitudin feugiat
                elementum.
              </p>
            </div>
          </div>
        </div>
        <br />
        <div class="questions__group">
          <div class="questions__item">
            <header class="questions__header">
              <i class="icon-plus"></i>
              <h3 class="questions__item-title">
                How many weddings do you take on each year?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mauris porttitor magna vel ante luctus convallis. Nunc at tellus
                erat. Donec et magna lectus. Aliquam egestas vel arcu id
                maximus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Praesent sollicitudin feugiat
                elementum.
              </p>
            </div>
          </div>
          <br />
          <div class="questions__item">
            <header class="questions__header">
              <i class="icon-plus"></i>
              <h3 class="questions__item-title">Do you have insurance?</h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mauris porttitor magna vel ante luctus convallis. Nunc at tellus
                erat. Donec et magna lectus. Aliquam egestas vel arcu id
                maximus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Praesent sollicitudin feugiat
                elementum.
              </p>
            </div>
          </div>
          <br />
          <div class="questions__item">
            <header class="questions__header">
              <i class="icon-plus"></i>
              <h3 class="questions__item-title">
                Will you be there on our wedding day?
              </h3>
            </header>

            <div class="questions__content">
              <p class="questions__description">
                Mauris porttitor magna vel ante luctus convallis. Nunc at tellus
                erat. Donec et magna lectus. Aliquam egestas vel arcu id
                maximus. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Praesent sollicitudin feugiat
                elementum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    @include('user.includes.footer')
    <div class="btn_top">
      <i class="icon-arrow-up"></i>
      <p>Top</p>
    </div>
@endsection
