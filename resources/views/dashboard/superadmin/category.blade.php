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
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
			  Add Category
			</button>
		</div>
		<div class="col-md-12 mt-3">
			<table class="table table-dark">
			  <thead>
			    <tr>
			      <th scope="col">S.No</th>
			      <th scope="col">Title</th>
			      <th scope="col">Edit</th>
			      <th scope="col">Delete</th>
			      <th scope="col">Sub Category</th>

			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($categories as $key => $category)	
			    <tr>
			      	<th scope="row">{{ $key + 1 }}</th>
			      	<td>{{ $category->title }}</td>
			      	<td>
			      		<button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#categoryEdit_{{ $category->id }}"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
			      	</td>
			      	<td>
			      		<a class="btn btn-sm btn-danger" href="{{ route('dashboard.superadmin.category.destroy',['category' => $category]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
			      	<td>
			      		<a class="btn btn-sm btn-primary" href="{{ route('dashboard.superadmin.subcategory',['category' => $category]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
			      	</td>
			    </tr>

			    <!-- Edit Modal -->
					<div class="modal fade" id="categoryEdit_{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					  		<form method="POST" action="{{ route('dashboard.superadmin.category.update', ['category' => $category]) }}" enctype="multipart/form-data">
					  			@csrf
						      	<div class="modal-body">
								  	<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ $category->title }}" required>
									    @error('title')
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
			  	@endforeach

			  </tbody>
			</table>
		</div>
	</div>
</div>

<!-- Button trigger modal -->


<!-- Add Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  		<form method="POST" action="{{ route('dashboard.superadmin.category.store') }}" enctype="multipart/form-data">
  			@csrf
	      	<div class="modal-body">
			  	<div class="mb-3">
				    <label for="title" class="form-label">Title</label>
				    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required>
				    @error('title')
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

@endsection