
@extends('base')

@section('title', 'Direct')

@section('content')
<br><br><br><br><br>
<style>
.container {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

</style>

<!--
<style>
  iframe{
    margin: 0 auto;display: block;
border-style:initial;
  }
 </style>

 <div class="flex" style="background: none">

<iframe src="" width="1280" height="720" style="border:none;overflow:hidden"width="1280" height="720" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
</div>
-->
<div class="container">
  <iframe class="responsive-iframe" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmax.daingui%2Fvideos%2F700327618764287%2F&width=1280"  ></iframe>
</div>
<br><br><br><br>
 @endsection