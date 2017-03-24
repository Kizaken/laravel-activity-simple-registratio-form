<!DOCTYPE html>
<html  lang="en">
<head meta="UTF-8"> 
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
		font-size: 13pt;

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
	<form method="POST" action="/edited">
		{{csrf_field()}}
				<div class="header">Editing Form</div>
					<div id="container2">
						<input type="text" name="id" value="{{$student->id}}" hidden="true">
						<input type="number" name="stud_no" required placeholder="Student Number" value="{{$student->stud_no}}"><br>
						<input type="text" name="fname" required placeholder="First Name" value="{{$student->fname}}"><br>
						<input type="text" name="mname" required placeholder="Middle Name" value="{{$student->mname}}"><br>
						<input type="text" name="lname" required placeholder="Last Name" value="{{$student->lname}}"><br>
						<input type="text" name="guardian" required placeholder="Guardian" value="{{$student->guardian}}"><br>
						<input type="text" name="course" required placeholder="Course/Program" value="{{$student->course}}"><br>
						<input type="text" name="domicile" required placeholder="Home/Town" value="{{$student->domicile}}"><br>
						<input type="number" name="age" required placeholder="Age" value="{{$student->age}}"><br>
						<input type="number" name="contact_no" required placeholder="Contact Number" value="{{$student->contact_no}}"><br>	
						
						<button>Update&#9978</button>

					</div>	

	</form>

</div>	
</body>
</html>
