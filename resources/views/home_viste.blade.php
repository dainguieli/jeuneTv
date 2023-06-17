<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite('resources/js/app.js')
    <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEUNES TV - Regarder des émissions TV</title>
    <link rel="stylesheet" href="css/leanding.css">
   
</head>
<body>

   <div class="content">
       <h1 >Bienvenue sur <br> JEUNES TV.</h1>
       <h2>Regarder n'importe où et Quand vous voulez.</h2>
       <h2 >Prêt à regarder ? Connectez vous ou inscrivez vous.</h2>
       <br>
       <div class="mail">
        <a href="{{route('login')}}">Connexion</a>
           <a  href="{{route('register')}}">Inscription</a>
       </div>
   </div>

<!--
<h1>/*
  
</h1>
-->
</body>

</html>
