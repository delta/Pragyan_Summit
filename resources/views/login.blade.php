<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <style type="text/css">
            #content
            {
                margin-top:5%;
            }
        </style>
    </head>
    <body>
        <div id="content" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Admin Login</div>
                <div class="panel-body">
                @if (Session::has('message'))
                    <div class="alert alert-danger">
                        {{Session('message')}}
                    </div>
                @endif
                    <form method="post" action="{{action('AdminController@check_login')}}">
                        {!! csrf_field() !!}
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                            <span class="input-group-addon" id="password-addon-1">Password</span>
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="password-addon-1" required>
                        </div>
                        <br>
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                           <center> <input type="submit" class="btn btn-primary" value="login"> </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
