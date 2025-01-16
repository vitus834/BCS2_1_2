
<html>
       <head>
	   
	     <title>Register</title>
		 <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	   
	   </head>
	       
		   <body style="background-color:#d0d8e4;">
		      <header class="bg-dark text-white p-4 text-left">
		    <div style="font-family: tahoma;">Sol Music Register</div>
			   </header>
			   
			   <div style=" background-color: white; width:800px; margin:auto;margin-top:50px; padding:10px; text-align:center; min-height: 400px; ">
			      
			    Register to Sol Music
                <form class="container mt-4" action="classes/signup.php" method="POST" style="min-height:400px;">
  <div class="mb-3">
    <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstName" placeholder="Enter your first_name" name="firstName" required>
	   <label for="lastName" class="form-label">Last Name</label>
      <input  type="text" class="form-control" id="lastName" placeholder="Enter your last_name" name="lastName" required >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
  </div>
   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password" required>
  </div>
  <div class="mb-3" style="margin-bottom:4px;">
    <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password Confirmation" name="confirm_password" required>
	
  </div>
       <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value=""> Select your gender </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
					<option value="other">Rather not say </option>
                </select>
            </div>
   
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

    </div>				
				
            
        
			   
			   
			   
			   
			   
			   
		   
		   
		   
		   
		   
		   
		   
		   
		   </body>
	   

















</html>