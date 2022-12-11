@extends('layouts.main')
@include('partials.navbar')
@section('container')

<section>
   <section class="container mt-5">
      <div class="row">
         <div class="col-6">

            <h3 class="fw-bold">{{ $post->name }}</h3>
            <p class="fst-italic text-secondary">Detail Mobil {{ $post->name }}</p>
               <img src="../../assets/images/{{ $post->image }}" class="form-control bg-light" alt="Card image" style="width:100%;">
         </div>
         <div class="col-6">
            <form action="" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="mb-3">
                  <span class="fw-bold ">Jenis Mobil</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" value="{{ $post->name }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold ">Nama Pemilik</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="owner" value="{{ $post->owner }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold ">Merk</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="brand" value="{{ $post->brand }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold ">Tanggal Beli</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="purchase_date" value="{{ $post->purchase_date }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold ">Deskripsi</span>
                  <textarea class="form-control mb-3 mt-3 text-dark" value="" name="description" id="" cols="30" rows="10" readonly>{{ $post->description }}</textarea>
               </div>

               @if($post->status=="Lunas")
                  <div class="mb-3">
                     <span class="fw-bold d-block mb-3">Status</span>
                     <div class="alert alert-primary w-100 fw-bold" role="alert">
                        {{ $post->status }}
                     </div>
                  </div>
               @else
               <div class="mb-3">
                  <span class="fw-bold d-block mb-3">Status</span>
                  <div class="alert alert-danger w-100 fw-bold" role="alert">
                     {{ $post->status }}
                   </div>
               </div>
               @endif

               <a href="/showrooms/edit/{{ $post->id }}"  class="btn btn-warning w-30 mt-5 mb-3">Edit</a>
         </div>
         </form>
      </div>
      </div>
   </section>
</section>
@endsection
