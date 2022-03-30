@extends('layouts.head')
@extends('layouts.app')
@section('body')
<div class="container-new">
          <form  method="post" enctype='multipart/form-data'  style='margin-top:5%;'>
          {{ method_field('POST') }}
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Invoce Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value='{{$invoice->invoce->name}}' name="title" aria-describedby="emailHelp" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Invoice Number</label>
    <input type="text" class="form-control" name="desc" value='{{$invoice->invoce->numberofinvoce}}' id="exampleInputPassword1" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hall Name</label>
    <input type="text" class="form-control" name="price" value='{{$invoice->hall["name"]}}' id="exampleInputPassword1" disabled>
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="text" class="form-control" name="price" value='{{$invoice->amount}}' id="exampleInputPassword1" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Actual Price</label>
    <input type="text" class="form-control" name="price" value='{{$invoice->hall["actual_price"]}}' id="exampleInputPassword1" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">status</label>
    <input type="text" class="form-control" name="price" value='{{$invoice->getStatus_payment()}}' id="exampleInputPassword1" disabled>
  </div>
  @if($invoice->status_payment == 0)
  <div class="mb-3">
    <input type="text" class="form-control" name="price" value='Your Amount will cash back again for you soon' id="exampleInputPassword1" disabled>
  </div>
  @endif  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pay With</label>
    <input type="text" class="form-control" name="price" value='{{$invoice->payment_brand}}' id="exampleInputPassword1" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Invoice Time Created</label>
    <input type="text" class="form-control" name="price" value='{{$invoice->invoce->created_at}}' id="exampleInputPassword1" disabled>
  </div>



</form>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('aside').height(($('aside').height())-($('nav').outerHeight()));
    $('.container-new').css('width', ($('.container-new').outerWidth()) - ($("aside").outerWidth()));
</script>
@endsection
