@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="btnlogin" class="btn btn-primary">

                                   {{ __('Login') }} 
                               </button>

                               @if (Route::has('password.request'))
                               <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
@section('scripts-js')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $("#btnlogin").click(function() {
        var postForm = {
          'email': document.getElementById("email").value,
          'password': document.getElementById('password').value
      };
      $.ajax({
          type:"post",
         url:'127.0.0.1:8000/api/v1/user/login',
          //url:'http://ysinvetaris.epizy.com/barang/selectBox_lokasi',
          data: postForm,
          success: function(data) {
            console.log(data);
                
        }
    });
  });
  });

</script>
@endsection
