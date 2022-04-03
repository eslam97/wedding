@extends('layouts.head')
@section('body')
@extends('layouts.app')

<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <form action="{{route('admin.update', $hall->id)}}" method="post" enctype='multipart/form-data' style="margin-top:5%" >
          {{ method_field('POST') }}
              @csrf
    <div class="mb-3">
      <input type="text" class="form-control" name="id" id="exampleInputPassword1" value="{{$hall->id}}" hidden >
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$hall->name}}" name="name"  aria-describedby="emailHelp"  placeholder="Enter A Hall Name">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descreption</label>
    <input type="text" class="form-control" name="desc" value="{{$hall->desc}}" id="exampleInputPassword1"  placeholder="Enter A Hall Descreption">
  </div>

  <div class="mb-3">
      <label for="actual_price" class="form-label">Price for meter</label>
      <input type="text" class="form-control" name="actual_price"  value="{{$hall->actual_price}}"id="actual_price"  placeholder="Enter A Hall actual_price">
      @error('actual_price')
      <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <div class="text-center">
        <img
          style="width:50%; height:100px;"
          src="{{asset('img/halls/' . $hall->master_img)}}"
          class=" height-150" >
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
    <input type="number" class="form-control" name="price"  value="{{$hall->price}}"  id="exampleInputPassword1"  placeholder="Enter A Hall Price">
    @error('price')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>

@endsection
