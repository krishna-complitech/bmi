<html>
	<head>
		<meta charset="utf-8">
		<title>BMI Calculator</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<form action="{{ route('bmi_path') }}" method="get" role="form">
						<legend>Calculate your BMI</legend>
						<legend>Complitech Calculation</legend>
						@if(!empty($bmi))
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								Your BMI is {{ $bmi }}
							</div>
						@endif

						<div class="form-group">
							<input type="number" class="form-control" name="weight" id="" placeholder="Wight" required>
						</div>

						<div class="form-group">
							<input type="number" class="form-control" name="high" id="" placeholder="High" required>
						</div>
						
						<button type="submit" class="btn btn-primary">Calculate</button>
					</form>	
				</div>
			</div>	
		</div>	
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>