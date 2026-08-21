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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.card-header -->
                <div class="card-body">
                    <a href="{{ route('pays.create') }}" class="btn btn-primary">Ajouter un pays</a>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Iso2</th>
                                <th>Iso3</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @forelse($pays as $lepays)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $lepays->Nom }}</td>
                                <td>{{ $lepays->Iso2 }}</td>
                                <td>{{ $lepays->Iso3 }}</td>
                                <td>

                                    <a class="btn btn-primary" href="{{ route('pays.edit', $lepays) }}"><i
                                            class="fas fa-edit" title="Editer"></i></a>
                                    <form method="post" action="{{ route('pays.destroy', $lepays) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                                title="Supprimer"></i></button>
                                    </form>

                                </td>
                            </tr>

                        @empty
                            span>Aucun pays trouvé.</span>
                            @endforelse


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Iso2</th>
                                <th>Iso3</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
