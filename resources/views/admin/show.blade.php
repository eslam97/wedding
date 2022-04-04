@extends('layouts.head')
@extends('layouts.app')
@section('body')
<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <form  method="post" enctype='multipart/form-data' >
          {{ method_field('POST') }}
              @csrf
  <div class="mb-3">
  <img style="width:200px; height:200px;" src="{{asset('img/halls/' . $hall->master_img)}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value='{{$hall->name}}' name="title" aria-describedby="emailHelp" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Desc</label>
    <input type="text" class="form-control" name="desc" value='{{$hall->desc}}' id="exampleInputPassword1" disabled>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value='{{$hall->price}}' id="exampleInputPassword1" disabled>
  </div>
  

</form>

</div>

@endsection
