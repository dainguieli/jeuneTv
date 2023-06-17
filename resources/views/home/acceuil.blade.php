@extends('base')

@section('title', 'Accueil')

@section('content')

      <!-- Slider Start -->
<br><br><br>

<style>
#home-slider .slick-bg.s-bg-1 { background-image: url({{asset('storage/video_images/'.$video1->image)}}); }
#home-slider .slick-bg.s-bg-2 { background-image: url({{asset('storage/video_images/'.$video2->image)}}); }
#home-slider .slick-bg.s-bg-3 { background-image: url({{asset('storage/video_images/'.$video3->image)}}); }
/* parallax */

.parallax-img img { box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.6); }
.parallax-window { height: 100%; padding: 100px 0; position: relative; background: url({{asset('storage/video_images/'.$video3->image)}})center center; background-size: cover; background-attachment: fixed; }
.parallax-window::after { position: absolute; content: ""; top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.8); }
.parallaxt-details { z-index: 9; position: relative; }

</style>


<section id="home" class="iq-main-slider p-0">
   <div id="home-slider" class="slider m-0 p-0">
      <div class="slide slick-bg s-bg-1">
         <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
               <div class="row align-items-center  h-100">
                  <div class="col-xl-6 col-lg-12 col-md-12">
                  <a href="javascript:void(0);">
                      <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                         <img src="{{asset('images/logojeune.png')}} " style="width: 5.5rem; " class="c-logo" alt="streamit">
                      </div>
                   </a>
                     <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                        data-delay-in="0.6">{{$video1->nom_Vidéo}}</h1>

                        <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                          <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    
                         
                              </div>
                   
                      </div>

                     <!-- <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                         
                        <span class="badge badge-secondary p-2">18+</span>
                        <span class="ml-3">2 Seasons</span>
                     </div> -->
                     <p data-animation-in="fadeInUp" data-delay-in="1.2">{{$video1->description}}
                     </p>
                     <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                        <div class="text-primary title genres">
                           jour de diffusion: <span class="badge badge-secondary p-1 mr-2">{{$video1->jour_diffusion}}</span>
                       </div>
                        <div class="text-primary title genres">
                           Heure de diffusion: <span class="badge badge-secondary p-1 mr-2">{{$video1->heure_diffusion}}</span>
                       </div>
                        <div class="text-primary title starring">
                      Intervenant: <span class="text-body">{{$video1->animateur}}</span>
                      </div>
                      <div class="text-primary title genres">
                          Genres: <span class="text-body">{{$video1->video_categorie}}</span>
                      </div>
                  </div>
           
                     <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                        <a href="{{url('detailfilm/'.$video1->id)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                           aria-hidden="true"></i>Voire</a>
                     <a href="{{url('detailfilm/'.$video1->id)}}" class="btn btn-link">More details</a>
                     </div>
                  </div>
               </div>

               <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                   <!--      <a href="{{$video1->lien_video}}" class="video-open playbtn">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                        enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                        <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                           stroke-linejoin="round" stroke-miterlimit="10"
                           points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                        <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                           stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                     </svg>
                     <span class="w-trailor">Watch Trailer</span>
                  </a>-->
               </div>
            </div>
         </div>
      </div>

      <div class="slide slick-bg s-bg-2">
         <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
               <div class="row align-items-center  h-100">
                  <div class="col-xl-6 col-lg-12 col-md-12">
                     <a href="javascript:void(0);">
                        <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                           <img src="{{asset('images/logojeune.png')}} " style="width: 5.5rem; " class="c-logo" alt="streamit">
                        </div>
                     </a>
                     <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                     data-delay-in="0.6">{{$video2->nom_Vidéo}}</h1>

                     <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                       <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                 
                      
                           </div>
                
                   </div>

                  <!-- <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                      
                     <span class="badge badge-secondary p-2">18+</span>
                     <span class="ml-3">2 Seasons</span>
                  </div> -->
                  <p data-animation-in="fadeInUp" data-delay-in="1.2">{{$video2->description}}
                  </p>
                  <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                     <div class="text-primary title genres">
                        jour de diffusion: <span class="badge badge-secondary p-1 mr-2">{{$video2->jour_diffusion}}</span>
                    </div>
                     <div class="text-primary title genres">
                        Heure de diffusion: <span class="badge badge-secondary p-1 mr-2">{{$video2->heure_diffusion}}</span>
                    </div>
                     <div class="text-primary title starring">
                   Intervenant: <span class="text-body">{{$video2->animateur}}</span>
                   </div>
                   <div class="text-primary title genres">
                       Genres: <span class="text-body">{{$video2->video_categorie}}</span>
                   </div>
               </div>
        
                  <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                     <a href="{{url('detailfilm/'.$video2->id)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                        aria-hidden="true"></i>Voire</a>
                  <a href="{{url('detailfilm/'.$video2->id)}}" class="btn btn-link">More details</a>
                  </div>
               </div>
            </div>

            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                <!--      <a href="{{$video1->lien_video}}" class="video-open playbtn">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                     enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                     <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10"
                        points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                     <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                  </svg>
                  <span class="w-trailor">Watch Trailer</span>
               </a>-->
            </div>
         </div>
         </div>
      </div>
      <div class="slide slick-bg s-bg-3">
         <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
               <div class="row align-items-center  h-100">
                  <div class="col-xl-6 col-lg-12 col-md-12">
                     <a href="javascript:void(0);">
                        <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                           <img src="{{asset('images/logojeune.png')}} " style="width: 5.5rem; " class="c-logo" alt="streamit">
                        </div>
                     </a>
                     <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                     data-delay-in="0.6">{{$video3->nom_Vidéo}}</h1>

                     <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                       <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                 
                      
                           </div>
                
                   </div>

                  <!-- <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                      
                     <span class="badge badge-secondary p-2">18+</span>
                     <span class="ml-3">2 Seasons</span>
                  </div> -->
                  <p data-animation-in="fadeInUp" data-delay-in="1.2">{{$video3->description}}
                  </p>
                  <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                     <div class="text-primary title genres">
                        jour de diffusion: <span class="badge badge-secondary p-1 mr-2">{{$video3->jour_diffusion}}</span>
                    </div>
                     <div class="text-primary title genres">
                        Heure de diffusion: <span class="badge badge-secondary p-1 mr-2">{{$video3->heure_diffusion}}</span>
                    </div>
                     <div class="text-primary title starring">
                   Intervenant: <span class="text-body">{{$video3->animateur}}</span>
                   </div>
                   <div class="text-primary title genres">
                       Genres: <span class="text-body">{{$video3->video_categorie}}</span>
                   </div>
               </div>
        
                  <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                     <a href="{{url('detailfilm/'.$video3->id)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                        aria-hidden="true"></i>Voire</a>
                  <a href="{{url('detailfilm/'.$video3->id)}}" class="btn btn-link">More details</a>
                  </div>
               </div>
            </div>

            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                <!--      <a href="{{$video1->lien_video}}" class="video-open playbtn">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                     enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                     <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10"
                        points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                     <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                  </svg>
                  <span class="w-trailor">Watch Trailer</span>
               </a>-->
            </div>
         </div>
         </div>
         </div>
      </div>
   </div>
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
         fill="none" stroke="currentColor">
         <circle r="20" cy="22" cx="22" id="test"></circle>
      </symbol>
   </svg>
</section>



     <div class="main-content">
        <section id="iq-favorites">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                       <h4 class="main-title">En direct sur nos chaînes <i class="bi bi-play-circle-fill"></i></h4>
                 
                       <a class="iq-view-all" href="movie-category.html">View All</a>                   
                    </div>
                    <div class="favorites-contens">
                       <ul class="favorites-slider list-inline  row p-0 mb-0">
                        @foreach ($videos as $video)
                          <li class="slide-item">
                             
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="{{asset('storage/video_images/'.$video->image)}}" class="img-fluid" alt="" style="height : 200px; width : 500px">
                                   </div>
                                   <div class="block-description">
                                      <h6 class="iq-title"><a href="{{url('/detailfilm')}}">{{$video->nom_Vidéo}}</a></h6>
                                  
                                      <div class="text-primary title genres">
                                       Heure: <span class="badge badge-secondary p-1 mr-2">{{$video->heure_diffusion}}</span>
                                   </div>
                                      <div class="text-primary title genres">
                                       Genres: <span class="text-body">{{$video->video_categorie}}</span>
                                   </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover iq-button"><a href="{{url('detailfilm/'.$video->id)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                          aria-hidden="true"></i>Voire</a>
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                       <li class="share">
                                           <span><i class="ri-share-fill"></i></span>
                                           <div class="share-box">
                                              <div class="d-flex align-items-center">
                                                 <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                 <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                 <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                              </div>
                                           </div>
                                        </li>
                                         <li><span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">19+</span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             
                          </li>
                        @endforeach
                          <!--
                          <li class="slide-item">
                             
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="images/favorite/03.jpg" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6 class="iq-title"><a href="{{url('/detailfilm')}}">Boop Bitty</a></h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">15+</div>
                                         <span class="text-white">2h 30m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover iq-button">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Voire
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                       <li class="share">
                                           <span><i class="ri-share-fill"></i></span>
                                           <div class="share-box">
                                              <div class="d-flex align-items-center">
                                                 <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                 <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                 <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                              </div>
                                           </div>
                                        </li>
                                         <li><span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">19+</span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             
                          </li>
                          <li class="slide-item">
                             
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="images/favorite/04.png" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6 class="iq-title"><a href="{{url('/detailfilm')}}">Dino Land</a></h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">18+</div>
                                         <span class="text-white">3 Seasons</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover iq-button">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Voire
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                       <li class="share">
                                           <span><i class="ri-share-fill"></i></span>
                                           <div class="share-box">
                                              <div class="d-flex align-items-center">
                                                 <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                 <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                 <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                              </div>
                                           </div>
                                        </li>
                                         <li><span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">19+</span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             
                          </li>
                          <li class="slide-item">
                             
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="images/favorite/05.jpg" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6 class="iq-title"><a href="{{url('/detailfilm')}}">Jaction action</a></h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">10+</div>
                                         <span class="text-white">1 Season</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover iq-button">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Voire
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                       <li class="share">
                                           <span><i class="ri-share-fill"></i></span>
                                           <div class="share-box">
                                              <div class="d-flex align-items-center">
                                                 <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                 <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                 <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                              </div>
                                           </div>
                                        </li>
                                         <li><span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">19+</span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             
                          </li>-->
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </section>
         
        <section id="parallex" class="parallax-window">
         <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center h-100 parallaxt-details">
               <div class="col-lg-4 r-mb-23">
                  <div class="text-left">
                     <a href="javascript:void(0);">
                        <h1 class="trending-text big-title text-uppercase ">{{$video->nom_Vidéo}}</h1>
        
                     </a>
     
                  
                     <p>{{$video->description}}</p>
                     <div class="parallax-buttons">
                        <a href="{{url('detailfilm/'.$video->id)}}" class="btn btn-hover">Voire</a>
                        <a href="{{url('detailfilm/'.$video->id)}}" class="btn btn-link">More details</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="parallax-img">
                     <a href="{{url('detailfilm/'.$video->id)}}">
                         <img src="{{asset('storage/video_images/'.$video->image)}}" class="img-fluid w-100" alt="bailey">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>

        <section id="iq-upcoming-movie">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">                        
                       <h4 class="main-title">Top Programmes</h4>
                       <a class="iq-view-all" href="movie-category.html">View All</a>
                    </div>
                    <div class="upcoming-contens">
                       <ul class="favorites-slider list-inline row p-0 mb-0">
                        @foreach ($videos as $video)
                        <li class="slide-item">
                           
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    <img src="{{asset('storage/video_images/'.$video->image)}}" class="img-fluid" alt="" style="height : 200px; width : 500px">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="{{url('/detailfilm')}}">{{$video->nom_Vidéo}}</a></h6>
                                
                                    <div class="text-primary title genres">
                                     Heure: <span class="badge badge-secondary p-1 mr-2">{{$video->heure_diffusion}}</span>
                                 </div>
                                    <div class="text-primary title genres">
                                     Genres: <span class="text-body">{{$video->video_categorie}}</span>
                                 </div>
                                    <div class="hover-buttons">
                                       <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          <a href="{{url('detailfilm/'.$video->id)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                             aria-hidden="true"></i>Voire</a>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="block-social-info">
                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                     <li class="share">
                                         <span><i class="ri-share-fill"></i></span>
                                         <div class="share-box">
                                            <div class="d-flex align-items-center">
                                               <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                               <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                               <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                            </div>
                                         </div>
                                      </li>
                                       <li><span><i class="ri-heart-fill"></i></span>
                                     <span class="count-box">19+</span></li>
                                       <li><span><i class="ri-add-line"></i></span></li>
                                    </ul>
                                 </div>
                              </div>
                           
                        </li>
                      @endforeach
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </section>



     </div>


@endsection
