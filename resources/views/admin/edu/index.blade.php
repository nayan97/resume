@extends('admin.layouts.app')
@section('main-section')
			
                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Education</h4>
								</div>
								<div class="card-body">
                                    
                                    @include('validate')


                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Program</td>
                                                <td>Passing Year</td>
                                                <td>CGPA</td>
                            
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      

                                        @forelse ($edu as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> ins}}</td>
                                            <td>{{$item -> dept}}</td>
                                            <td>{{$item -> cgpa}}</td>
                                            <td>{{$item -> date}}</td>
                                           
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="#"><i class="fe fe-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="#"><i class="fe fe-trash"></i></a>
                                            </td>
                                       </tr> 
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p>No Data Found</p>
                                            </td>
                                        </tr>
                                       
                                        @endforelse
                                           
                                     
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-4">

                            @if( $type === 'add')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Data</h4>
								</div>
								<div class="card-body">


                                @include('validate')
									<form action="{{ route('education.store')}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Institute</label>
											<input name="ins" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Department</label>
											<input name="depart" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Passing Year</label>
											<input name="year" type="text" class="form-control">
                                        </div> 
                                        <div class="form-group">
											<label>CGPA</label>
											<input name="cgpa" type="text" class="form-control">
                                        </div>                                         
									
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                            @endif
                            
                            @if( $type === 'edit')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> Edit Data</h4>
                                    <a class="btn btn-primary btn-md" href="">Add New Role</a>
								</div>
								<div class="card-body">


                                @include('validate')
                              
								    <form action="#" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Name</label>
											<input name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Skill</label>
											<input name="skill" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Headnig</label>
											<input name="heading" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                        <label>Personal Details</label>
                                           <textarea name="details" rows="4" cols="50"></textarea>
                                        </div>
                                      
                                        
									
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                            @endif


						</div>
					</div>

               
                
       
        
	<!-- /Page Wrapper -->

@endsection
