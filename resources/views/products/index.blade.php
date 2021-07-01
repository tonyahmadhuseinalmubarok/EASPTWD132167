@extends('layouts.app')

@section ('content')
@php

@endphp
<div class="container p-0">
  <div class="row sixtyvh">
    <div class="col-lg-3 col-md-3 col-sm-4 col-5 pl-4 filter">
      <div class="fixedfilter">
        <div class="filterprice card">
          <div class="card-body">
            <h5 class="card-title">Filter Harga</h5>
            <input type="range" min="{{ $minPrice }}" max="{{ $maxPrice }}" value="{{ $maxPrice }}" class="slider selector" id="pricerange">
            <p class="p-0 m-0">Max: Rp. <span id="currentrange">{{ $maxPrice }}</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-7 pr-4">
      <h3>Product</h3>
      <div class="row d-flex justify-content-start" id="products" >
      </div>
    </div>
  </div>
</div>
@endsection