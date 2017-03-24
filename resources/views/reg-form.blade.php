<!DOCTYPE html>
<html>
<head>
	<title>Registration-Form</title>
	<style type="text/css">

	::-webkit-input-placeholder{
		font-size: 14pt; 
	}
	#container {
		width: 50%;
		color: orange;
		background-color: white;
		padding: 10px 20px, 23px, 21px;
		margin: auto;
	}
	#container2{
		width: 300px;
		margin: auto;
	}
	body{

		background-color: #cccccc;
		margin: 0;

	}
	input{
		width: 100%;
		border-radius: 3px;
		padding:10px 0px 10px 10px;
		margin:10px 0px 10px 0px;
		text-align: center;
		font-size: 12pt;
		font-family: Arial;
		font-weight: lighter;
		color: black;
	}
	button{
		margin-left: 100px; 
		margin-top: 20px;
		margin-bottom: 50px; 
		width: 100px;
		height: 50px;	
		border-radius: 5px;
		background-color: #ffffff;
		color: grey;
		transition: 500ms;
		font-size: 16pt;

	}
	button:hover{
		background-color: #32cd32;
		transition: 500ms;
		transform: scale(1.1);
		box-shadow: 19px solid black;
	}

	.header {
		text-align: center;
		color: #32cd32;
		border-color:  #ff9900;
		border-bottom: 2px solid green;
		font-size:50px;
		font-family: Calibri;
		margin-bottom: 20px; 
	}
	</style>
</head>
<body>
<div id="container">
	<form method="POST" action="/complete">
		{{csrf_field()}}
				<div class="header">Registration Form</div>
					<div id="container2">

						<input type="number" name="stud_no" required placeholder="Student Number"><br>
						<input type="text" name="fname" required placeholder="First Name"><br>
						<input type="text" name="mname" required placeholder="Middle Name"><br>
						<input type="text" name="lname" required placeholder="Last Name"><br>
						<input type="text" name="guardian" required placeholder="Guardian"><br>
						<input type="text" name="course" required placeholder="Course/Program"><br>
						<input type="text" name="domicile" required placeholder="Home/Town"><br>
						<input type="number" name="age" required placeholder="Age"><br>
						<input type="number" name="contact_no" required placeholder="Contact Number"><br>	
						
						<button>Submit&#9989</button>

					</div>	

	</form>

</div>	
</body>
</html>
