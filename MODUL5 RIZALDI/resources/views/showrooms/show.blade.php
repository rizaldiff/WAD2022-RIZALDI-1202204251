@extends('layouts.main')
@include('partials.navbar')
@section('container')
<section class="container">
   <div class="row mt-5">
   <h1 class="fw-bold">My ShowRoom</h1>
   <p class="text-secondary">List ShowRoom Rizaldi - 1202204251</p>
   <hr>
</section>

       <!-- Read Data Car -->
   <div class="container-fluid mt-5" style="height:75vh;">
      <div class="row" id="load_data">
         @if (count($show)>0)
         @foreach($show as $tampilkan)

         <div class="col-lg-3 mb-3 ml-3">
            <div class="card shadow bg-white">
               <center>
                  <img class="card-img-top bg-light" src="assets/images/{{ $tampilkan->image }}" alt="Card image" style="width:100%;">
               </center>
               <div class="card-body shadow" style="padding:25px;">
                  <h4 class="card-title fw-bold">{{ $tampilkan->name }}</h4>
                  <p class="card-text p-desc text-secondary">
                     {{ $tampilkan->description }}
                  </p>
                  <style>
                     .p-desc {
                     overflow: hidden;
                     display: -webkit-box;
                     -webkit-line-clamp: 2;
                     -webkit-box-orient: vertical;
                     }
                  </style>

                  <form action="{{ route('deleteCar') }}" method="post">
                     @csrf
                     <!-- Update Button -->

                     <a href="/showrooms/detail/{{ $tampilkan->id }}" type="submit"
                     class="btn btn-primary card-text w-100"><i class="bi bi-arrows-angle-expand"></i>&nbsp;Detail</a><hr>
                     <input type="hidden" value="{{ $tampilkan->id }}" name='id'>
                     <!-- Delete Button -->
                     <button class="btn btn-danger card-text w-100" type="submit"
                           onclick="return confirm('Apakah Anda Ingin Menghapus {{ $tampilkan->name }} dari List?')"><i class="bi bi-trash"></i>Delete</button>
                  </form>
               </div>
            </div>
         </div>
         @endforeach
         @else
         <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
          <strong>Data Not Found</strong> You should Add in on some of car fields below.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif
         <div class="container mt-5">
            <p class="fw-bold opacity-50">
               Jumlah Mobil : {{ $count }}
            </p>
         </div>
@endsection
