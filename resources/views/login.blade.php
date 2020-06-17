<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    @include('navBar')
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-wrapper" style="padding: 0">
         <section class="contact-page inner-page" style="padding-left: 20%">
            <div class="container" style="color: red;">
               <div class="row">
                  <!-- Login -->
                  <div class="col-md-8">
                     <div class="widget">
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endforeach
                        <div class="widget-body">
                           <form action="/loginUser" method="post">
                            {{csrf_field()}}
                              <div class="row">
								<div class="form-group col-sm-12">
									<label for="exampleInputEmail1">Email</label>
									<input class="form-control" type="email" name="email" placeholder="Email">
								</div>
								<div class="form-group col-sm-12">
									<label for="exampleInputEmail1">Password</label>
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
								<div class="row">
                                	<div class="col-sm-4" style="margin-left: 15px">
                                    	<input type="submit" value="login" name="submit" class="btn w3-button w3-red w3-borde">
									</div>
                                </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</body>
</html>
