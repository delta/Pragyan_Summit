<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pragyan Summit 2k16</title>
		<meta name="description" content="Pragyan’s Youth Business Summit is an opportunity for young minds to congregate under a single roof, and participate in fruitful discussions with the pioneers of our nation. Hear the outlooks of some of the brightest minds of the nation; from technology to management, from multinational companies to leading startups. Prepare to broaden your horizons and open up your mind, while you get the chance to interact with these exceptional individuals and share your innovative ideas. As a participant of the summit, you aren’t just a spectator. You are a cog in the wheel that is moving towards revolutionizing our nation in all aspects. 
Let’s celebrate ideas. Let’s celebrate the youth. Let’s celebrate technology." />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="Codeply">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/unslider.css') }}" />
		<script async="" src="//www.google-analytics.com/analytics.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-19500581-1', 'auto');
		ga('send', 'pageview');
		</script>


		<script>var base_url = "{{ action('ViewController@index') }}";</script>
		<meta name="_token" content="{{ csrf_token() }}"/>

	</head>
	<body>
		
		<style type="text/css">
			
			#myformcontainer{
				background-color: #7e7e7e;
			}

		</style>

		<br><br>
	
		<div class="container" id="myformcontainer">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12 img img-responsive">
					<center><img alt="" src="https://www.pragyan.org/summit/images/pragyanlogo.png"/></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
					<center>
						<h3>
							Pragyan Summit 2016 Registration
						</h3>
						<hr>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<form action="{{ action('ViewController@submitrsvp') }}" method="post">

						<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
						<input type="hidden" name="id" value="{{$id}}">

						<div class="form-group">
							<label class="control-label">Student 1</label>
							<input type="text" class="form-control" value="" maxlength="40" id="f1" name="f1" required>
						</div>

						<div class="form-group">
							<label class="control-label">Student 2</label>
							<input type="text" class="form-control" value="" maxlength="40" id="f2" name="f2" required>
						</div>
						
						<div class="form-group">
							<label class="control-label">Email address</label>
							<input type="email" class="form-control" value="" maxlength="40" id="email" name="email">
						</div>

						<div class="form-group">
							<label class="control-label">Mobile Number</label>
	<input type="text" class="form-control" value="" maxlength="10" pattern="[0-9]{10}" id="phone" name="phone">
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12">
									<button class="form-control btn btn-info">Submit</button>
								</div> 
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<ul>
						<li><b>Please respond to the invite by 11.59PM | January 8<sup>th</sup>, 2016</b></li>
						<li>An entry ticket/invitation will be mailed to the above mentioned mail ID by January 15th, 2016.</li>
						<li>Response to the invite will be considered on a first come first serve basis.</li>
						<li>Only 2 students are allowed to participate from each institute.</li>
						<li>The registration fee for the participants from your institute will be waived.</li>
						<li>The participants get to attend a free networking luncheon session with the luminaries.</li>
						<li>Multiple responses from the same institute will not be considered.</li>
					</ul>
				</div>
			</div>
		</div>


		<!--scripts loaded here from cdn for performance -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>


		<script type="text/javascript">

		// $(document).ready(function(){
			
		// 	$.ajaxSetup({
		// 		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
		// 	});

		// 	$("#submit").click(function(){
		// 		$.ajax({
		// 			method: "POST",
		// 			url: base_url+"/register",
		// 			data: $("#myregform").serialize()             
		// 		}).done(function( msg ) {
		// 			console.log(msg);
		// 			if(msg == "true")
		// 			{
		// 				$("#myregform").html("Successfully Registered");
		// 			}
		// 			else
		// 			{
		// 				alert("Please Try again. Invalid Data");
		// 				location.reload();
		// 			}
		// 		});

		// 	});
		// });

		</script>
	</body>
</html>
