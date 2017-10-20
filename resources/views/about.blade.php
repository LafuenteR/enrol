<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fluid">
  @include('flashmessage')
  @include('tableuser')
	
	@if($subj == false)
	<div class="container">
	@include('tablesubject')
	</div>
	@else
	
		
	<div class="container" style="text-align: center;">
		<h1 class="text-success">You already select classes</h1>
		@include('enrolsubj')
	</div>
	@endif

</div>
</body>
</html>







