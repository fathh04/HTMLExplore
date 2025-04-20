@extends('layout.master')
@section('title', 'Petunjuk Pemakaian')
@section('menuPetunjuk', 'active')

@section('content')
<div class="container my-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Petunjuk Pemakaian</h4>
      </div>
      <div class="card-body">
        <div class="accordion" id="accordionPetunjuk">

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                1. Daftarkan akun anda
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionPetunjuk">
              <div class="accordion-body">
                Lengkapi data-data anda pada form pendaftaran yang telah disediakan
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                2. Login akun anda
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionPetunjuk">
              <div class="accordion-body">
                Masukkan email dan password yang telah terdaftar untuk mengakses media pembelajaran ini.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                3. Tambah kelas
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionPetunjuk">
              <div class="accordion-body">
                Masuk ke kelas anda untuk memulai pembalajaran
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                4. Mulai belajar
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionPetunjuk">
              <div class="accordion-body">
                Mulailah pembelajaran melalui fitur yang telah disediakan
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
