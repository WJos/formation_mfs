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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Striped Full Width Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Régions</th>
                                    <th>Provinces</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($regions as $region)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $region->nom }}</td>
                                        <td>
                                            @forelse($region->provinces as $province)
                                            <span class="badge badge-info"> {{ $province->nom }}</span>
                                                
                                            @empty
                                                <span> Aucune données trouvées</span>
                                            @endforelse
                                        </td>
                                    </tr>
                                @empty
                                    <span> Aucune données trouvées</span>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
