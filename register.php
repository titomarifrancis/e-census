<?php
include 'template/header.php';
include 'dbconn.php'
?>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <h1>Register</h1>
      <br/>

<form method="post" action="register_processor.php">
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Enter last name">
    <small id="lastnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Enter first name">
    <small id="firstnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>
    <div class="form-group">
    <label for="midname">Middle Name</label>
    <input type="text" class="form-control" id="midname" aria-describedby="midnameHelp" placeholder="Enter middle name">
    <small id="midnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>  
	<div class="form-group">
    <label for="extname">Name Extension</label>
    <input type="text" class="form-control" id="extname" aria-describedby="extnameHelp" placeholder="Enter name extension">
    <small id="extnameHelp" class="form-text text-muted">Name extension (i.e. Jr., III, IV, V, etc.)</small>
  </div>  
	<div class="form-group"> <!-- Date input -->
        <label class="control-label" for="birthdate">Birth Date</label>
        <input class="form-control" id="birthdate" name="date" placeholder="Your birthdate in DD/MM/YYYY" type="text"/>
      </div>
	<div class="form-group"> <!-- Date input -->
        <label class="control-label" for="gender">Gender</label>
        <input class="form-control" id="gender" name="gender" placeholder="Your gender (i.e. Male, Female, LGBTQ+)" type="text"/>
      </div>
	<div class="form-group"> <!-- Date input -->
        <label class="control-label" for="civstatus">Civil Status</label>
        <input class="form-control" id="civstatus" name="civstatus" type="text"/>
      </div>
	<div class="form-group">
    <label for="landline">Landline</label>
    <input type="text" class="form-control" id="extname" aria-describedby="landlineHelp" placeholder="Enter landline number" maxlength="8"">
    <small id="landlineHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>  
	<div class="form-group">
    <label for="mobile">Mobile number</label>
    <input type="text" class="form-control" id="extname" aria-describedby="mobileHelp" placeholder="Enter mobile number" maxlength="11"">
    <small id="mobileHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>      
	<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
<?php
include 'template/footer.php';