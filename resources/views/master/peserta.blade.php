@extends('layout.main')
@section('title', 'Master Data - Peserta')
@section('content')
<div class="post d-flex flex-column flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-12">
                <div class="card mb-xl-8">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-4 mb-1">ISI KONTEN</span>
                        </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-js')
<!-- contoh javascript -->
<script src="{{ env('APP_URL') }}/assets/js/bla/bla/bla.js"></script>
@endsection