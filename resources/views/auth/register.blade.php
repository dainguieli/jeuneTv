<!doctype html>
<html lang="en-US">
<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>JEUNESTV</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="{{asset('images/logojeune.png')}}" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style -->
   <link rel="stylesheet" href="css/style.css"/>
   <!-- Responsive -->
   <link rel="stylesheet" href="css/responsive.css"/>
</head>
<body>
<div id="loading">
   <div id="loading-center">
   </div>
</div>

<!-- MainContent -->
<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-7 col-md-12 align-self-center">
            <div class="sign-user_card ">                    
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">

								@if ( Session::get('success'))
									 <div class="alert alert-success">
										 {{ Session::get('success') }}
									 </div>
								@endif
								@if ( Session::get('error'))
									 <div class="alert alert-danger">
										 {{ Session::get('error') }}
									 </div>
								@endif
                                @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Nom & Prénoms</label>
                                 <input type="text" class="form-control mb-0" name="name" id="exampleInputEmail2" placeholder="Entrer Nom & Prénoms" value="{{ old('name') }}" autocomplete="off" required>
                                 <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                              </div>
                           </div>  
                           
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Contact</label>
                                 <input type="text" name="contact" class="form-control mb-0" id="exampleInputContact" placeholder="Entrer votre contact" autocomplete="off" value="{{ old('contact') }}" required>
                                 <span class="text-danger">@error('contact'){{ $message }}@enderror</span>
                              </div>
                           </div>
						   <div class="col-md-6">
							<div class="form-group">
							   <label>Date de naissance</label>
							   <input type="date" name="date_de_naissance" class="form-control mb-0" id="exampleInputContact" placeholder="Entrer votre Date de naissance" autocomplete="off" value="{{ old('date_de_naissance') }}" required>
							   <span class="text-danger">@error('contact'){{ $message }}@enderror</span>
							</div>
						 </div>
                           <div class="col-md-6">
                              <div class="form-group">  
                                 <label>E-mail</label>                               
                                 <input type="email"  name="email" class="form-control mb-0" id="exampleInputEmail3" placeholder="Enter email" autocomplete="off" required>
                                 <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                              </div>
                           </div>
                      
                
                           <div class="col-md-6">
                              <div class="form-group">   
                                 <label>Mot de passe</label>                              
                                 <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                                 <span class="text-danger">@error('password'){{ $message }}@enderror</span>
						
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group"> 
                                 <label>Rèpéter le mot de passe</label>                                
                                 <input type="password" name="password_confirmation" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                                 <span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                                    
                              </div>
                           </div>
                           
                        </div>

                        <button type="submit" class="btn btn-hover my-2">S'enregistre</button>
                                                            
                     </form>
                  </div>
               </div>    
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Vous avez déjà un compte ? <a href="{{route('login')}}" class="text-primary ml-2">Connexion</a>
                  </div>                        
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- MainContent End-->
<!-- jQuery, Popper JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="js/slick.min.js"></script>
<!-- owl carousel Js -->
<script src="js/owl.carousel.min.js"></script>
<!-- select2 Js -->
<script src="js/select2.min.js"></script>
<!-- Magnific Popup-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Slick Animation-->
<script src="js/slick-animation.min.js"></script>
<!-- Custom JS-->
<script src="js/custom.js"></script>
</body>
</html>