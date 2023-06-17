@extends('layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All categories</h3>
            </div>
            @if (Session::get('status'))
            <br>
            <div class="alert alert-success">
              {{Session::get('status')}}
            </div>
            @endif
            <input type="hidden" {{$increment=1}}/>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Num.</th>
                  <th>Category Name</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
               @foreach ($categories as $categorie)
                         <tr>
                  <td>{{$increment}}</td>
                  <td>{{$categorie->nom_categorie}}</td>
                  <td>
                    <a href="{{url('admin/modifierCategorie/'.$categorie->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                
                  <a href="#" onclick="$(this).parent().find('form').submit()" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                  <form action="{{url('admin/supprimerCategorie/'.$categorie->id)}}" method="post">
                    @csrf 
                    @method('DELETE') 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                  </td>
                </tr>
                <input type="hidden" {{$increment++}}/>
               @endforeach
          
                </tbody>
                <tfoot>
                <tr>
                  <th>Num.</th>
                  <th>Category Name</th>
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

  @section('scripts')
  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('frontend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endsection