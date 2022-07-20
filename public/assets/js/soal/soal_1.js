$(document).ready(function () {
    // $("#btn1").click(function(){
    //   $("#pertanyaan").text("pertanyaan 1 ");
    // });

    $.ajax({ //create an ajax request to display.php
        type: "GET",
        url: "/soal3",

        success: function (response) {
            var res = '';
            // $("#responsecontainer").html(response); 
            var dataset = JSON.parse(response);
            var jumlah = dataset.length;
            for (var i = 0; i < jumlah; i++) {
                var id = dataset[i].id;
                var id_formasi = dataset[i].id_formasi;
                var id_jenis_soal = dataset[i].id_jenis_soal;
                var deskripsi_soal = dataset[i].deskripsi_soal;
                var deskripsi_jawaban = dataset[i].deskripsi_jawaban;
                var jawaban_satu = dataset[i].jawaban_satu;
                var jawaban_dua = dataset[i].jawaban_dua;
                var jawaban_tiga = dataset[i].jawaban_tiga;
                var jawaban_empat = dataset[i].jawaban_empat;

                var res = res + '<input type="hidden" name="' + id_jenis_soal + '" value="' + id_jenis_soal + '">';
                var res = res + '<input type="hidden" name="jumlah" value="">';
                var res = res + '<tr>';
                var res = res + '<td width="17"> <font color="#000000"></font>' + id + '</td>';
                var res = res + '<td><font color="#000000"></font>' + deskripsi_soal + '</td>';
                var res = res + '</tr>';
                var res = res + '<tr>';
                var res = res + '<td height="21"><font color="#000000">&nbsp;</font></td>';
                var res = res + '<td><font color="#000000">A. <input name="pilihan[{{ $s->id }}]" type="radio" value="1">'+jawaban_satu+' </font></td>';
                var res = res + '</tr>';
                var res = res + '<tr>';
                var res = res + '<td><font color="#000000">&nbsp;</font></td><td><font color="#000000">B. <input name="pilihan[{{ $s->id }}]" type="radio"value="2"> '+jawaban_dua+'</font></td>';
                var res = res + '</tr>';

            }

            $("#soal").html("");
            $("#soal").append(res);

            //    alert(jumlah);

        }
    });

});
