@extends('admin.layouts.app')
@section('main-section')
			
                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Your Traning Institute</h4>
								</div>
								<div class="card-body">
                                    
                                    @include('validate')


                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Title</td>
                                                <td>Skill</td>
                                                <td>Traning End Date</td>
                            
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      

                                        @forelse ($traning as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
                                            <td>{{$item -> title}}</td>
                                            <td> 
                                                <ul>
                                                    @forelse (json_decode($item -> skills) as $kaj) 
                                                        <li style="display:inline-block;">{{ $kaj }},</li>
                                                    @empty
                                                    @endforelse
                                                </ul>
                                            </td>
                                        
                                         
                                            <td>{{$item -> dates}}</td>
                                           
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('traning.edit', $item -> id)}}"><i class="fe fe-edit"></i></a>
                                                <form onclick="return confirm('Are you sure to delete this')" action="{{ route('traning.destroy', $item ->      id ) }}" class="d-inline delete-form" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
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


									<form action="{{ route('traning.store')}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Institute</label>
											<input name="ins" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Title</label>
											<input name="title" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Class Start</label>
											<input name="startdate" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Class End</label>
											<input name="enddate" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Skills</label>  
                                            <ul class="">
												@foreach ($skill as $skills)
													<li> 
														<label><input name="skill[]" value="{{ $skills -> name }}" type="checkbox"> {{ $skills -> name }}</label> 
													</li>
												@endforeach
												
											</ul>                      
										
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
									<h4 class="card-title">Add new Data</h4>
								</div>
								<div class="card-body">

									<form action="{{ route('traning.update', $class-> id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
										<div class="form-group">
											<label>Institute</label>
											<input name="ins" value="{{ $class -> name}}" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Title</label>
											<input name="title" value="{{ $class -> title}}" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Class Start</label>
											<input name="startdate" value="{{ $class -> date}}" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Class End</label>
											<input name="enddate" value="{{ $class -> dates}}" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Skills</label>                        
											<ul>
                                           

                                                @forelse ( json_decode($skill)  as $skills)
                                                    <li>
                                                        <label><input @if( in_array($skills -> name, json_decode($class -> skills)) ) checked @endif name="skill[]" value="{{ $skills -> name }}" type="checkbox"> {{$skills -> name}}</label>
                                                    </li>                                
                                                @empty
                                                    <li>No record found</li>
                                                @endforelse
												
											</ul>
										</div>                                         
									
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>
								</div>
							</div>
                            @endif


						</div>
					</div>

               
                
       
        
	<!-- /Page Wrapper -->

@endsection
