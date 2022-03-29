@extends('layouts.head')
@section('body')

@extends('layouts.app')
<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <div class="d-flex justify-content-around">
            <a href="{{route('admin.create')}}" class='col-md-3 btn btn-outline-primary'>Add New Wedding Hall</a>
          </div>

          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Desc</th>
      <th scope="col">Img</th>
      <th scope="col">Down Payment</th>
        <th scope="col">acutal price</th>

        <th scope="col">Progress</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
    @foreach($halls as $hall)
    <?php $i++?>
    <tr>
      <td>{{$i}}</td>
      <td>{{$hall->name}}</td>
      <td>{{$hall->desc}}</td>
      <td><img style="width:100%; height:100px;" src="{{asset('img/halls/' . $hall->master_img)}}" ></td>
      <td>{{$hall->price . ' EG'}}</td>
        <td>{{$hall->actual_price}}</td>

        <td class="d-flex justify-content-around"><a href="{{route('admin.edit', $hall->id )}}" class="btn btn-success">Edit</button>
      <a href="{{route('admin.show', $hall->id )}}" class="btn btn-secondary">Show</a>
        <a onclick="return confirm('are you sure?')" href="{{route('admin.delete', $hall->id )}}" class="btn btn-danger">Delete</button></td>

    </tr>
    @endforeach

  </tbody>
</table>

</div>
@endsection

