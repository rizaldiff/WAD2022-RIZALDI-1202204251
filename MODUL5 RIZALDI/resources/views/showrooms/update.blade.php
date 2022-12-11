@extends('layouts.main')
@include('partials.navbar')
@section('container')

<section>
   <section class="container mt-5">
      <div class="row">
         <div class="col-6">

            <h3 class="fw-bold">{{ $post->name}}</h3>
            <p class="fst-italic text-secondary">Detail Mobil {{ $post->name }}</p>
               <img src="../../assets/images/{{ $post->image }}" class="form-control bg-light border-dark" alt="Card image" style="width:100%;">
         </div>
         <div class="col-6">
            <form action="/showrooms/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div class="mb-3">
                  <span class="fw-bold ">Jenis Mobil</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" value="{{ $post->name }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Nama Pemilik</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="owner" value="{{ $post->owner }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Merk</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="brand" value="{{ $post->brand }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Tanggal Beli</span>
                  <input type="text" class="form-control mb-3 mt-3 text-dark" name="purchase_date" value="{{ $post->purchase_date }}" readonly>
               </div>
               <div class="mb-3">
                  <span class="fw-bold">Deskripsi</span>
                  <textarea class="form-control mb-3 mt-3 text-dark" value="" name="description" id="" cols="30" rows="10">{{ $post->description }}</textarea>
               </div>
               <div class="mb-3">
                  <span class="fw-bold ">Foto</span>
                  <input type="file" class="form-control mb-3 mt-3" name="image" value="{{ $post->name }}" required>
               </div>
               <div class="mb-3 mt-5 mb-3">
                <span class="fw-bold mt-3 mb-3">Status Pembayaran</span>
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
               <button type="submit" class="btn btn-primary w-30 mt-5 mb-3">Simpan</button>
         </div>
         </form>
      </div>
      </div>
   </section>
</section>
@endsection
