<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="container-sm"> <h1>Enter Names</h1>

<form method="POST" action="/enter-grades">
@crsf
@for ($i = 1; $i <= 5; $i++)
<div class="row">
  <label>Student {{$i}} Name:</label>
  <input type="text" name="name_{{i}}" class="form-control">
</div>
@endfor
<hr />
<div class="row">
  <button>Submit</button>
</div>

</form>
</div>
</body>
</html>
