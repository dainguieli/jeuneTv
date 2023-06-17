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

<!-- loader Start -->
<div id="loading">
   <div id="loading-center">
   </div>
</div> 
<!-- loader END -->
<!-- MainContent -->
<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">                    
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Sign in</h3>
                     <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('login') }}">
                        @csrf
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
						
                        <div class="form-group">                                 
                           <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" required>
                           <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">                                 
                           <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                           <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        
                           <div class="sign-info">
                              <button type="submit" class="btn btn-hover">Connexion</button>
                              <div class="custom-control custom-checkbox d-inline-block">
                                 <input type="checkbox" class="custom-control-input" id="customCheck">
                                 <label class="custom-control-label" for="customCheck">Souvenez-vous de moi</label>
                              </div>                                
                           </div>                                    
                        
                     </form>
                  </div>
               </div>
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Vous n'avez pas de compte ? <a href="{{route('register')}}" class="text-primary ml-2">Créer un compte</a>
                  </div>
                  <div class="d-flex justify-content-center links">
                     <a href="{{route('password.request')}}" class="f-link">Vous avez oublié votre mot de passe ?</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- MainContent End-->

<!-- back-to-top End -->
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