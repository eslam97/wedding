@extends('layouts.head')
@section('body')

@extends('layouts.app')
<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <div class="d-flex justify-content-around">
            <a href="{{route('create.blog')}}" class='col-md-3 btn btn-outline-primary'>Add New Blog</a>
          </div>

          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Desc</th>
      <th scope="col">Img</th>
      <th scope="col">Progress</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
    @foreach($blogs as $blog)
    <?php $i++?>
    <tr>
      <td>{{$i}}</td>
      <td>{{$blog->name}}</td>
      <td>{{$blog->desc}}</td>
      <td><img style="width:100%; height:100px;" src="{{asset('img/blogs/' . $blog->img)}}" ></td>
      <td class="d-flex justify-content-around"><a href="{{route('edit.blog', $blog->id)}}" class="btn btn-success">Edit</button>
        <a onclick="return confirm('are you sure?')" href="{{route('delete.blog', $blog->id)}}" class="btn btn-danger">Delete</button></td>

    </tr>
    @endforeach

  </tbody>
</table>

</div>
@endsection

