@extends('layouts.header')
@section('content')
				<div id="second-option" style="padding: 5%;">
					<a name="students">
						<div class="row header">
							<div class="col-md-12">
								<h2 align="center">Students List</h2>
							</div>
						</div>
					</a>

					<!--adding flash msg-->
					@if (Session::has('message'))
					   <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
					@endif

					<div class="row">
							<table class="table table-striped">
							<thead>
							<tr>							
							<th>ID</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Passed On</th>
							<th>Actions</th>
							</tr>							
							</thead>
							<tbody>							
							@foreach ($students as $student)
								<tr>
								<td>{{$student->id}}</td>
								<td>{{$student->name}}</td>
								<td>{{$student->gender}}</td>
								<td>{{$student->passing_year}}</td>
								<td>
								<strong align="center"><a href="{{ route('students.show', array('id'=>$student->id)) }}">View</a> &nbsp|&nbsp<a href="{{ route('students.edit', array('id'=>$student->id)) }}">Edit</a> &nbsp|&nbsp<a href="{{ route('students.destroy', array('id'=>$student->id)) }}" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a></strong>
								
								</td>
								</tr>
							@endforeach
							</tbody>
							
							</table>
							
						</div>
						<div class="row"><div align="right"> {{ $students->links() }} </div></row>

					
				</div>

				
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-3 copyright">
								Palvision R & D Sri Lanka
							</div>
							<div class="col-sm-6 menu">
								<ul>
				      				<li>
				          				<a>Features</a>
				        			</li>
				        			<li>
				        				<a>Services</a>
				        			</li>
				        			<li>
				          				<a>Pricing</a>
				        			</li>
				        			<li>
				          				<a>Support</a>
				        			</li>
				        			<li>
				          				<a>Blog</a>
				        			</li>
				      			</ul>
							</div>
							<div class="col-sm-3 social">
								<a href="#">
									<img src="/images/social/social-tw.png" alt="twitter" />
								</a>
								<a href="#">
									<img src="/images/social/social-dbl.png" alt="dribbble" />
								</a>					
							</div>
						</div>
					</div>
				</div>

			</div><!-- end .st-content -->
		</div><!-- end .st-pusher -->
	</div><!-- end .st-container -->

	<script src="{{ asset('js/main.js') }}"></script>

	<div class="modal fade" id="demo">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-body">
	      		</div>
	    	</div>
	 	 </div>
	</div>

	
</body>

@endsection