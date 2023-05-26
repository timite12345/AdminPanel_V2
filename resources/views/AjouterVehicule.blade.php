<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ivoire Secours</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
			<form class="form-detail" action="{{route('NewVehicule')}}" method="POST">
                @csrf
				<h2>Enregistrer Véhicule</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="immatriculation" id="full-name" class="input-text" placeholder="Immatriculation" required>
					</div>
					<div class="form-row">
						<input type="text" name="estLibre" id="your-email" class="input-text" placeholder="estLibre">
					</div>
				</div>


				<div class="form-row-total">
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
