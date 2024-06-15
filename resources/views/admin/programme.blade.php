<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <!-- Template Main CSS File -->
  <link href="admin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->



  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Evenement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('evenement')}}">
              <i class="bi bi-circle"></i><span>liste Evenement</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Activité</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('activite')}}">
              <i class="bi bi-circle"></i><span>Liste des activités</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Info Ecole</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('info')}}">
              <i class="bi bi-circle"></i><span>Liste des Infos</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Galerie images</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('allImage')}}">
              <i class="bi bi-circle"></i><span>Liste Image</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('partenaire')}}">
          <i class="bi bi-gem"></i><span>Partenaires</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('scolaire')}}">
          <i class="bi bi-gem"></i><span>Vie Scolaire</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('programme')}}">
          <i class="bi bi-gem"></i><span>Programme</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Icons Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Vie Scolaire</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                <button class="btn btn-success m-2 " data-toggle="modal" data-target="#addModal" style="float: right">
                    <i class="fa fa-add" aria-hidden="true"></i>
                </button>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                    @foreach($programmes as $programme)
                    <tbody>
                        <tr>
                            <td>{{ $programme->nom }}</td>
                            <td>{{ $programme->description }}</td>
                            <td>
                                <button class="btn btn-primary edit-btn"  data-id="{{ $programme->id }}" data-nom="{{ $programme->nom }}" data-description="{{ $programme->description }}"  data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger delete-btn" data-id="{{ $programme->id }}" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>

      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('addProg') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Ajout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="addDate">Titre</label>
                            <input type="text" class="form-control" id="addNom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="addHdebut">Description</label>
                            <textarea class="form-control" id="addDescription" name="description" required>Description</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <!-- Modal de Modification -->

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editForm" method="POST" action="{{route('updateProg',$programme->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Modifier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editDate">Titre</label>
                            <input type="text" class="form-control" id="editNom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="editHdebut">Description</label>
                            <textarea class="form-control" id="editDescription" name="description" required>Description</textarea>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <!-- Modal de Suppression -->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="deleteForm" method="POST" action="{{route('deleteProg',$programme->id)}}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Supprimer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




<script>
           $(document).on('click', '.edit-btn', function() {
            let id = $(this).data('id');
            let nom = $(this).data('Nom');
            let description = $(this).data('Description');
            $('#editNom').val(nom);
            $('#editDescription').val(description);
            $('#editForm').attr('action', '/updateProg/' + id);
        });

        // Script pour gérer le formulaire de suppression
        $(document).on('click', '.delete-btn', function() {
            let id = $(this).data('id');
            $('#deleteForm').attr('action', '/deleteProg/' + id);
        });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="admin/assets/vendor/quill/quill.js"></script>
  <script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/assets/js/main.js"></script>

</body>

</html>
