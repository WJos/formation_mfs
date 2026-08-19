@extends('layouts.admin')

@section('first')
    <div class="content-wrapper">
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
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Regions</th>
                                <th>Provinces</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($regions as $region)
                                <tr>
                                    <td>1</td>
                                    <td> {{ $region->nom }} </td>
                                    <td>
                                        @forelse($region->provinces as $province)
                                            <span class="badge badge-primary">{{ $province->nom }}</span>
                                        @empty
                                            <span>Aucune donnée trouvée</span>
                                        @endforelse
                                    </td>
                                </tr>
                            @empty
                                <span>Aucune donnée trouvée</span>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Regions</th>
                                <th>Provinces</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
