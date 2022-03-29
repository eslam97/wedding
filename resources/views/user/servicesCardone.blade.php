@extends('layouts.user')

@section('content')
@include('user.includes.header')
<img src="../img/img_container_clinte.jpg" alt="" class="" />
    <div class="txt container" style="padding-top: 70px">
      <h2>Wedding Planner</h2>
      <p>
        Qurabit aliquet orci elit gene tristique lorem commodo vitae. Aliquam
        tince felis the gravida aliquam, neque libero hendrerit magna, sit amet
        mollis lacus quam maurisine. Aliquam erat the druna volutpat. Wedding
        ultricies nibh non dolor maximus sceleue. Integer molliser fauci neque
        nec tincidunte. Aliquam erate the volutpat. Praeser tempor maladi quam,
        nec rutrum arcu ornare sed duru egiter ligula at nibh viverra ultricies.
      </p>
      <br />
      <p>
        Destination aliue orci elit gene tristique lorem commodo vitae. Aliquam
        tince felis the gravia aliquam neque libero hendrerit magna, sit amet
        mollis lacus quam maurisine. Aliquam erat the druna volutpat. Wedding
        ultricies nibh non dolor maximus sceleue. Integer molliser fauci neque
        nec tincidunte. Aliquam erate the volutpat. Praeser tempor maladi quam,
        nec rutrum. Nunc lorem vivense design torral ipsum dolar a ranish
        maximus.
      </p>
      <br />
      <h3>Package Includes</h3>
      <ul>
        <li>1.Weddings & Events Workbook</li>
        <li>2.Unlimited access to expert wedding advice (via e-mail)</li>
        <li>3.Access to Preferred Vendors List</li>
        <li>4.Wedding Assistant for wedding dayc</li>
        <li>
          5.Oversee and help with ceremony/reception site set up & tear down
        </li>
        <li>6.Review of Vendor contracts</li>
        <li>
          7.Distribute final payments and gratuities to vendors as necessary
        </li>
      </ul>
    </div>
    <div class="grid_img container" style="padding-top: 70px">
      <div class="card">
        <div class="img">
          <img src="../img/b.jpg" alt="" />
        </div>
        <i class="icon-heart"> </i>
      </div>
      <div class="card">
        <div class="img">
          <img src="../img/a.jpg" alt="" />
        </div>
        <i class="icon-heart"> </i>
      </div>
      <div class="card">
        <div class="img">
          <img src="../img/a.jpg" alt="" />
        </div>
        <i class="icon-heart"> </i>
      </div>
      <div class="card">
        <div class="img">
          <img src="../img/a.jpg" alt="" />
        </div>
        <i class="icon-heart"> </i>
      </div>
    </div>
    <!-- footer -->
    @include('user.includes.footer')
    <div class="btn_top">
      <i class="icon-arrow-up"></i>
      <p>Top</p>
    </div>
@endsection
