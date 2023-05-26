<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/form-layouts-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014'], Tue, 28 Feb 2023 21:11:00 GMT -->
<head>
    <meta charset="utf-8" />

    <title> Ivoire Secours</title>

    <!-- Canonical SEO -->

    <!-- Favicon -->

    <!-- Fonts -->


    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />



    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
 <script src="../assets/js/config.js"></script>
{{--
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];  --}}
{{--
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->  --}}

</head>

<body>

  <!-- Layout wrapper -->
<div class=" layout-content-navbar  ">
      <!-- Content wrapper -->
<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Formulaire/</span> Nouvelle Mission</h4>
<form method="post" action="{{route('mission')}}">
    @csrf
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Informations personnelles du patients</h5>
      </div>
      <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Choisir Hopital</label>
            <select id="adresse_Arriv" name="adresse_Arriv" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Destination</option>
                   @foreach($hopitals as $hopital)
                   <option value="{{$hopital->nom}}">{{$hopital->nom}}</option>
                   @endforeach
                  </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Choisir Chauffeur Principal</label>
            <select id="idChauffeur" class="form-control select2" name="idChauffeur" style="width: 100%;">
            <option selected="selected">Selectionner un Chauffeur Principal</option>
                     @foreach($chauffeurs as $chauffeur)
                    <option value="{{$chauffeur->nom}}">{{$chauffeur->nom}}</option>
                    @endforeach

            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Choisir Chauffeur Secondaire</label>
            <select id="ChaufSecond" class="form-control select3" name="ChaufSecond" style="width: 100%;">
            <option selected="selected">Selectionner un Chauffeur Secondaire</option>
                     @foreach($chauffeurs as $chauffeur)
                    <option value="{{$chauffeur->nom}}">{{$chauffeur->nom}}</option>
                    @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class=label for="exampleInputName">Nom</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input name="nom"type="text" id="basic-default-email" class="form-control" placeholder="saisir nom" />
            </div>
          </div>
          <div class="mb-3">
            <label class=label for="exampleInputName">Prenom</label>
            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input name="prenom" type="text" id="basic-default-email" class="form-control" placeholder="saisir prenom" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Email</label>
            <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input name="email"type="email" id="basic-default-email" class="form-control" placeholder="saisir email" />
              <span class="input-group-text" id="basic-default-email2">@example.com</span>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Conditions de transport du patient</h5>
      </div>
      <div class="card-body">
        <!-- <form> -->
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">est Urgent</label>
            <div class="input-group input-group-merge">
            <span class="input-group-text"></span>
              <input name="estUrgent"type="text" id="basic-default-email" class="form-control" placeholder="saisir email" />
              <span class="input-group-text" id="basic-default-email2"></span>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">est Facture</label>
            <div class="input-group input-group-merge">
            <span class="input-group-text"></span>
              <input name="estFacture"type="text" id="basic-default-email" class="form-control" placeholder="saisir email" />
              <span class="input-group-text" id="basic-default-email2"></span>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-email">Date depart</label>
            <div class="input-group input-group-merge">
              <input name="date_Dep"type="date" id="basic-icon-default-email" class="form-control" placeholder="date de depart" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-email">Adresse depart</label>
            <div class="input-group input-group-merge">
              <input name="adresse_Dep"type="text" id="basic-icon-default-email" class="form-control" placeholder="adresse de depart" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-message">Conditions de transport</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
              <input name="condTransp" type="text" class="form-control" placeholder="conditions de transport"/>
            </div>
          </div>
        </div>
      </div>
  </div>
      <div class=" footer text-center">
          <button type="submit" class="btn btn-fill btn-danger btn-wd">Enregistrer Nouvelle Mission</button>
      </div>
    </div>
</div>
 </div>
</form>
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
      document.write(new Date().getFullYear())
      </script>
      made with by <a href="#" target="_blank" class="footer-link fw-bolder">Ivoire Secours</a>
    </div>

</footer>
<!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


  </div>
  <!-- / Layout wrapper -->




  <!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div> -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->



  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->



  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../buttons.github.io/buttons.js"></script>

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/form-layouts-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 21:11:00 GMT -->
</html>
