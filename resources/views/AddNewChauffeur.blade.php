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
			<form class="form-detail" action="{{route('addChauffeur')}}" method="POST">
                @csrf
				<h2>Enregistrer Chauffeur</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="nom" id="full-name" class="input-text" placeholder="Nom" required>
					</div>
					<div class="form-row">
						<input type="text" name="prenom" id="your-email" class="input-text" placeholder="Prenom">
					</div>
				</div>
                <div class="form-row-total">
					<div class="form-row">
						<input type="text" name="tel" id="full-name" class="input-text" placeholder="Tel" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="your-email" class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
                <div class="form-row-total">
					<div class="form-row">
						<input type="text" name="adresse" id="full-name" class="input-text" placeholder="Adresse" required>
					</div>
					<div class="form-row">
						<input type="text" name="permis" id="your-email" class="input-text" placeholder="Permis">
					</div>
				</div>
				<div class="form-row-total">

					<div class="form-row">
						<input type="text" name="estDisponible" id="comfirm-password" class="input-text" placeholder="estDisponible" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
