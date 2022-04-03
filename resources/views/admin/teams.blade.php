@extends('layouts.head')
@section('body')

@extends('layouts.app')
<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <div class="d-flex justify-content-around">
            <a href="{{route('create.team')}}" class='col-md-3 btn btn-outline-primary'>Add New Team</a>
          </div>

          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Progress</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
    @foreach($teams as $team)
    <?php $i++?>
    <tr>
      <td>{{$i}}</td>
      <td>{{$team->name}}</td>
      <td class="d-flex justify-content-around"><a href="{{route('edit.team', $team->id)}}" class="btn btn-success">Edit</button>
        <a onclick="return confirm('are you sure?')" href="{{route('delete.team', $team->id)}}" class="btn btn-danger">Delete</button></td>

    </tr>
    @endforeach

  </tbody>
</table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {{ $teams->links() }}
        </div>

</div>
@endsection

