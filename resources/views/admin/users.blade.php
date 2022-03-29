@extends('layouts.head')
@section('body')

@extends('layouts.app')
<div class="container-new">
    @include('admin.includes.alerts.success') 
    @include('admin.includes.alerts.error')
    @include('admin.includes.aside')

          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Progress</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
    @foreach($users as $user)
    <?php $i++?>
    <tr>
      <td>{{$i}}</td>
      <td>{{$user->first_name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->getIs_admin()}}</td>
      <td class="d-flex justify-content-around">
      
      <a onclick="return confirm('are you sure ?')" href="{{route('admin.users.status', $user->id)}}" class= " @if ($user->is_admin ==1) btn btn-danger @else btn btn-success @endif"  >@if ($user->is_admin ==1) Remove From Admin @else Make Admin @endif </button>

    </tr>
    @endforeach

  </tbody>
</table>

</div>
@endsection

