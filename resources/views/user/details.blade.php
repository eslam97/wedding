@extends('layouts.head')
@extends('layouts.app')
@section('body')
<div class="container">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')

    <div class="row d-flex justify-content-center">
            <!--Grid column-->
            @if($hall)
                <div class="col-md-4 mb-4">

                    <div class="card">
                        <div class="card-body text-center">

                            <h5 class="mt-0 mb-1 mb-2">{{$hall -> name}}
                            </h5>
                            <p class="grey-text mb-2" >{{$hall -> description}}</p>
                            <p class="grey-text mb-2" id="price">{{$hall -> price}}</p>


                            <img
                            style="width:100%; height:200px;" src="{{asset('img/halls/' . $hall->master_img)}}"
                                class="my-3" alt="master image">

                            <br>

                            <a id="checkout"
                               role="button" class="btn px-3 waves-effect waves-light"style='background-color:var(--main_color); color:#fff'> Book
                            </a>
                        </div>

                    </div>

                </div>
                <div class="col-md-4 mb-4">
                    <h3>Choose Way to Payment</h3>

                    <div id="showPayForm"></div>

                    @if(isset($success))
                           <div class="alert alert-success text-center">
                                  paymen success
                           </div>
                        @endif


                    @if(isset($fail))
                        <div class="alert alert-danger text-center">
                            Error in payment please try again
                        </div>
                    @endif

                </div>

        @endif
        <!--Grid column-->

            <div class="col-md-6">


            </div>

        </div>
      </div>

@endsection
@section('script')
<script>
$('#checkout').on('click', function(e){
        e.preventDefault();
        console.log('noooooo');
        $.ajax({
            type: 'get',
            url: "{{route('offers.checkout')}}",
            data: {
                price: $('#price').text(),
                hall_id: '{{$hall->id}}'
            },
            success: function (data) {
                if (data.status == true) {
                    $('#showPayForm').empty().html(data.content);
                } else {
                    }
            }, error: function (reject) {
            }
        });
        });
        </script>
@endsection
