@extends('layouts.user')

@section('content')
@include('user.includes.header')
    <!-- main_about -->
    <div class="main_about section" style="z-index: -1">
      <h2>Welcome</h2>
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
          <img src="../img/about.jpg" alt="" />
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
    <!-- Creative Team -->
    <div class="Creative_Team">
      <div class="container">
        <h2 class="title">Creative Team</h2>
        <div class="flex_card">
          <div class="card">
            <img src="../img/team1.jpg" alt="" />
            <div class="txt">
              <h3>Olivia Louise</h3>
              <p>Wedding & Event Planner</p>
              <div class="flex">
                <div class="center_flex">
                  <div class="flex_icons">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                  </div>
                  <p>olivia@bethany.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="../img/team1.jpg" alt="" />
            <div class="txt">
              <h3>Olivia Louise</h3>
              <p>Wedding & Event Planner</p>
              <div class="flex">
                <div class="center_flex">
                  <div class="flex_icons">
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                  </div>
                  <p>olivia@bethany.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- prand -->
    <div class="prand">
      <div class="container">
        <div class="grid">
          <img src="../img/1_end.jpg" alt="" />
          <img src="../img/2_end.jpg" alt="" />
          <img src="../img/3_end.jpg" alt="" />
          <img src="../img/4_end.jpg" alt="" />
          <img src="../img/end_5.jpg" alt="" />
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
