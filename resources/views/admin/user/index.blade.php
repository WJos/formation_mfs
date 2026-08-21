@extends('layouts.admin')

@section('first')
    <div class="content-wrapper">
        <div class="row">
            @if (session('success'))
                <div class="col-12 alert alert-success alert-dismissible" role="alert">
                    <a class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                    <span>{{ session('success') }}</span>

                </div>

                <script>
                    setTimeout(function() {
                        document.querySelector('.alert.alert-success').style.display = 'none';
                    }, 3000);
                </script>
            @elseif(session('error'))
                <div class="col-12 alert alert-danger alert-dismissible" role="alert">
                    <a class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                    <span>{{ session('error') }}</span>

                </div>

                <script>
                    setTimeout(function() {
                        document.querySelector('.alert.alert-danger').style.display = 'none';
                    }, 3000);
                </script>
            @endif
        </div>

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Utilisateurs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Utilisateurs</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('users.create') }}">Ajouter un Utilisateur</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom & Prénom</th>
                                <th>Telephone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nom . ' ' . $user->prenom }}</td>
                                    <td>{{ $user->telephone }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('users.edit', $user) }}"><i
                                                class="fa fa-edit" title="Editer"></i></a>|
                                        <form method="post" action="{{ route('users.destroy', $user) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                                    title="Supprimer"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <span> Aucune donnée trouvée</span>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom & Prénom</th>
                                <th>Telephone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
