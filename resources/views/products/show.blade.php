@extends('layouts.app')

@section ('content')

@php

@endphp
<div class="container p-0 show">
   <div class="row sixtyvh">
       <div class="col-lg-8 col-sm-12 mb-3 show-picture">
            <img src="{{ url($namafile) }}" alt="">
       </div>
       <div class="col-lg-4 col-sm-12 pl-5 pr-5">
        <h5>{{ $product->name }}</h5>
            <div class="card">
                <div class="card-body">
                    <div class="show-info">
                        <div class="info-1">
                            <h6>BUY NEW</h6>
                        </div>
                        <div class="info-2">
                            <select id="size-dropdown">
                                <option selected="true" value="nothing" disabled hidden>Ukuran</option>
                                @foreach($sizes as $size)
                                    @if($size->quantity > 0)
                                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="info-3">
                        </div>
                        <a href="{{ route('cart.add',['product'=>$product->id]) }}" id="add-to-cart" class="add-to-cart disabled">
                            <div class="info-4">
                                Tambah ke keranjang
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection