<?php
include 'template/header.php';
?>
		<div class="jumbotron">
			<div class="container">
				<h1>Welcome to e-Census</h1>
				<p>This is your community census system for fast, accurate, and timely information on your community members.</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
			</div>
		</div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <h2>Register</h2>
          <p>All users including administrators of the system have to register </p>
          <p><a class="btn btn-default" href="register.php" role="button">Register &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Administrator assigns Enumerator</h2>
          <p>Administrators can assign Enumerators along with specific and required census parameters</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>        
        <div class="col-md-3">
          <h2>Enumerators conduct census</h2>
          <p>Enumerators, assigned by the administrator, can conduct paperless census in the community</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Get real-time reports</h2>
          <p>Get up-to-date reports based on the input of the citizens and updates of the assigned Enumerator</p>
          <p><a class="btn btn-default" href="#" role="button">View Reports &raquo;</a></p>
        </div>
      </div>
<?php
include 'template/footer.php';