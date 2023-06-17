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
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{asset('css/typography.css')}}">
   <!-- Style -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
   <!-- Responsive -->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
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
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">      
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif              
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Réinitialiser le mot de passe</h3>
                     <p class="text-body">Saisissez votre adresse électronique et nous vous enverrons un courriel contenant les instructions pour réinitialiser votre mot de passe.</p>
                     <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">                                 
                           <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" autocomplete="off" required>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                        </div>                           
                        <div class="sign-info">
                           <button type="submit" class="btn btn-hover">Reset</button>                                                            
                        </div>                                       
                     </form>
                  </div>
               </div>                    
            </div>
         </div>
      </div>
      <!-- Sign in END -->
      <!-- color-customizer -->
   </div>
</section>
<!-- MainContent End-->

<!-- back-to-top End -->
<!-- jQuery, Popper JS -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- owl carousel Js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('js/select2.min.js')}}"></script>
<!-- Magnific Popup-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Slick Animation-->
<script src="{{asset('js/slick-animation.min.js')}}"></script>
<!-- Custom JS-->
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>