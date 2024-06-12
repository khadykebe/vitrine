<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard </h2>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#evenement">Evenement</a></li>
            <li><a href="#activite">Activité</a></li>
            <li><a href="#person">Info Ecole</a></li>
            <li><a href="#image">Galery Image</a></li>
            <li><a href="#video">Galery Vidée</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
           <h1>Welcome Nom de l'ecole</h1><a name="" id="" class="btn btn-primary " href="" role="button">Deconnexion</a>
        </header>
        <section id="home">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-content">
                            <h2>Nombre d'Élèves</h2>
                            <p id="student-count">785</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-content">
                            <h2>Nombre de classes</h2>
                            <p id="student-count">785</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-content">
                            <h2>Nombre d'enseignants</h2>
                            <p id="student-count">785</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="evenement">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addEventModal" style="float: right">
            <i class="fa fa-add" aria-hidden="true"></i>
        </button>

        <table class="table table-bordered">
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
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->titre }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->date_debut }}</td>
                        <td>{{ $event->date_fin }}</td>
                        <td>{{ $event->lieu }}</td>
                        <td>{{ $event->organisateur }}</td>
                        <td>{{ $event->type }}</td>
                        <td>{{ $event->statut }}</td>
                        <td>
                            <img src="{{ $event->image }}" alt="Image" width="50">
                            {{-- <img src="{{asset('images/{{ $event->image }}')}}" alt="Image" width="50"> --}}
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteEventModal{{ $event->id }}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Delete Event Modal -->
                    <div class="modal fade" id="deleteEventModal{{ $event->id }}" tabindex="-1" aria-labelledby="deleteEventModalLabel{{ $event->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteEventModalLabel{{ $event->id }}">Delete Event</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this event?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <form action="{{ route('deleteEvent', $event->id) }}" method="POST">
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

        <!-- Add Event Modal -->



        </section>
        <section id="activite">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addActiviteModal" style="float: right">
            <i class="fa fa-add" aria-hidden="true"></i>
        </button>

        <table class="table table-bordered">
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


        </section>

        <section id="info">
       

        </section>

        <section id="image">
            <h2>Gestion des Images</h2>
            <p>Content for the settings section.</p>
        </section>

        <section id="video">
            <h2>Gestion des Vidéos</h2>
            <p>Content for the settings section.</p>
        </section>

    </div>
        <!-- Add activite Modal -->

    <div class="modal fade" id="addActiviteModal" tabindex="-1" aria-labelledby="addActiviteModalLabel" aria-hidden="true">
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
        <!-- Add Event Modal -->

    <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('addEvenement') }}" method="POST" enctype="multipart/form-data">
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
    <script src="{{asset('style.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
