<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container card">
		<form method="POST" action="{{ route("user_info") }}">
			@csrf
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter name" name="name"></div>

	   <div class="form-group">
	    <label for="exampleInputEmail1">Lastname</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter lastname" name="lastname"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">Address</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter address" name="address"></div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Biography</label>
	    <textarea class="form-control" placeholder="enter biography" name="biography"></textarea>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Birthday</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="enter birthday" name="birthday"></div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>