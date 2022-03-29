@section('main')
<script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>
<form action="{{route('offer.show', $id)}}" class="paymentWidgets" data-brands="VISA MASTER"></form>
@endsection