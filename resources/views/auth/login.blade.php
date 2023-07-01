@extends('layout.main')
@push('styles')
<style>
.align{
    padding-right: 18rem;
}
@media (max-width: 700px) {
    .align{
    padding-right: 0;
  }
  }

</style>

<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- <div class="">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card mt-5">
               <div class="card-header d-flex justify-content-between align-items-center">
                   <h3>Login</h3>
                   <div class="">
                       <button class="btn btn-sm btn-primary">
                           <a href="{{ route('register') }}">Register</a>
                       </button>
                   </div>
               </div>
   
               <div class="card-body">
                   <form method="POST" action="{{ route('login') }}">
                       @csrf
   
                       <div class="form-group row">
                           <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
   
                           <div class="col-md-6">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
   
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
   
                       <div class="form-group row">
                           <div class="col-md-6 offset-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
   
                                   <label class="form-check-label" for="remember">
                                       {{ __('Remember Me') }}
                                   </label>
                               </div>
                           </div>
                       </div>
   
                       <div class="form-group row mb-0">
                           <div class="col-md-8 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Login') }}
                               </button>
   
                               @if (Route::has('password.request'))
                                   <a class="btn btn-link mt-3 mt-sm-0 mt-md-3 mt-lg-0" href="{{ route('password.request') }}">
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
   </div> -->
<section class="container-fluid p-0">
   <div class="row login-row">
      <div class="col-lg-12 main-column">
         {{-- <div class="">
            <div class="d-flex justify-content-end align-items-center" style="height: 100vh">
               <h1 class="text-light">Welcome to T medly</h1>
                </div>
         </div>
      </div> --}}
      <div class="row justify-content-end">
         <div class="col-lg-5 form-column align">
            <div class="mt-5 pt-5">
               <form method="POST" action="{{ route('login') }}" class="form-signin">
                  @csrf
                  <h2 class="text-center mt-3">Nice to see you again</h2>
                  <h2 class="mb-4 text-center">Welcome Back!</h2>
                  <div class="form-group row">
                     <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                     <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->
                     <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label class="form-check-label" for="remember">
                           {{ __('Remember Me') }}
                           </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-block" style="min-height: auto;">
                        {{ __('Login') }}
                        </button>
                     </div>
                  </div>
                  <p class="text-center">OR</p>
                  <div class="form-group row mb-3">
                     <div class="col-md-12">
                        <a href="{{ route('register') }}" class="btn btn-block btn-outline-primary" style="min-height: auto;"> Create an Account</a>
                     </div>
                  </div>
                  {{-- <div class="form-group row mb-0">
                     <div class="col-md-12">
                        <button class="btn btn-block btn-outline-secondary" style="min-height: auto;"><i class="fab fa-google"></i> Signin with google</button>
                     </div>
                  </div> --}}
               </form>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
@endsection