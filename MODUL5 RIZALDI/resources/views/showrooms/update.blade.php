@extends('layouts.main')
@include('partials.navbar')
@section('container')

<section>
   <section class="container mt-5">
      <div class="row">
         <div class="col-6">
            <a href="/showrooms-car" class="btn btn-primary">Back</a>
            <h3 class="fw-bold">{{ $post->image }}</h3>
            <p class="fst-italic text-secondary">Detail Mobil {{ $post->name }}</p>
               <img src="../../assets/images/{{ $post->image }}" class="form-control bg-light border-primary" alt="Card image" style="width:100%;">
         </div>
         <div class="col-6">
            <form action="/showrooms/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf
               <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label bg-primary text-white">ID Mobil :</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control mb-3 mt-3 btn-outline-primary text-dark" name="id" value="{{ $post->id }}" readonly>
                  </div>
                </div>
               <div class="mb-3">
                  <span class="fw-bold text-primary">user_id</span>
                  <input type="text" class="form-control mb-3 mt-3 btn-outline-primary text-dark" name="user_id" value="{{ $post->user_id }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold text-primary">Owner</span>
                  <input type="text" class="form-control mb-3 mt-3 btn-outline-primary text-dark" value="{{ $post->name }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold text-primary">Brand</span>
                  <input type="text" class="form-control mb-3 mt-3 btn-outline-primary text-dark" name="owner" value="{{ $post->owner }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold text-primary">Tanggal Beli</span>
                  <input type="text" class="form-control mb-3 mt-3 btn-outline-primary text-dark" name="brand" value="{{ $post->brand }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold text-primary">Tanggal Beli</span>
                  <input type="text" class="form-control mb-3 mt-3 btn-outline-primary text-dark" name="purchase_date" value="{{ $post->purchase_date }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold text-primary">Deskripsi</span>
                  <textarea class="form-control mb-3 mt-3 text-dark" value="" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
               </div>
               <div class="mb-3">
                  @if($post->image)
                     <img src="../../assets/images/{{ $post->image }}" class="form-control bg-light border-primary" alt="Card image" style="width:100%;">
                  @else
                     <img class="img-preview img-fluid mb-3 col-sm-5">
                     <span class="fw-bold text-primary">Foto</span>
                  @endif
                  <input type="file" class="form-control mb-3 mt-3" name="image" value="{{ $post->name }}" readonly>
               </div>
               <div class="mb-3 mt-5 mb-3">
                <span class="fw-bold text-primary mt-3 mb-3">Status Pembayaran</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status"value="Lunas">
                    <label class="form-check-label">
                        Lunas
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="Belum-Lunas">
                    <label class="form-check-label">
                      Belum Lunas
                    </label>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary w-30 mt-5 mb-3">Update</button>
         </div>
         </form>
      </div>
      </div>
   </section>
</section>
@endsection
