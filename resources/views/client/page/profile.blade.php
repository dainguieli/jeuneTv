@extends('base')

@section('content')
<section class="m-profile setting-wrapper">        
    <div class="container">
        <br><br>  <br><br> 
        <h4 class="main-title mb-4">Paramètres du compte</h4>
 
        @if (Session::has('status'))
        <br>
        <div class="alert alert-danger"  style=" width: 400px;">
          {{Session::get('status')}}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="sign-user_card text-center">
                    
                    <img  src="{{asset('images/user/user.jpg')}}" class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user">
                    <h4 class="mb-3">  {{ Auth::user()->name }}</h4>
                    <p >BIENVENUE À JEUNESTV.</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="edit-icon text-primary">Modifier</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sign-user_card">
                    <h5 class="mb-3 pb-3 a-border">Détails personnels</h5>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Email</span>
                            <p class="mb-0">{{ Auth::user()->email }}</p>
                        </div>   
                      
                    </div>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Mot de passe</span>
                            <p class="mb-0">**********</p>
                        </div>
                        
                       
                    </div>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-8">
                            <span class="text-light font-size-13">Date de naissance</span>
                            <p class="mb-0">{{ Auth::user()->date_de_naissance }}</p>
                        </div>
                     
  
                </div>
                <div class="row align-items-center justify-content-between mb-3">
                    <div class="col-md-8">
                        <span class="text-light font-size-13">Contact</span>
                        <p class="mb-0">{{ Auth::user()->contact }}</p>
                    </div>
                  

            </div>
            </div>
        </div>
    </div>
       <!-- modal-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true"  >
        <div class="modal-dialog">
          <div class="modal-content" style="background: black">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1" style="color:  #ff6c00">Modifier profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
         
            <div class="modal-body">
                <form method="POST" action="{{url('admin/mise_a_jour_user/'.Auth::user()->id)}}">
                    @csrf
                    @method('PUT')
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label"  style="color:  #ff6c00">Nom & prénoms:</label>
                  <input type="text" class="form-control" value="{{ Auth::user()->name }}"name='name'id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label"  style="color:  #ff6c00">Date de naissance :</label>
                    <input type="date" class="form-control" value="{{ Auth::user()->date_de_naissance }}" name='date_de_naissance' id="recipient-name">
                  </div>
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label"  style="color:  #ff6c00">Contact :</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->contact }}" name='contact' id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label"  style="color:  #ff6c00">Email :</label>
                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" name='email' id="recipient-name">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label"  style="color:  #ff6c00">Ancien mot de passe:</label>
                    <input type="password" class="form-control" name='ancien_mot_de_passe'id="recipient-name">
                  </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label"  style="color:  #ff6c00">Nouveau mot de passe:</label>
                    <input type="password" class="form-control"  name='password' id="recipient-name">
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit"  style="background:  #ff6c00" class="btn btn-primary">Modifier</button>
           
                  </div>
              </form>
            </div>
          
          </div>
        </div>
        

       
</section>
@endsection