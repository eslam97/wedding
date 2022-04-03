@extends('layouts.head')
@section('body')

@extends('layouts.app')
<div class="container-new">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    
    
    @if(isset($invoices) && $invoices->count() >= 1 )

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Invoce Name</th>
      <th scope="col">Invoice Number</th>
      <th scope="col">Hall Name</th>
      <th scope="col">Price</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Progress</th>

    </tr>
  </thead>
  <tbody>
    <?php $i=0 ?>
    @foreach($invoices as $invoice)
    <?php $i++?>
    <tr>
      <td>{{$i}}</td>
      <td>{{$invoice->invoce['name']}}</td>
      <td>{{$invoice->invoce['numberofinvoce']}}</td>
      <td>{{$invoice->hall['name']}}</td>
      <td>{{$invoice->amount}}</td>
      <td>{{$invoice->details['address']}}</td>
      <td>{{$invoice->getStatus_payment()}}</td>
      <td class="d-flex justify-content-around"><a href="{{route('invoice.show', $invoice->id)}}" class="btn btn-secondary">Show</a>

    </tr>
    @endforeach

  </tbody>
</table>
{{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {{ $invoices->links() }}
        </div>
    @else
      <div style="text-align: center;
    font-size: 20px;
    font-weight: bold;
    margin-top: 10%;">
        Sorry You Didnt Have Any Invoices
      <div>
      @endif

</div>
@endsection

