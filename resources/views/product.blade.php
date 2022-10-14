<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title', 'MyCompany') | DSETH</title>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
    <div class="inner">
       <h3 class="masthead-brand">DSETH</h3>
    <nav class="nav nav-masthead justify-content-center">
       <a class="nav-link {{ Route::is('home') ? 'active' : '' }}"
       href="{{route('home')}}">Home</a>
        <a class="nav-link {{ Route::is('portfolio') ? 'active' : '' }}"
       href="{{route('portfolio')}}">Portfolio</a>
       <a class="nav-link {{ Route::is('about') ? 'active' : '' }}"
       href="{{route('portfolio')}}">About</a>
   </nav>
    </div>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="/"><strong>DSETH</strong></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent"
 aria-controls="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item ">
 <a class="nav-link" href="/mahasiswa">DSETH </a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="/dosen"></a>
 </li>
 </ul>
 </div>
 </nav>
 <div class="container text-center mt-3 p-4 bg-white">
 <h1>Home</h1>
 <div class="card-columns">
 @for ($i = 0; $i < 10; $i++)
 <div class="card">
 <img
src="https://source.unsplash.com/random?sig={{$i}}/350x250"
 class="img-thumbnail img-fluid">
 </div>
 @endfor
 </div>
 </div>
 <footer class="bg-dark py-4 text-white mt-4">
    <div class="container text-center">
        <small class="text-center">
        Copyright © {{date("Y")}} STMIK LIKMI
        </small>
        </div>
        </footer>
        <script src="/js/app.js"></script>
       </body>
       </html>
