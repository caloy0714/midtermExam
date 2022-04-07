<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="container-sm">
		<table class="table table-bordered">
			<thead>
			<tr>
				<th scope="col">Student Name</th>
				<th scope="col">Midterm Grade</th>
				<th scope="col">Finals Grade</th>
				<th scope="col">Average Grade</th>
				<th scope="col">Remarks</th>
			</tr>	
			</thead>
		<tbody>
			<tr>
				<td>{{ $student_1 }}</td>
				<td>{{ $p1_attempt1 }}</td>
				<td>{{ $p1_attempt2 }}</td>
				<td>{{ $p1_average }}</td>
				<td>{{ $p1_remarks }}</td>
			</tr>
			<tr>
				<td>{{ $student_2 }}</td>
				<td>{{ $p2_attempt1 }}</td>
				<td>{{ $p2_attempt2 }}</td>
				<td>{{ $p2_average }}</td>
				<td>{{ $p2_remarks }}</td>
			</tr>
			<tr>
				<td>{{ $student_3 }}</td>
				<td>{{ $p3_attempt1 }}</td>
				<td>{{ $p3_attempt2 }}</td>
				<td>{{ $p3_average }}</td>
				<td>{{ $p3_remarks }}</td>
			</tr>
			<tr>
				<td>{{ $student_4 }}</td>
				<td>{{ $p4_attempt1 }}</td>
				<td>{{ $p4_attempt2 }}</td>
				<td>{{ $p4_average }}</td>
				<td>{{ $p4_remarks }}</td>
			</tr>
			<tr>
				<td>{{ $student_5 }}</td>
				<td>{{ $p5_attempt1 }}</td>
				<td>{{ $p5_attempt2 }}</td>
				<td>{{ $p5_average }}</td>
				<td>{{ $p5_remarks }}</td>
			</tr>
		</tbody>
		</table>
	</div>

</body>
</html>