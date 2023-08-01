@extends('admin.layouts.app')
@section('main-section')
			
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Update Your data</h4>
			</div>
			<div class="card-body">


			@include('validate')
				<form action="{{ route('theme.update',1)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Address</label>
						<input name="address" value="{{$theme -> address}}" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input name="email" value="{{$theme -> email}}" type="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Cell Number</label>
						<input name="cell" value="{{$theme -> cell}}" type="text" class="form-control">
					</div>
					<div class="form-group">
						@php
							$social = json_decode($theme -> social, false);
						@endphp
						<label>Social Option</label>
						<div>
							<label>Facebook</label>
							<input name="fb" value="{{ $social -> fb}}" type="text" class="form-control">
						</div>
						<div>
							<label>Linkedin</label>
							<input name="din" value="{{ $social -> din}}" type="text" class="form-control">
						</div>
						<div>
							<label>GitHub</label>
							<input value="{{ $social -> git}}" name="git" type="text" class="form-control">
						</div>
						<div>
							<label>Email</label>
							<input name="mail" value="{{ $social -> mail}}" type="text" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label>Photo</label>
						<br>
						@if ($theme ->photo === 'photo.JPG')
								<img style="width:180px; height:190px;" src="{{ url('home/aseets/img/photo.JPG') }}" alt="">
						@else
								<img style="width:180px; height:190px;" src="{{ url('home/aseets/img/' . $theme -> photo) }}" alt="">
						@endif
						<input name="old_photo" type="hidden" value="{{ $theme->photo}}"class="form-control">
						<input name="photo" type="file" class="form-control">
					</div>

				
					
				
					<div class="text-left">
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>


	</div>
</div>

               
                
       
        
	<!-- /Page Wrapper -->

@endsection
