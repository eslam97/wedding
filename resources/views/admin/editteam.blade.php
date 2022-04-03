@extends('layouts.head')
@section('body')
@extends('layouts.app')

<div class="container-new">
    @include('admin.includes.alerts.success') 
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <form action="{{route('update.team', $team->id)}}" method="post" >
          {{ method_field('POST') }}
              @csrf
  <div class="mb-3">
    <input type="text" class="form-control" name="id" id="exampleInputPassword1" value="{{$team->id}}" hidden >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$team->name}}" aria-describedby="emailHelp">
    @error('name')
      <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
