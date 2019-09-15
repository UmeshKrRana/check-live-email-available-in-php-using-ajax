<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>

	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-5 pt-4">
		<form method="post" id="regForm">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto shadow p-4">
					<div class="form-group">
						<label for="name"> Name <small class="text-danger">*</small></label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">

					</div>

					<div class="form-group">
						<label for="email"> Email <small class="text-danger">*</small></label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
					</div>

					<div class="form-group">
						<label for="password"> Password <small class="text-danger">*</small></label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
					</div>

					<div class="form-group">
						<label for="c_password"> Confirm Password <small class="text-danger">*</small></label>
							<input type="password" name="c_password" id="c_password" class="form-control" placeholder="Re-enter your password">
					</div>

					<div class="form-group">
						<button type="button" id="savebtn" class="btn btn-success btn-md"> Submit </button>
					</div>

					<div id="result"> </div>

				</div>
			</div>
		</form>
	</div>


<!-- Bootstrap JS -->

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"> </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- custom script js -->

<script type="text/javascript" src="./script.js"></script>

</body>
</html>