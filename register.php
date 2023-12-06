<?php
include 'template/header.php';
?>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <h1>Register</h1>
      <br/>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Enter last name">
    <small id="lastnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Enter first name">
    <small id="firstnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Middle Name</label>
    <input type="text" class="form-control" id="lastname" aria-describedby="midnameHelp" placeholder="Enter middle name">
    <small id="midnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>  
	<div class="form-group">
    <label for="exampleInputEmail1">Name Extension</label>
    <input type="text" class="form-control" id="extname" aria-describedby="extnameHelp" placeholder="Enter name extension">
    <small id="extnameHelp" class="form-text text-muted">We'll keep your information confidential.</small>
  </div>  
	<div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Birth Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
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
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
<?php
include 'template/footer.php';