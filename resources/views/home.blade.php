@extends('layouts.user')

@section('content')
@include('user.includes.header')
    <!-- start_Home -->

    <div class="start_home">
    <div>
      @if(auth()->user()['is_admin'] == 1)
<a href="{{route('dashboard')}}" style="width: 80%;
padding: 12px 0px;
margin: 20px auto;
background-color: var(--main_color);
color: var(--color_fff);
border: none;
text-align: center;
transition: var(--transition);
cursor: pointer;">My Dashboard</a>
@endif
@auth
        <a href="{{route('invoice.index')}}" style="width: 80%;
padding: 12px 0px;
margin: 20px auto;
background-color: var(--main_color);
color: var(--color_fff);
border: none;
text-align: center;
transition: var(--transition);
cursor: pointer;">My Invocies</a>
@endauth
      </div>
      <div class="container">
        <div class="img">
          <img src="img/2.jpg" alt="" />
        </div>
        <div class="txt">
          <h2>To Know Us is to Love Us!</h2>
          <div class="flex_hadding">
            <h3>We make</h3>
            <h3 class="typing"></h3>
          </div>
          <p>
            We would love to meet up and chat about how we can make YOUR DREAM
            wedding happen!
          </p>
          <a href="#">Rade More</a>
        </div>
      </div>
    </div>
    <!-- About Bethany -->
    <div class="About">
      <div class="container">
        <div class="txt">
          <h2 class="hadding">About Bethany</h2>
          <h3>
            We would love to meet up and chat about how we can make <br />
            your dream wedding happen!
          </h3>
          <br />
          <p>
            Wedding elit miss eget the solin missen citudino sellus rutrum in
            lacus son nemine vestibulum eleifen ornare drana company tortor
            semper at. Suspendise asinim the sedisem tinciun the drana numune
            consue.
          </p>
          <br />
          <p>
            Destination elit miss eget the solin miss citudino phasellus rutrum
            into lacus miss. Vestibulum eleifen ornare drana sempe numune
            consue.
          </p>
          <br />
          <p>
            Event elit miss eget the solin miss citudino phasellus rutrum into
            the lacusi events vestibulum eleifen ornare drana company tortori
            sempeto numune consue design elit miss eget the solin miss citudino
            sellus rutrum in lacus miss vestibulum in the ornare drana company
            tortor semper at.
          </p>
        </div>
        <div class="img">
          <img src="img/about.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- Wedding Dates -->
    <div class="Wedding_dates">
      <div class="container">
        <div class="txt">
          <h2 class="hadding">Workplace</h2>
          <p>
            Happy party to organize weddings and events that accompany you on
            your beautiful day from beginning to end. Have a dream wedding and
            leave the planning and decorating to a happy party company
          </p>
        </div>
        <table>
          <tbody>
            <tr>
              <td>
                <h6>
                  1. Cairo <br />
                  <span>{September : 2022}</span>
                </h6>
              </td>
              <td><p class="font_D">Cairo</p></td>
            </tr>
            <tr>
              <td>
                <h6>
                  2. Gize <br />
                  <span>{October : 2022}</span>
                </h6>
              </td>
              <td><p class="font_D">Giza</p></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Client  -->
    <div class="client">
      <div class="container">
        <h2 class="title">Client Love</h2>
        <div class="flex_card__Love slider">
          <div class="card">
            <div class="txt_top">
              <div class="img">
                <img src="img/Clint_1.jpg" alt="" />
              </div>
              <div class="txt">
                <h3>Eloise & Michael</h3>
                <span>Bern, 2022</span>
              </div>
            </div>
            <p>
              Quality eu nunc bibe endum in finibus elit miss eget the solin
              miss citudin elit. Phasellus rutrum in lacus ut miss. Lestibulum
              tortor semper the drana. Wedding fusce ornare ut tortor hendreri.
            </p>
          </div>
          <div class="card">
            <div class="txt_top">
              <div class="img">
                <img src="img/clint_2.jpg" alt="" />
              </div>
              <div class="txt">
                <h3>Eloise & Michael</h3>
                <span>Bern, 2022</span>
              </div>
            </div>
            <p>
              Quality eu nunc bibe endum in finibus elit miss eget the solin
              miss citudin elit. Phasellus rutrum in lacus ut miss. Lestibulum
              tortor semper the drana. Wedding fusce ornare ut tortor hendreri.
            </p>
          </div>
          <div class="card">
            <div class="txt_top">
              <div class="img">
                <img src="img/clint_2.jpg" alt="" />
              </div>
              <div class="txt">
                <h3>Eloise & Michael</h3>
                <span>Bern, 2022</span>
              </div>
            </div>
            <p>
              Quality eu nunc bibe endum in finibus elit miss eget the solin
              miss citudin elit. Phasellus rutrum in lacus ut miss. Lestibulum
              tortor semper the drana. Wedding fusce ornare ut tortor hendreri.
            </p>
          </div>
          <div class="card">
            <div class="txt_top">
              <div class="img">
                <img src="img/clint_2.jpg" alt="" />
              </div>
              <div class="txt">
                <h3>Eloise & Michael</h3>
                <span>Bern, 2022</span>
              </div>
            </div>
            <p>
              Quality eu nunc bibe endum in finibus elit miss eget the solin
              miss citudin elit. Phasellus rutrum in lacus ut miss. Lestibulum
              tortor semper the drana. Wedding fusce ornare ut tortor hendreri.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Latest News -->
    <div class="Latest_News">
      <div class="container">
        <h2 class="hadding">Latest News</h2>
        <div class="card">
          <div class="img">
            <img src="img/a.jpg" alt="" />
          </div>
          <div class="txt">
            <div class="data">
              <h2>03</h2>
              <span>DEC 2022 </span>
            </div>
            <div class="title_News">
              <a href="#blog"><span>BY BETHANY</span> / WEDDING</a>
              <h3>My Favourite Special <br />Bridesmaid Gifts</h3>
              <a href="#" class="red_more">READ MORE</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="txt">
            <div class="data">
              <h2>05</h2>
              <span>DEC 2022 </span>
            </div>
            <div class="title_News">
              <a href="#blog"><span>BY BETHANY</span> / WEDDING</a>
              <h3>My Favourite Special <br />Bridesmaid Gifts</h3>
              <a href="#" class="red_more">READ MORE</a>
            </div>
          </div>
          <div class="img">
            <img src="img/a.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- prand -->
    <div class="prand">
      <div class="container">
        <div class="grid">
          <img src="img/1_end.jpg" alt="" />
          <img src="img/2_end.jpg" alt="" />
          <img src="img/3_end.jpg" alt="" />
          <img src="img/4_end.jpg" alt="" />
          <img src="img/end_5.jpg" alt="" />
        </div>
      </div>
    </div>
    @include('user.includes.footer')
    <div class="btn_top">
      <i class="icon-arrow-up"></i>
      <p>Top</p>
    </div>
@endsection
