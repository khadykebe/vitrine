<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
          </li><!-- End Components Nav -->

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
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-gem"></i><span>Galerie vidéo</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{route('allVideo')}}">
                  <i class="bi bi-circle"></i><span>Liste vidéo</span>
                </a>
              </li>
            </ul>
          </li><!-- End Icons Nav -->

        </ul>

      </aside><!-- End Sidebar-->
      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Activités</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addEventModal" style="float: right">
                        <i class="fa fa-add" aria-hidden="true"></i>
                    </button>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date Debut</th>
                          <th>Date Fin</th>
                          <th>Lieu</th>
                          <th>Organisateur</th>
                          <th>Type</th>
                          <th>Statut</th>
                          <th>Image</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($activites as $activite)
                              <tr>
                                  <td>{{ $activite->titre }}</td>
                                  <td>{{ $activite->description }}</td>
                                  <td>{{ $activite->date_debut }}</td>
                                  <td>{{ $activite->date_fin }}</td>
                                  <td>{{ $activite->lieu }}</td>
                                  <td>{{ $activite->organisateur }}</td>
                                  <td>{{ $activite->type }}</td>
                                  <td>{{ $activite->statut }}</td>
                                  <td>
                                      <img src="{{ $activite->image }}" alt="Image" width="50">
                                      {{-- <img src="{{asset('images/{{$activite->image}}')}}" alt="Image" width="50"> --}}
                                  </td>
                                  <td>
                                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteEventModal{{ $activite->id }}">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                  </td>
                              </tr>

                              <!-- Delete Event Modal -->
                              <div class="modal fade" id="deleteEventModal{{ $activite->id }}" tabindex="-1" aria-labelledby="deleteEventModalLabel{{ $activite->id }}" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="deleteEventModalLabel{{ $activite->id }}">Delete Event</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              Are you sure you want to delete this event?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              <form action="{{ route('deleteActivite', $activite->id) }}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                  </div>
                </div>

              </div>
            </div>
          </section>

      </main><!-- End #main -->




      <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('addActivite') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="titre">Title</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date_debut">Date Debut</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                        </div>
                        <div class="form-group">
                            <label for="date_fin">Date Fin</label>
                            <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                        </div>
                        <div class="form-group">
                            <label for="lieu">Lieu</label>
                            <input type="text" class="form-control" id="lieu" name="lieu" required>
                        </div>
                        <div class="form-group">
                            <label for="organisateur">Organisateur</label>
                            <input type="text" class="form-control" id="organisateur" name="organisateur" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                        </div>
                        <div class="form-group">
                            <label for="statut">Statut</label>
                            <input type="text" class="form-control" id="statut" name="statut" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Enrégistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <!-- Vendor JS Files -->
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
