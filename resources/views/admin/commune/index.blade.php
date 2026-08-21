            @extends('layouts.admin')
            @section('first')
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
                                    <h1 class="m-0">Communes </h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Communes</li>
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
                                <a href="{{ route('communes.create') }}" class="btn btn-primary mb-3">Ajouter une
                                    Ajouter une commune </a>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Population</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($communes as $commune)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $commune->nom }}</td>
                                                <td>{{ $commune->population }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <a
                                                            href="{{ route('communes.edit', $commune->id) }}"class="btn btn-primary"><i
                                                                class="fas fa-edit" title="Modifier"></i></a>
                                                        <form method="post"
                                                            action="{{ route('communes.destroy', $commune->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash" title="Supprimer"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <span>
                                                Auncun enregistrement trouvé
                                            </span>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Population</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div><!-- /.container-fluid -->
                    </section>
                </div>
            @endsection
