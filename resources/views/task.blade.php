<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
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
            <h1>Daily Task</h1>
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <form action="/addTask" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="Enter Your Task"/>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Save" />
                        <input type="reset" class="btn btn-danger" value="Clear" />
                    </form>
                    <br>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>complete</th>
                        <th>Action</th>
                        @foreach($tasks ?? '' as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                <td>
                                    @if($task->complete)
                                        <button class="btn btn-success">Completed</button>
                                    @else
                                        <button class="btn btn-warning">Not Completed</button>
                                    @endif
                                </td>
                                <td>
                                    @if($task->complete)
                                        <a href="/markNotCompleted/{{$task->id}}" class="btn btn-warning">Mark As Not Completed</a>
                                    @else
                                        <a href="/markCompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                                    @endif
                                    <a href="/taskDelete/{{$task->id}}" class="btn btn-danger">Delete</a>
                                    <a href="/taskUpdate/{{$task->id}}" class="btn btn-success">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
