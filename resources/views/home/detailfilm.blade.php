@extends('base')

@section('title', 'A propos de nous')

@section('content')
<br><br><br><br><br>
<style>
  iframe{
    margin: 0 auto;display: block;
border-style:initial;
  }
 </style>

<iframe width="1280" height="720" src="{{$video->lien_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>
<br><br><br><br>
 <!-- Banner End -->
 <!-- MainContent -->
 <div class="main-content movi">
    <section class="movie-detail container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="trending-info g-border">
                <h1 class="trending-text big-title text-uppercase mt-0">{{$video->nom_Vidéo}}</h1>
                <ul class="p-0 list-inline d-flex align-items-center movie-content">
                   <li class="text-white">{{$video->categorie_video}}</li>
                 
                </ul>
                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                       
                  <span class="badge badge-secondary p-2" style="font-size: 1em">JOUR DE DIFFUSION</span>
                  <span class="ml-3">{{$video->jour_diffusion}}</span>
               </div> 
                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                       
                  <span class="badge badge-secondary p-2" style="font-size: 1em">HEURE D'EMISSION</span>
                  <span class="ml-3">{{$video->heure_diffusion}}</span>
               </div> 
               <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                       
                  <span class="badge badge-secondary p-2" style="font-size: 1em">Intervenant</span>
                  <span class="ml-3">{{$video->animateur}}</span>
               </div> 
                <p class="trending-dec w-100 mb-0">{{$video->description}}</p>
                <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                   <li><span><i class="ri-add-line"></i></span></li>
                   <li><span><i class="ri-heart-fill"></i></span></li>
                   <li class="share">
                      <span><i class="ri-share-fill"></i></span>
                      <div class="share-box">
                         <div class="d-flex align-items-center">
                            <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                            <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                            <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                         </div>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </section>
    <section id="iq-favorites" class="s-margin">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 overflow-hidden">
                <div class="iq-main-header d-flex align-items-center justify-content-between">                     
                   <h4 class="main-title"><a href="movie-category.html">More Like This</a></h4>                     
                </div>
                <div class="favorites-contens">
                   <ul class="list-inline favorites-slider row p-0 mb-0">
                      <li class="slide-item">
                         
                            <div class="block-images position-relative">
                               <div class="img-box">
                                  <img src="images/movies/06.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">The Lost Journey</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">20+</div>
                                     <span class="text-white">2h 15m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play
                                        Now</span>
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
                                  <img src="images/movies/07.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Boop Bitty</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">11+</div>
                                     <span class="text-white">2h 30m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play
                                        Now</span>
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
                                  <img src="images/movies/08.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Unknown Land</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">17+</div>
                                     <span class="text-white">2h 30m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play
                                        Now</span>
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
                                  <img src="images/movies/09.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Blood Block</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">13+</div>
                                     <span class="text-white">2h 40m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play
                                        Now</span>
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
                                  <img src="images/movies/10.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Champions</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">13+</div>
                                     <span class="text-white">2h 30m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play
                                        Now</span>
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
                   </ul>
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
                   <h4 class="main-title"><a href="movie-category.html">Upcoming Movies</a></h4>
                </div>
                <div class="upcoming-contens">
                   <ul class="favorites-slider list-inline  row p-0 mb-0">
                      <li class="slide-item">
                            <div class="block-images position-relative">
                               <div class="img-box">
                                  <img src="images/upcoming/01.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">The Last Breath</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">5+</div>
                                     <span class="text-white">2h 30m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play Now
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
                                  <img src="images/upcoming/02.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Last Night</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">22+</div>
                                     <span class="text-white">2h 15m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play Now
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
                                  <img src="images/upcoming/03.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">1980</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">25+</div>
                                     <span class="text-white">3h</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play Now
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
                                  <img src="images/upcoming/04.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Looters</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">11+</div>
                                     <span class="text-white">2h 45m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play Now
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
                                  <img src="images/upcoming/05.jpg" class="img-fluid" alt="">
                               </div>
                               <div class="block-description">
                                  <h6 class="iq-title"><a href="movie-details.html">Vugotronic</a></h6>
                                  <div class="movie-time d-flex align-items-center my-2">
                                     <div class="badge badge-secondary p-1 mr-2">9+</div>
                                     <span class="text-white">2h 30m</span>
                                  </div>
                                  <div class="hover-buttons">
                                     <span class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        Play Now
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
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </section>
 </div>
@endsection