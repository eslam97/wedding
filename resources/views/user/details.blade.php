@extends('layouts.head')
@extends('layouts.app')
@section('body')
<div class="container">
    @include('admin.includes.alerts.success')
    @include('admin.includes.alerts.error')
    @auth
            <form method="post">
          {{ method_field('POST') }}
              @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address"  aria-describedby="emailHelp"  placeholder="Enter A Hall Name">
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" id="exampleInputPassword1"  placeholder="Enter A Hall Descreption">
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

            <button id="details"
                role="button" class="btn px-3 waves-effect waves-light"style='background-color:var(--main_color); color:#fff'> Save
            </button>

            </form>
            @endauth

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

                            @auth
                            <button id="checkout" disabled
                               role="button" class="btn px-3 waves-effect waves-light"style='background-color:var(--main_color); color:#fff'> Book
                            </button>
                            @endauth
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

  
    $('#details').on('click', function(e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: "{{route('offer.store', $hall->id)}}",
            data: {
                '_token': "{{csrf_token()}}",
                'address': $('input[name="address"]').val(),
                'phone': $('input[name="phone"]').val(),
                'user_id': {{auth()->user()->id}},
                'hall_id': '{{$hall->id}}'
            },
            success: function (data) {
            }, error: function (reject) {
            }
        });
        //to unlock save button after rejester
        if($('input[name="address"]').val() && $('input[name="phone"]').val()){
            $('#details').prop("disabled", true);
        }
        // to unlock book button
        if($('#details').attr("disabled")){
            $('#checkout').prop("disabled", false);
        }else{
            $('#checkout').prop("disabled", true);
        }

        });



$('#checkout').on('click', function(e){
        e.preventDefault();
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
