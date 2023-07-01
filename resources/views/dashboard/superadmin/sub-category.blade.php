@extends('dashboard.layout.main')
@section('content')
<div class="container">

	@if (session()->has('success'))
		<div class="alert alert-primary alert-dismissible fade show mt-5" role="alert">
			 {{ session('success') }}
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	@if (session()->has('failure'))
		<div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
			 {{ session('failure') }}
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="row mt-5">
		<div class="">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal">
			  Add Sub-Category
			</button>
		</div>
		@php
		$cat_id = app()->request->category;
		@endphp
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
			  	@foreach ($sub_categories as $key => $sub_cat)	
			    <tr>
			      	<th scope="row">{{ $key + 1 }}</th>
			      	<td>{{ $sub_cat->sub_title }}</td>
			      	<td>
			      		<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
			      	</td>
			      	<td>
			      		<button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#blogEdit_{{ $sub_cat->id }}"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
					</td>
			      	<td>
			      		<a class="btn btn-sm btn-danger" href="{{ route('dashboard.superadmin.subcategory.destroy',['subcategory' => $sub_cat]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      	</td>
			    </tr>

			    <!-- Edit Modal -->
					<div class="modal fade" id="blogEdit_{{ $sub_cat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">{{ $sub_cat->sub_title }}</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					  		<form method="POST" action="{{ route('dashboard.superadmin.subcategory.update', ['subcategory' => $sub_cat]) }}" enctype="multipart/form-data">
					  			@csrf
						      	<div class="modal-body">
								  	<div class="mb-3">
									    <label for="title" class="form-label">Title</label>
									    <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" id="title" value="{{ $sub_cat->sub_title }}" required>
									    @error('title')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
									    <label for="price_from" class="form-label">Price from</label>
									    <input type="text" name="price_from" class="form-control @error('price_from') is-invalid @enderror" id="price_from" value="{{ $sub_cat->price_from }}" required>
									    @error('price_from')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
									    <label for="price_to" class="form-label">Price to</label>
									    <input type="text" name="price_to" class="form-control @error('price_to') is-invalid @enderror" id="price_to" value="{{ $sub_cat->price_to }}" required>
									    @error('price_to')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
									    <label for="liquor" class="form-label">Liquor</label>
									    <input type="text" name="liquor" class="form-control @error('liquor') is-invalid @enderror" id="liquor" value="{{ $sub_cat->liquor }}" required>
									    @error('liquor')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
									    <label for="flavour" class="form-label">Flavour</label>
									    <input type="text" name="flavour" class="form-control @error('flavour') is-invalid @enderror" id="flavour" value="{{ $sub_cat->flavour }}" required>
									    @error('flavour')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
									    <label for="ingredients" class="form-label">Ingridents</label>
									    <input type="text" name="ingredients" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" value="{{ $sub_cat->ingredients }}" required>
									    @error('ingredients')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
									    <label for="caffeine" class="form-label">Caffeine</label>
									    <select name="caffeine" class="fom" id="" required>
									    	<option value="High Caffeine">High Caffeine</option>
									    	<option value="Low Caffeine">Low Caffeine</option>
									    	<option value="Caffeine Free">Caffeine Free</option>
									    </select>
									    @error('caffeine')
					                <div class="text-danger">{{ $message }}</div>
					            @enderror
								  	</div>
								  	<div class="mb-3">
								    	<label for="description" class="form-label">Description</label>
									    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="6" required>{{ $sub_cat->description }}</textarea>
									    @error('description')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
								  	</div>
								  	<div class="mb-3">
							            <label class="form-label" for="inputGroupFile02">Image</label>
							            <input type="file" class="form-control" id="inputGroupFile02" name="image[]" multiple>
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
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub-Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  		<form method="POST" action="{{ route('dashboard.superadmin.subcategory.store') }}" enctype="multipart/form-data">
  			@csrf
  			<input type="hidden" value="{{ $cat_id }}" name="category_id">
	      	<div class="modal-body">
			  	<div class="mb-3">
				    <label for="sub_title" class="form-label">Title</label>
				    <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" required>
				    @error('sub_title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
			  	</div>
			  	<div class="mb-3">
					    <label for="price_from" class="form-label">Price from</label>
					    <input type="text" name="price_from" class="form-control @error('price_from') is-invalid @enderror" id="price_from" required>
					    @error('price_from')
	                <div class="text-danger">{{ $message }}</div>
	            @enderror
				  	</div>
				  	<div class="mb-3">
					    <label for="price_to" class="form-label">Price to</label>
					    <input type="text" name="price_to" class="form-control @error('price_to') is-invalid @enderror" id="price_to">
					    @error('price_to')
	                <div class="text-danger">{{ $message }}</div>
	            @enderror
				  	</div>
				  	<div class="mb-3">
					    <label for="liquor" class="form-label">Liquor</label>
					    <input type="text" name="liquor" class="form-control @error('liquor') is-invalid @enderror" id="liquor" required>
					    @error('liquor')
	                <div class="text-danger">{{ $message }}</div>
	            @enderror
				  	</div>
				  	<div class="mb-3">
					    <label for="flavour" class="form-label">Flavour</label>
					    <input type="text" name="flavour" class="form-control @error('flavour') is-invalid @enderror" id="flavour" required>
					    @error('flavour')
	                <div class="text-danger">{{ $message }}</div>
	            @enderror
				  	</div>
				  	<div class="mb-3">
					    <label for="ingredients" class="form-label">Ingredients</label>
					    <input type="text" name="ingredients" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" required>
					    @error('ingredients')
	                <div class="text-danger">{{ $message }}</div>
	            @enderror
				  	</div>
				  	<div class="mb-3">
					    <label for="caffeine" class="form-label">Caffeine</label>
					    <select name="caffeine" class="fom" id="" required>
					    	<option value="High Caffeine">High Caffeine</option>
					    	<option value="Low Caffeine">Low Caffeine</option>
					    	<option value="Caffeine Free">Caffeine Free</option>
					    </select>
					    @error('caffeine')
	                <div class="text-danger">{{ $message }}</div>
	            @enderror
				  	</div>
			  	<div class="mb-3">
			    	<label for="description" class="form-label">Description</label>
				    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="3" required></textarea>
				    @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
			  	</div>
			  	<div class="mb-3">
            <label class="form-label" for="inputGroupFile02">Images</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile02" name="image[]" multiple required>
            @error('image')
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