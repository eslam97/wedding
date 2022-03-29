@extends('layouts.regster')

@section('content')
@include('user.includes.header')
    <!-- main_Contact -->
    <div class="main_Contact section" style="z-index: -1">
      <h2>Booking</h2>
    </div>
    <div class="contactUs">
      <div class="container">
        <h2>Booking</h2>
        <div class="flex">
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
          <form>
            <input
              type="text"
              placeholder="Full Name*"
              name="Uname"
              class="Full_width"
            />
            <div class="flex_input">
              <input type="email" placeholder="Email address*" name="email" />
              <input type="text" placeholder="Phone*" name="phone" />
            </div>
            <br />
            <label for="cars">Choose a party:</label> <br />
            <select id="cars Full_width" class="" name="cars">
              <option value="volvo">wadding</option>
              <option value="saab">brithday</option>
              <option value="fiat">graduation</option>
            </select>
            <input type="date" name="date" class="Full_width" />
            <textarea
              placeholder="Massage*"
              name="Massage"
              class="Full_width"
            ></textarea>
            <button type="submit" class="btn">submit</button>
          </form>
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
