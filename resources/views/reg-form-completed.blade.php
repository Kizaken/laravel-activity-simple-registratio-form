<!DOCTYPE html>
<html>
<head>

	<title>Registration-Completed</title>
	<style type="text/css">
	
	#container {
		width: 80%;
		color: orange;
		background-color: white;
		padding: 10px 20px, 23px, 21px;
		margin: auto;
	}
	tr.head{
		background-color: lightgreen;
		color: white;
		font-size: 14pt;
		border-top-left-radius: 3px;
		font-family: Calibri;
		width: 300px;
		margin: auto;
	}
		
	.add button{
		width: 100%;
		background-color: lightgreen;
		color: #000000;
		font-size: 15px;

	}
	
	.add button a:hover{
		background-color: 
	}
	td{
		border-bottom: 2px solid orange;
		font-size: 14pt;
		padding: auto;
	}

	a{
		text-decoration: none;
	}
	td a.edit {
		margin-left: -10px;
		color: red;
	}
	.header{
		font-size: 30pt;
		margin: auto;
		width: 100%;
		font-family: Calibri;
	}
	
	</style>
</head>
<body>
<div id="container">

				
		<div class="header">Students List</div>
			<table>
				<tr class="head">
					<th>Student Number</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Guardian</th>
					<th>Course</th>				
					<th>Town</th>
					<th>Age</th>					
					<th>Contact Number</th>
					<th>Options</th>				
					
				</tr>
				
					@foreach($addstudents as $add)
						<tr>
							<td>{{$add->stud_no}}</td>
							<td>{{$add->fname}}</td>
							<td>{{$add->mname}}</td>
							<td>{{$add->lname}}</td>
							<td>{{$add->guardian}}</td>
							<td>{{$add->course}}</td>
							<td>{{$add->domicile}}</td>
							<td>{{$add->age}}</td>
							<td>{{$add->contact_no}}</td>
							<td><a href="/edit/{{$add->id}}" style="padding-left: 10px;">&#9998</a> <a href="/delete/{{$add->id}}" style="padding-left: 10px; color:red; margin-right: 20px;">&#10008</a></td>
						</tr>
					@endforeach
					
			</table>	
			<div class="add"><a href="/reg-form"><button>Add&#10010</button></a></div>	
</div>
</body>
</html>