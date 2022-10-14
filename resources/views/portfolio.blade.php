@extends('layout.master')
@section('title','Portfolio')

@section('content')
<h1 class="cover-heading">Our Portofolio!</h1>
<div id="demo" class="carousel slide" data-ride="carousel">
 {{-- Indikator carousel --}}
 <ul class="carousel-indicators">
 @forelse ($carousels as $key => $carousel)
 <li data-target="#demo"
 data-slide-to="{{ $key }}"
 class="{{ $key==0? 'active':'' }}"></li>
 @empty
 <li data-target="#demo" data-slide-to="0" class="active">
 @endforelse
 </ul>
 {{-- Carousel content --}}
 <div class="carousel-inner">
 @forelse ($carousels as $key => $carousel)
 <div class="carousel-item {{ $key==0? 'active':'' }}">
 <img src="{{ $carousel['url'] }}"
 width="{{ $carousel['width'] }}"
 height="{{ $carousel['height'] }}">
 </div>
 @empty
 <div class="carousel-item active">
 <img src="https://placekitten.com/900/300"
 alt="Placeholder" width="900" height="300">
 </div>
 @endforelse
 </div>
 {{-- Carousel button --}}
 <a class="carousel-control-prev" href="#demo" data-slide="prev">
 <span class="carousel-control-prev-icon"></span>
 </a>
 <a class="carousel-control-next" href="#demo" data-slide="next">
 <span class="carousel-control-next-icon"></span>
 </a>
</div>
@endsection
