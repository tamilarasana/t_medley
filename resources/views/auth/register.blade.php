@extends('layout.main')

@push('styles')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush

@section('content')

<section class="container">
       <div class="row login-row">
      <div class="col-lg-12 register">
      <div class="row justify-content-center">
      
      <div class="col-lg-5 form-column ">
            <div class="mt-5 pt-5">
               <form method="POST" action="{{ route('login') }}" class="form-signin">
                  @csrf
                  <h2 class="text-center my-4">Hello! Please tell us a little bit of yourself.</h2>
                  <!-- <h2 class="mb-4 text-center">Welcome Back!</h2> -->
                  <div class="form-group row">
                     <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                     <div class="col-md-12">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->
                     <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>
                  </div>
                    <div class="form-group row">
                      <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Register') }}
                                </button>
                     </div>
                  </div>
                 
               </form>
            </div>
         </div>
        </div>
      </div>
      </div>

</section>
@endsection
