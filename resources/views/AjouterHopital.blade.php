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
			<form class="form-detail" action="{{route('NewHopital')}}" method="POST">
                @csrf
				<h2>Enregistrer Hopital</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="nom" id="full-name" class="input-text" placeholder="Nom" required>
					</div>
					<div class="form-row">
						<input type="text" name="adresse" id="your-email" class="input-text" placeholder="Adresse">
					</div>
				</div>
                <div class="form-row-total">
					<div class="form-row">
						<input type="text" name="email" id="full-name" class="input-text" placeholder="Email" required>
					</div>
					<div class="form-row">
						<input type="text" name="tel" id="your-email" class="input-text" placeholder="Tel" required">
					</div>
				</div>
                <div class="form-row-total">
					<div class="form-row">
						<input type="text" name="type" id="full-name" class="input-text" placeholder="Type" required">
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
