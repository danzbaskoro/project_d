@extends('layout.main')
@section('title', 'Master Data - Tambah Soal')
@section('content')
<div class="post d-flex flex-column flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-12">
                <div class="card mb-xl-8">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-4 mb-1">Halaman Tambah Soal</span>
                        </h3>
                        <div>
                            <form action="#" method="POST" name="form-input-data">
                                <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr height="46">
                                            <td width="10%"> </td>
                                            <td width="25%"> </td>
                                            <td width="65%"><font color="orange" size="2">Form Tambah Soal</font></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td>Formasi</td>
                                        <td><select name="formasi">
                                                <option value="-">- Pilih Formasi -
                                                <option value="Teknik Komputer">Teknik Komputer
                                                <option value="Teknik Informatika">Teknik Informatika
                                                <option value="Teknik Mesin">Teknik Mesin
                                                <option value="Teknik Elektro">Teknik Elektro
                                                <option value="Komputer Akuntansi">Komputer Akuntansi
                                            </select></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td>Jenis Soal</td>
                                        <td><select name="jenis_soal">
                                                <option value="-">- Pilih Jenis Soal -
                                                <option value="Teknik Komputer">Teknik Komputer
                                                <option value="Teknik Informatika">Teknik Informatika
                                                <option value="Teknik Mesin">Teknik Mesin
                                                <option value="Teknik Elektro">Teknik Elektro
                                                <option value="Komputer Akuntansi">Komputer Akuntansi
                                            </select></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td><label for="deskripsi_soal">Deskripsi Soal</label></td>
                                        <td>
                                            <textarea id="deskripsi_soal" name="deskripsi_soal" rows="4" cols="50"></textarea></td>
                                    </tr>
                                    
                                    <tr height="46">
                                        <td> </td>
                                        <td><label for="deskripsi_jawaban">Deskripsi Jawaban</label></td>
                                        <td>
                                            <textarea id="deskripsi_jawaban" name="deskripsi_jawaban" rows="4" cols="50"></textarea></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td>Jawaban Satu</td>
                                        <td><input type="text" name="jawaban_satu" size="25" maxlength="12" /></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td>Jawaban Dua</td>
                                        <td><input type="text" name="jawaban_dua" size="25" maxlength="12" /></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td>Jawaban Tiga</td>
                                        <td><input type="text" name="jawaban_tiga" size="25" maxlength="12" /></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td>Jawaban Empat</td>
                                        <td><input type="text" name="jawaban_empat" size="25" maxlength="12" /></td>
                                    </tr>
                                    <tr height="46">
                                        <td> </td>
                                        <td> </td>
                                        <td><input type="submit" name="Submit" value="Submit">   
                                            <input type="reset" name="reset" value="Cancel"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
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