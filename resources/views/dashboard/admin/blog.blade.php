@extends('dashboard.layout.main')

@section('content')
<div class="container">

	@if (session()->has('success'))
		<div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
			 {{ session('success') }}
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="row mt-5">
		<div class="">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal">
			  Add Blog
			</button>
		</div>
		<div class="col-md-12 mt-3">
			<table class="table table-dark">
			  <thead>
			    <tr>
			      <th scope="col">S.No</th>
			      <th scope="col">Title</th>
			      <th scope="col">View</th>
			      <th scope="col">Edit</th>
			      <th scope="col">Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($blogs as $key => $blog)	
			    <tr>
			      	<th scope="row">{{ $key + 1 }}</th>
			      	<td>{{ $blog->title }}</td>
			      	<td>
			      		<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
			      	</td>
			      	<td>
			      		<button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#blogEdit_{{ $blog->id }}"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
					</td>
			      	<td>
			      		<a class="btn btn-sm btn-danger" href="{{ route('dashboard.admin.blogs.destroy',['blog' => $blog]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      	</td>
			    </tr>

			    <!-- Edit Modal -->
					<div class="modal fade" id="blogEdit_{{ $blog->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">{{ $blog->title }}</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					  		<form method="POST" action="{{ route('dashboard.admin.blogs.update', ['blog' => $blog]) }}" enctype="multipart/form-data">
					  			@csrf
						      	<div class="modal-body">
								  	<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $blog->title }}" required>
									    @error('title')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
								    	<label for="description" class="form-label">Description</label>
									    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="6" required>{{ $blog->description }}</textarea>
									    @error('description')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
							            <label class="form-label" for="inputGroupFile02">Image</label>
							            <input type="file" class="form-control" id="inputGroupFile02" name="blog_image">
							        </div>
						      	</div>
						      	<div class="modal-footer">
								  	<button type="submit" class="btn btn-primary">Submit</button>
					  			</div>
							</form>
					    </div>
					  </div>
					</div>
			  	@endforeach

			  </tbody>
			</table>
		</div>
	</div>
</div>

<!-- Button trigger modal -->


<!-- Add Modal -->
<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  		<form method="POST" action="{{ route('dashboard.admin.blogs.store') }}" enctype="multipart/form-data">
  			@csrf
	      	<div class="modal-body">
			  	<div class="mb-3">
				    <label for="title" class="form-label">Title</label>
				    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required>
				    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
			  	</div>
			  	<div class="mb-3">
			    	<label for="description" class="form-label">Description</label>
				    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="6" required></textarea>
				    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
			  	</div>
			  	<div class="mb-3">
		            <label class="form-label" for="inputGroupFile02">Image</label>
		            <input type="file" class="form-control @error('blog_image') is-invalid @enderror" id="inputGroupFile02" name="blog_image" required>
		            @error('blog_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
		        </div>
	      	</div>
	      	<div class="modal-footer">
			  	<button type="submit" class="btn btn-primary">Submit</button>
  			</div>
		</form>
    </div>
  </div>
</div>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection