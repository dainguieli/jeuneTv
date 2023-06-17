@extends('layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liste des utilisateurs</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Utilisateurs</li>
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
              <h3 class="card-title">Liste des utilisateurs</h3>
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
      
                  <th>Nom & Prénoms</th>
                  <th>Email</th>
                  <th>Date de naissance</th>
                  <th>Contact</th>
              
                 <!-- <th>Actions</th>-->
                </tr>
                </thead>
                <tbody>
                @foreach ($user as $user)
                         <tr>
                  <td>{{$increment}}</td>
      
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->date_de_naissance}}</td>
                 
                  <td>{{$user->contact}}</td>
           
      
                  </tr>
                  <input type="hidden" {{$increment++}}/>
      @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Num.</th>
      
                  <th>Nom & Prénoms</th>
                  <th>Email</th>
                  <th>Date de naissance</th>
                  <th>Contact</th>
     
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
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
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
<!-- page script -->

@endsection