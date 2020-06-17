<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Sample</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="margin-left: 75%">
            <?php
                if (Auth::check()) {
                    echo  '<li class="nav-item"><a href="add_product" class="nav-link active">Add Product</a> </li>';
                    echo  '<li class="nav-item"><a href="task" class="nav-link active">Task</a> </li>';
                    echo  '<li class="nav-item"><a href="all_product" class="nav-link active">All Products</a> </li>';
                    echo  '<li class="nav-item"><a href="logout" class="nav-link active">logout</a> </li>';
                }else{
                    echo '<li class="nav-item"><a href="login" class="nav-link active">login</a> </li>';
                    echo '<li class="nav-item"><a href="register" class="nav-link active">Register</a> </li>';
                }
            ?>
          </ul>
        </div>
      </nav>
</body>
</html>
