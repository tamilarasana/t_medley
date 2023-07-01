@extends('layout.main')

@section('content')
<section>
  @if (session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
       {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="row mb-5">
    <div class="col-12 text-center">
      <h1 class="">Suggestion Box</h1>
      <p>We value your ideas and suggestions.</p>
      <div class="row justify-content-center">
      <p class="col-md-8">If you have any crazy ideas, or wacky experiments or creative suggestions, Drop them into our suggestion box and we’ll experiment on them to bring them to life or at least a try.</p>
      </div>

      <p>Fill out your Idea or Suggestion.</p>
      <div class="row justify-content-center">
        <div class="col-md-8">
          
        <form class="p-3 p-md-0" action="{{ route('send.suggestion') }}" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Name">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="idea" placeholder="Idea/Suggestion Enclosed">
            </div>
          </div>
          
          <div class="form-group">
            <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Your Idea/ Suggestion in Words"></textarea>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                By submitting this form I agree that the information that I have provided will be used by the company and a response e-mail will be delivered at my request.
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Send My Idea/ Suggestion</button>
        </form>
      </div>
        </div>
    </div>

    
  </div>
</section>
@endsection
