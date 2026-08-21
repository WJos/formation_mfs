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
                           <h3 class="card-title">DataTable with default features</h3>
                       </div>
                       <!-- /.card-header -->
                       <div class="card-body">
                           <a href="{{ route('provinces.create') }}" class="btn btn-primary mb-3">Ajouter province</a>
                           <table id="example1" class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Nom</th>
                                       <th>Actions</th>
                                   </tr>

                               </thead>
                               <tbody>
                                   <tr>
                                       @forelse ($provinces as $province)
                                           <td>{{ $loop->iteration }}</td>
                                           <td>{{ $province->nom }}</td>
                                           <td>
                                               <a href="{{ route('provinces.edit', $province->id) }}"
                                                   class="btn btn-primary "><i class="fas fa-edit" title="Modifier"></i></a>
                                               <form action="{{ route('provinces.destroy', $province->id) }}" method="POST"
                                                   style="display: inline-block;">
                                                   @csrf
                                                   @method('DELETE')
                                                   <button type="submit" class="btn btn-danger"><i class="fas fa-trash"
                                                           title="Supprimer"></i></button>
                                               </form>
                                           </td>
                                   </tr>
                               @empty
                                   <span colspan="3">Aucune province trouvée.</span>
                                   @endforelse

                               </tbody>
                               <tfoot>
                                   <tr>
                                       <th>#</th>
                                       <th>Nom</th>
                                       <th>Actions</th>
                                   </tr>

                               </tfoot>
                           </table>
                       </div>
                       <!-- /.card-body -->
                   </div>
           </section>
           <!-- /.content -->
       </div>
       <!-- /.content-wrapper -->
   @endsection
