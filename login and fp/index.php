<?php include('connection.php');
session_start();
$message = '';
if (isset($_POST['submit']) != '') {
	$drate = $_POST['drate'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	if (($drate == "ICT")||($drate == "ict")) {
		$query = "SELECT * FROM you_tube WHERE email = '" . $email . "' AND password = '" . $password . "'";
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			$message = "<div class='alert alert-success'>Login Successfull..</div>";
			header("Location:ict-homepage.php");
		} else {
			$message = "<div class='alert alert-danger'>Login failed..!!</div>";
		}
	} else if ($drate == "logic") {
		$query = "SELECT * FROM you_tube WHERE email = '" . $email . "' AND password = '" . $password . "'";
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
			$message = "<div class='alert alert-success'>Login Successfull..</div>";
			header("Location:logic-homepage.php");
		} else {
			$message = "<div class='alert alert-danger'>Login failed..!!</div>";
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body class="bg-secondary">
	<div class="container w-50 mt-5">
		<form method="post" class="bg-light p-5 shadow-lg">
			<?php echo $message; ?>
			<h1 class="text-info">Login Page</h1>
			<label for="Email">Directorate</label>
            <select class="form-control form-control-sm" id="cars" name="drate">
                <option value="ICT">ICT</option>
                <option value="Logic">Logic</option>
				<option value="Logic">Admin</option>
                <option value="APPEALS DIRECTORATE">APPEALS DIRECTORATE</option>
				<option value="REVENUE TASK FORCE DIRECTORATE">REVENUE TASK FORCE DIRECTORATE</option>
				<option value="STATISTICIAN">STATISTICIAN</option>
				<option value="SYSTEM COMPLIANCE AUDIT DIRECTORATE">SYSTEM COMPLIANCE AUDIT DIRECTORATE</option>
				<option value="EXCISE - SPECIAL PROVISIONS">EXCISE - SPECIAL PROVISIONS</option>
				<option value="HUMAN RESOURCES MANAGEMENT DIRECTORATE">HUMAN RESOURCES MANAGEMENT DIRECTORATE</option>
				<option value="HUMAN RESOURCES DEVELOPMENT DIRECTORATE">HUMAN RESOURCES DEVELOPMENT DIRECTORATE</option>
				<option value="LOGISTICS DIRECTORATE">LOGISTICS DIRECTORATE</option>
				<option value="EMPLOYEE SERVICES DIRECTORATE">EMPLOYEE SERVICES DIRECTORATE</option>
				<option value="POLICY PLANNING AND RESEARCH DIRECTORATE">POLICY PLANNING AND RESEARCH DIRECTORATE</option>
				<option value="ICT DIRECTORATE">ICT DIRECTORATE</option>
				<option value="CENTRAL VALUATION DIRECTORATE">CENTRAL VALUATION DIRECTORATE</option>
				<option value="SPECIALIZED SERVICES DIRECTORATE">SPECIALIZED SERVICES DIRECTORATE</option>
				<option value="COMPLIANCE AND FACILITATION DIRECTORATE">COMPLIANCE AND FACILITATION DIRECTORATE</option>
				<option value="DECLARATION DIRECTORATE">DECLARATION DIRECTORATE</option>
				<option value="EXPORTS DIRECTORATE">EXPORTS DIRECTORATE</option>
				<option value="INDUSTRIES & SERVICES DIRECTORATE">INDUSTRIES & SERVICES DIRECTORATE</option>
				<option value="CENTRAL CARGO EXAMINATION DIRECTORATE">CENTRAL CARGO EXAMINATION DIRECTORATE</option>
				<option value="PASSENGER SERVICES DIRECTORATE">PASSENGER SERVICES DIRECTORATE</option>
				<option value="CUSTOMS BOI COORDINATION DIRECTORATE">CUSTOMS BOI COORDINATION DIRECTORATE</option>
				<option value="CENTRAL INTELLIGENCE DIRECTORATE">CENTRAL INTELLIGENCE DIRECTORATE</option>
				<option value="CENTRAL INVESTIGATION DIRECTORATE">CENTRAL INVESTIGATION DIRECTORATE</option>
				<option value="SOCIAL PROTECTION DIRECTORATE">SOCIAL PROTECTION DIRECTORATE</option>
				<option value="LEGAL AFFAIRS DIRECTORATE">LEGAL AFFAIRS DIRECTORATE</option>
				<option value="PREVENTIVE DIRECTORATE">PREVENTIVE DIRECTORATE</option>
				<option value="CENTRAL DISPOSAL DIRECTORATE">CENTRAL DISPOSAL DIRECTORATE</option>
				<option value="PASSENGER SERVICES DIRECTORATE (KATUNAYAKE)">PASSENGER SERVICES DIRECTORATE (KATUNAYAKE)</option>
				<option value="REVENUE & SERVICES DIRECTORATE (KATUNAYAKE)">REVENUE & SERVICES DIRECTORATE (KATUNAYAKE)</option>
				<option value="REVENUE & SERVICES DIRECTORATE (PROVINCIAL)">REVENUE & SERVICES DIRECTORATE (PROVINCIAL)</option>
				<option value="FINANCE DIRECTORATE">FINANCE DIRECTORATE</option>


            </select><br/>
			<label for="Email">Email</label>
			<input type="text" name="email" placeholder="Email Address" class="form-control form-control-sm" required><br>
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="********" class="form-control form-control-sm " required><br>
			<button type="submit" name="submit" class="btn btn-info">Login</button>
			<a href="forget_pass.php" class="btn btn-success">Forget Password?</a>

		</form>
	</div>
</body>

</html>