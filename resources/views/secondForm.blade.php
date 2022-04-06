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
<form action="/compute-grades" method="POST">
<div class="row">
	<label>Name: {{student_1}} </label>	
	<div class="col col-md-4">
		<label>Midterms</label>
		<input type="number" name="p1_attempt1" class="form-control">
	</div>
	<div class="col col-md-4">
		<label>Finals</label>
		<input type="number" name="p1_attempt2" class="form-control">
	</div>
</div>
<div class="row">
	<label>Name: {{student_2}} </label>	
	<div class="col col-md-4">
		<label>Midterms</label>
		<input type="number" name="p2_attempt1" class="form-control">
	</div>
	<div class="col col-md-4">
		<label>Finals</label>
		<input type="number" name="p2_attempt2" class="form-control">
	</div>
</div>

<div class="row">
	<label>Name: {{student_3}} </label>	
	<div class="col col-md-4">
		<label>Midterms</label>
		<input type="number" name="p3_attempt1" class="form-control">
	</div>
	<div class="col col-md-4">
		<label>Finals</label>
		<input type="number" name="p3_attempt2" class="form-control">
	</div>
</div>

<div class="row">
	<label>Name: {{student_4}} </label>	
	<div class="col col-md-4">
		<label>Midterms</label>
		<input type="number" name="p4_attempt1" class="form-control">
	</div>
	<div class="col col-md-4">
		<label>Finals</label>
		<input type="number" name="p4_attempt2" class="form-control">
	</div>
</div>

<div class="row">
	<label>Name: {{student_5}} </label>	
	<div class="col col-md-4">
		<label>Midterms</label>
		<input type="number" name="p5_attempt1" class="form-control">
	</div>
	<div class="col col-md-4">
		<label>Finals</label>
		<input type="number" name="p5_attempt2" class="form-control">
	</div>
</div>

<div class="row">
	<button type="submit">Submit Grade</button>
</div>



</form>
</div>

</body>
</html>