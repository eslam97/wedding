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
        <th scope="col">Wedding Name</th>
        <th scope="col">Customer's Email</th>
        <th scope="col">Payment Type</th>
        <th scope="col">Amount</th>
        <th scope="col">Actual Price</th>
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
        <td>{{$endpayment->hall->name}}</td>
        <td>{{$endpayment->user->email}}</td>
        <td>{{$endpayment->payment_brand}}</td>
        <td>{{$endpayment->amount}}</td>
        <td>{{$endpayment->hall->actual_price}}</td>
        <td class="d-flex justify-content-around">
          @if($endpayment->status_payment == null)
            <a href="{{route('changestatus', $endpayment->id)}}" class="btn btn-success">Approve</a>
            <a onclick="return confirm('are you sure?')" href="{{route('changestatusRefuse', $endpayment->id)}}" class="btn btn-danger">Refuse</a>
          @elseif($endpayment->status_payment == 1)
          <a disabled href="#" class="btn btn-success">Approved</a>
          @elseif($endpayment->status_payment == 0)
          <a disabled href="#" class="btn btn-danger">Refused</a>
          @endif



            
        </td>

    </tr>
    @endforeach

  </tbody>
</table>

</div>
@endsection

