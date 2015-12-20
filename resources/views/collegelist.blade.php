<!DOCTYPE html>
<html>
	<head>
		<title>Registrations</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<meta name="_token" content="{{ csrf_token() }}"/>
		<style type="text/css">
		#content
		{
			margin-top:5%;
		}
		</style>
	</head>
	<body>
		<div id="content" class="container-fluid">
			<h1>Pragyan Summit</h1>
			<div class="panel">
				<div class="panel-heading">College List</div>
				<div class="panel-body">
					<table class="table table-striped" id="college_list">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($collegelist as $college)
								<tr>
									<td>{{$college->name}}</td>
									<td>{{$college->email}}</td>
									<td id="{{$college->id}}" class="emailbtn"><button id="{{$college->id}}" class="btn btn-info">Send Mail</button></td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{!! $collegelist->render() !!}
				</div>
			</div>
		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0-beta2/jquery.min.js"></script>

		<script type="text/javascript">

			$(document).ready(function(){

				$.ajaxSetup({
					headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
				});


				$(".emailbtn").click(function(){

					id = this.id;

					$.ajax({
						method: "POST",
						url: "{{action('AdminController@send_college_email')}}",
						data: {'id':id}             

					}).done(function( msg ) {
						alert(msg);	
		            });

				});
			});

		</script>
	</body>
</html>
