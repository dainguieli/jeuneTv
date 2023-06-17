@extends('layouts.base')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Vidéo</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Vidéo</li>
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
          <!-- jquery validation -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Ajouter vidéo</h3>
            </div>
          <!-- /.card-header -->
          @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          
          @endif

          @if (Session::has('status'))
          <br>
          <div class="alert alert-success">
            {{Session::get('status')}}
          </div>
          @endif
            <form method="POST" action="{{ route('admin.enregisterVideo') }}"  enctype="multipart/form-data" >
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nom vidéo</label>
                  <input type="text" required name="nom_Vidéo" class="form-control" id="exampleInputEmail1" placeholder="Entrer Vidéo name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Intervenants</label>
                  <input type="text" required  name="animateur" class="form-control" id="exampleInputEmail1" placeholder="Entrer les intervenants" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">heure de diffusion</label>
                  <input type="text" required  name="heure_diffusion" class="form-control" id="exampleInputEmail1" placeholder="Entrer l'heure de diffusion" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">jour de diffusion</label>
                  <input type="date" required  name="jour_diffusion" class="form-control" id="exampleInputEmail1" placeholder="Entrer le jour de diffusion" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Lien video</label>
                  <input type="text" required  name="lien_video" class="form-control" id="exampleInputEmail1" placeholder="Entrer le lien de la vidéo" min="1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" required  name="description" class="form-control" id="exampleInputEmail1" placeholder="Entrer la description" min="1">
                </div>
                <div class="form-group">
                  <label>Vidéo categories</label>
                  <select  name="video_categorie" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="">Selectioner</option>
                    @foreach ($categories as $categorie )
                    <option value="{{$categorie->nom_categorie}}">{{$categorie->nom_categorie}}</option>
                    @endforeach

                  </select>
                </div>
                <label for="exampleInputFile">Vidéo image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input  type="file" required name="image" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                <input type="submit" class="btn btn-success" value="Save">
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
  @endsection