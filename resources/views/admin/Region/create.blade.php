@extends('layouts.admin')


 @section('first')
     <div class="content-wrapper">
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
                 <div class="row">
                     <!-- left column -->
                     <div class="col-md-12">
                         <!-- general form elements -->
                         <div class="card card-primary">
                             <div class="card-header">
                                 <h3 class="card-title">Quick Example</h3>
                             </div>
                             <!-- /.card-header -->
                             <!-- form start -->
                             <form method="post" action=" {{ route('regions.store') }} ">
                                @csrf 
                                @include('admin.region._form')
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 @endsection


