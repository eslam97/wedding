@extends('layouts.head')
@extends('layouts.app')
@section('body')
<div class="container-new">
    @include('admin.includes.alerts.success') 
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <form action="{{route('admin.update', $hall->id)}}" method="post" enctype='multipart/form-data' >
          {{ method_field('POST') }}
              @csrf
  <div class="mb-3">
    <input type="text" class="form-control" name="id" id="exampleInputPassword1" value="{{$hall->id}}" hidden >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$hall->name}}" aria-describedby="emailHelp">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descreption</label>
    <input type="text" class="form-control" name="desc" id="exampleInputPassword1" value="{{$hall->desc}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <div class="text-center">
        <img
          style="width:50%; height:100px;"
          src="{{asset('img/halls/' . $hall->master_img)}}"
          class=" height-150" >
    </div>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload Image</label>
    <input type="file" class="form-control" name="img" id="exampleInputPassword1">
    @error('img')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="number" class="form-control" name="price" id="exampleInputPassword1" value="{{$hall->price}}" >
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
