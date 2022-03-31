@extends('layouts.regster')
@section('content')
<div class="flex_img_form">
      <div class="txt_inside_img">
        <div>
          <h2>Creation starts here</h2>
          <p>Enjoy booking the best parties with the best parties</p>
        </div>
      </div>
      <form method="POST" action="{{ route('register') }}">
          @csrf
        <a href="#" class="logo">happy party</a>
        <h2>Join happy party</h2>
        <p>Alreadyhave an account? <a href="{{route('login')}}">Log in</a></p>
        <input id="first_name" type="text" placeholder="First Name" required class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
        @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="last_name" type="text" placeholder="Last Name" required class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
        @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="phone" type="number" placeholder="Phone" required class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="email" type="email" placeholder="Email address" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="password" type="password" placeholder="password" required class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="password-confirm" type="password" placeholder="confrmation password" required class="form-control" name="password_confirmation" required autocomplete="new-password">
        <button type="submit">Join</button>
      </form>
    </div>
@endsection
