@extends('layouts.admin')

@section('first')
    <!-- Main content -->
    <!-- Content Wrapper. Contains page content -->
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
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <a class="btn btn-primary" href="{{ route('regions.create') }}">Ajouter une Region</a>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nom</th>
                                            <th>Chef lieu</th>
                                            <th>Superficie</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($regions as $region)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $region->nom }}</td>
                                                <td>{{ $region->chef_lieu }}</td>
                                                <td> {{ $region->superficie }} Km²</td>
                                                <td> <a class=" btn btn-primary"
                                                        href="{{ route('regions.edit', $region->id) }}"> <i
                                                            class="fa fa-edit " title="éditer"></i></a>
                                                    <form action="{{ route('regions.destroy', $region->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette région ?')">
                                                            <i class="fa fa-trash" title="Supprimer"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                        @empty
                                            <!--<span>Aucune donnée trouvée</span>-->
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nom</th>
                                            <th>Chef lieu</th>
                                            <th>Superficie</th>
                                            <th>Action</th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endsection
