@extends('layouts.main')
@include('partials.navbar')
@section('container')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <br><br><br><br>
                <h1 class="fw-bold text-left" style="font-size:50px;">Selamat Datang Di ShowRoom Rizaldi</h1>
                <p class="text-secondary">
                    Eos, architecto autem earum amet, temporibus error suscipit laboriosam iure unde eum voluptas omnis.
                </p>
                @auth
                <a href="/showrooms-car" >
                  <input type="submit" name="submit" class="btn btn-primary mt-3" style="padding:10px;width:7em;" value="MyCar" readonly>
                </a>
                @else
                @endauth
                <div class="mt-5">
                    <img src="../assets/images/logo-ead.png" width="10%" alt="ead">
                    <span class="ml-3 text-secondary">Rizaldi_1202204251</span>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="../assets/images/image.png" width="100%" alt="bmw" style="border-radius:10px;">
            </div>
        </div>
    </div>
</section>
@endsection
