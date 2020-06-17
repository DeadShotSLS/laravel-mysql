<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
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
                  <!-- REGISTER -->
                  <div class="col-md-8">
                     <div class="widget">
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endforeach
                         <br>
                        <div class="widget-body">
                           <form action="/registerUser" method="post">
                            {{csrf_field()}}
                              <div class="row">
                              <div class="form-group col-sm-12">
                                 <label >User-Name</label>
                                 <input class="form-control" type="text" name="username" placeholder="UserName">
                              </div>
                                 <div class="form-group col-sm-6">
                                    <label >First Name</label>
                                    <input class="form-control" type="text" name="f_name" placeholder="First Name">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label >Last Name</label>
                                    <input class="form-control" type="text" name="l_name"  placeholder="Last Name">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label >Email address</label>
                                    <input type="text" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label >Phone number</label>
                                    <input class="form-control" type="text" name="phone"  placeholder="Phone"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label >Password</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Password">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label >Repeat password</label>
                                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Password">
                                 </div>
                                 <div class="form-group col-sm-12">
                                    <label >Delivery Address</label>
                                    <textarea class="form-control" name="address" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-4">
                                    <p> <input type="submit" value="Register" name="submit" class="btn w3-button w3-red w3-borde"> </p>
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
