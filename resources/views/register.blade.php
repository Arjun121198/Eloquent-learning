@extends('layouts.master')
@section('title','register')
@section('content')
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration</h3>
            @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
            <form class="px-md-2" action="registerForm" id="myForm" method="post">
             @csrf
              <div class="form-outline mb-4">
              <label class="form-label" id="lfirst_name" for="form3Example1q">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" id="llast_name" for="form3Example1q">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" />
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
              <div class="form-outline mb-4">
              <label class="form-label" id="lemail" for="form3Example1q">Email</label>
                <input type="text" id="email" name="email" class="form-control" />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
           
              <div class="form-outline mb-4">
              <label class="form-label" id="lphone" for="form3Example1q">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" />
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" id="laddress" for="form3Example1q">Address</label>
                <input type="text" id="address" name="address" class="form-control" />
              </div>
              </div>
              
              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
            </form>
          </div>
          <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login"
                      class="link-danger">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  $("#myForm").submit(function(e)
  {
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var address = $("#address").val();
    if(email == ""&& first_name == "" && last_name == "" && phone == "")
    {
      $("#first_name").css("border-color",'red');
      $("#lfirst_name").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      $("#last_name").css("border-color",'red');
      $("#llast_name").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      $("#email").css("border-color",'red');
      $("#lemail").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      $("#phone").css("border-color",'red');
      $("#lphone").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      $("#address").css("border-color",'red');
      $("#laddress").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });

      e.preventDefault();
    }
    else
    {
      $("#first_name").css("border-color",'unset');
      $("#lfirstname").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
      $("#last_name").css("border-color",'unset');
      $("#llast_name").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
      $("#email").css("border-color",'unset');
      $("#lemail").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
      $("#phone").css("border-color",'unset');
      $("#lphone").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
      $("#address").css("border-color",'unset');
      $("#laddress").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });

    }
    if(first_name == null || first_name == "")
    {
      $("#first_name").css("border-color",'red');
      $("#lfirst_name").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      e.preventDefault();
    }
    else
    {
      $("#first_name").css("border-color",'unset');
      $("#lfirst_name").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
    }
    if(last_name == null || last_name == "")
    {
      $("#last_name").css("border-color",'red');
      $("#llast_name").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      e.preventDefault();
    }
    else
    {
      $("#last_name").css("border-color",'unset');
      $("#llast_name").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
    }

    if(email == null || email == "")
    {
      $("#email").css("border-color",'red');
      $("#lemail").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      e.preventDefault();
    }
    else
    {
      $("#email").css("border-color",'unset');
      $("#lemail").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
    }
   
    if(phone ==null || phone == "")
    {
      $("#phone").css("border-color",'red');
      $("#lphone").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      e.preventDefault();
    }
    else
    {
      $("#phone").css("border-color",'unset');
      $("#lphone").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
    }
    if(address == null || address == "")
    {
      $("#address").css("border-color",'red');
      $("#laddress").css({'font-family': 'ArvoBold','color': 'red', 'font-size': '100%' });
      e.preventDefault();
    }
    else
    {
      $("#address").css("border-color",'unset');
      $("#laddress").css({'font-family': 'unset','color': 'unset', 'font-size': 'unset' });
    }
  });
</script>  
@endsection
