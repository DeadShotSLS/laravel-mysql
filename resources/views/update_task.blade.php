<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    @include('navBar')
    <div class="container">
        <div class="text-center">
            <br>
            <form action="/taskUpdates" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}">
                <br>
                <input type="submit" class="btn btn-success" value="Update"/>
                &nbsp;&nbsp;<a href="/task" class="btn btn-danger">Cansel</a>
            </form>
        </div>
    </div>
</body>
</html>
