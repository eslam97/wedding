@extends('layouts.head')
@extends('layouts.app')
@section('body')
<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <form action="{{route('admin.store')}}" method="post" enctype='multipart/form-data' >
          {{ method_field('POST') }}
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  aria-describedby="emailHelp"  placeholder="Enter A Hall Name">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descreption</label>
    <input type="text" class="form-control" name="desc" id="exampleInputPassword1"  placeholder="Enter A Hall Descreption">
  </div>

  <div class="mb-3">
      <label for="actual_price" class="form-label">Actual Price</label>
      <input type="text" class="form-control" name="actual_price"  id="actual_price"  placeholder="Enter A Hall actual_price">
      @error('actual_price')
      <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload Image</label>
    <input type="file" class="form-control" name="img"  id="exampleInputPassword1">
    @error('img')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price For Preview</label>
    <input type="number" class="form-control" name="price"  id="exampleInputPassword1"  placeholder="Enter A Hall Price">
    @error('price')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('aside').height(($('aside').height())-($('nav').outerHeight()));
    $('.container-new').css('width', ($('.container-new').outerWidth()) - ($("aside").outerWidth()));
</script>
@endsection
