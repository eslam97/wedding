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
        <th scope="col">Payment ID</th>
        <th scope="col">Payment Type</th>
        <th scope="col">Progress</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
    @foreach($endpayments as $endpayment)
    <?php $i++?>
    <tr>
      <td>{{$i}}</td>
        <td>{{$endpayment->payment_status_id}}</td>
        <td>{{$endpayment->payment_brand}}</td>
        <td class="d-flex justify-content-around">
            <a href="#" class="btn btn-success">Approve</a>
            <a onclick="return confirm('are you sure?')" href="#" class="btn btn-danger">Cancel</a>
        </td>

    </tr>
    @endforeach

  </tbody>
</table>

</div>
@endsection

