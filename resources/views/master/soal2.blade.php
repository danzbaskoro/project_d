@extends('layout.main')
@section('title', 'Master Data - Soal2')
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
                                    <h3 class="heading-section">Soal</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-wrap">
                                        <table class="table" >
                                            <tbody id="soal"></tbody>
                                            <form name="form1" method="post" action="#">

                                                {{-- <div id="soal"></div> --}}

                                               

                                        </form>
                                        </table>
                                        {{-- {{ $soals->links() }} --}}
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
    <script src="{{ env('APP_URL') }}/assets/js/soal/soal_1.js"></script>
    <!-- contoh javascript -->
    {{-- <script src="{{ env('APP_URL') }}/assets/js/bla/bla/bla.js"></script> --}}
@endsection
