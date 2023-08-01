@extends('admin.layouts.app')
@section('main-section')
			
                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Skill Sammery</h4>
								</div>
								<div class="card-body">
                                    
                                    @include('validate')


                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      

                                        @forelse ($summ as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
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
									<h4 class="card-title">Add New Data</h4>
								</div>
								<div class="card-body">


                                @include('validate')
									<form action="{{ route('summery.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                        <label>Summery</label>
                                           <textarea name="name" rows="4" cols="50"></textarea>
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
