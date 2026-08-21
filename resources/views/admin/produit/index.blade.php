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
            <h1 class="m-0">Produits</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produits</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-primary" href="{{ route('produits.create') }}">Ajouter un nouveau Produit</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nom</th>
                      <th>Prix</th>
                      <th>Quantité</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($produits as $produit)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $produit->nom }}</td>
                      <td>{{ $produit->prix }}</td>
                      <td>{{ $produit->quantite }}</td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('produits.edit', $produit) }}"><i class="fas fa-edit"></i> Editer</a>
                        <form method="post" action="{{ route('produits.destroy', $produit->id) }}" style="display:inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" title="Supprimer"></i></button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5" class="text-center">Aucun produit trouvé</td>
                    </tr>
                    @endforelse
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nom</th>
                      <th>Prix</th>
                      <th>Quantité</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection