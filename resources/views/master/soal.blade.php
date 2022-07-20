@extends('layout.main')
@section('title', 'Master Data - Soal')
@section('content')
<div class="post d-flex flex-column flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-12">
                <div class="card mb-xl-8">
                        {{-- <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-4 mb-1">Halaman Tambah Soal</span>
                        </h3> --}}
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center mb-5">
                                    <h3 class="heading-section">Daftar Soal</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-wrap">
                                        <table class="table">
                                          <thead class="thead-dark">
                                            <tr>
                                                <th></th>
                                              <th>no.</th>
                                              <th>Soal</th>
                                              <th>Pilihan 1</th>
                                              <th>Pilihan 2</th>
                                              <th>Pilihan 3</th>
                                              <th>Pilihan 4</th>
                                              <th>Kunci Jawaban</th>
                                              <th>Aksi</th>
                                              <th></th>
                                              {{-- <th>&nbsp;</th> --}}
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr class="alert" role="alert">
                                                <th></th>
                                              <th scope="row">001</th>
                                              <td>Mark</td>
                                              <td>Otto</td>
                                              <td>markotto@email.com</td>
                                              <td>markotto@email.com</td>
                                              <td>markotto@email.com</td>
                                              <td>markotto@email.com</td>
                                              
                                              {{-- <td>
                                                  <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                              </a>
                                              </td> --}}
                                            </tr>
                                            
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css-tabel')
<link href="{{ env('APP_URL') }}/assets/css/tabel/style-tabel.css" rel="stylesheet" type="text/css" />
@endsection

@section('script-js')
<script src="{{ env('APP_URL') }}/assets/js/tabel/jquery.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/tabel/popper.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/tabel/bootstrap.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/js/tabel/main.js"></script>
<!-- contoh javascript -->
{{-- <script src="{{ env('APP_URL') }}/assets/js/bla/bla/bla.js"></script> --}}
@endsection