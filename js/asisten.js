$(document).ready(function () {
    $('#tabel1').DataTable();
    $('#tabel2').DataTable();
    asisten_data();
    presentase();
});

//--------------------------------------------------------------------------Daftar Nilai Harian
function showNilai(nrp, periode, praktikum) {
    if (nrp == "") {
        document.getElementById("live_data").innerHTML = "<p><b>Masukkan NRP peserta untuk melihat detail nilai...</b> <br>"
                + "<div class='table-responsive'>"
                + "<table class='table table-bordered table-striped' style='width:80%;' id='tabel3' name='tabel3'>"
                + "<tr>"
                + "<th>Pertemuan</th>"
                + "<th>Tugas Pendahuluan</th>"
                + "<th>Tugas Harian</th>"
                + "<th>Tugas Akhir</th>"
                + "<th>Aksi</th>"
                + "</tr>"
                + "<tr>"
                + "<td colspan='5'> Data Tidak Ditemukan</td>"
                + "</tr>"
                + "</table>"
                + "</div></p>";
        return;
    } else {
        $.ajax({
            url: "query/nh_select.php",
            method: "POST",
            data: {nrp: nrp, periode: periode, praktikum: praktikum},
            dataType: "text",
            success: function (data) {
                $('#live_data').html(data);
            }
        });
    }
}

$(document).on('click', '#btn_add', function () {
    var pertemuan = $('#pertemuan').text();
    var nrp = document.getElementById("nrp").value;
    var tp = $('#tp').text();
    var th = $('#th').text();
    var ta = $('#ta').text();
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    if (pertemuan == '') {
        alert("Masukkan Pertemuan Terlebih Dahulu");
        return false;
    }
    if (tp == '') {
        alert("Masukkan Nilai TP Terlebih Dahulu");
        return false;
    }
    if (th == '') {
        alert("Masukkan Nilai TH Terlebih Dahulu");
        return false;
    }
    if (ta == '') {
        alert("Masukkan Nilai TA Terlebih Dahulu");
        return false;
    }
    $.ajax({
        url: "query/nh_insert.php",
        method: "POST",
        data: {pertemuan: pertemuan, tp: tp, th: th, ta: ta, periode: periode, praktikum: praktikum, nrp: nrp},
        dataType: "text",
        success: function (data)
        {
            alert(data);
            showNilai(nrp, periode, praktikum);
        }
    })
});

$(document).on('click', '#btn_delete', function () {
    var id = $(this).data("id5");
    var nrp = document.getElementById("nrp").value;
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    if (confirm("Are you sure you want to delete this?"))
    {
        $.ajax({
            url: "query/nh_delete.php",
            method: "POST",
            data: {id: id},
            dataType: "text",
            success: function (data) {
                alert(data);
                showNilai(nrp, periode, praktikum);
            }
        });
    }
});

function edit_data(id, text, column_name)
{
    $.ajax({
        url: "query/nh_update.php",
        method: "POST",
        data: {id: id, text: text, column_name: column_name},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });
}
$(document).on('blur', '.pertemuan', function () {
    var id = $(this).data("id1");
    var pertemuan = $(this).text();
    edit_data(id, pertemuan, "pertemuan");
});
$(document).on('blur', '.tp', function () {
    var id = $(this).data("id2");
    var tp = $(this).text();
    edit_data(id, tp, "tp");
});
$(document).on('blur', '.th', function () {
    var id = $(this).data("id3");
    var th = $(this).text();
    edit_data(id, th, "th");
});
$(document).on('blur', '.ta', function () {
    var id = $(this).data("id4");
    var th = $(this).text();
    edit_data(id, th, "th");
});

//--------------------------------------------------------------------------Daftar Nilai Harian

//--------------------------------------------------------------------------Daftar Asisten

function asisten_data() {
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    $.ajax({
        url: "query/asisten_select.php",
        method: "POST",
        data: {periode: periode, praktikum: praktikum},
        dataType: "text",
        success: function (data) {
            $('#data_asisten').html(data);
        }
    });
}

function edit_kelas(id, text, column_name)
{
    $.ajax({
        url: "query/asisten_update.php",
        method: "POST",
        data: {id: id, text: text, column_name: column_name},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });
}
$(document).on('blur', '.kelas', function () {
    var id = $(this).data("id3");
    var kelas = $(this).text();
    edit_kelas(id, kelas, "kelas");
});

//--------------------------------------------------------------------------Daftar Asisten

//------------------------------------------------------------------------- Nilai Praktikum

function hitung_nilai()
{
    $('tr').each(function () {
        var sum = 0
        //find the combat elements in the current row and sum it 
        $(this).find('.nil').each(function () {
            var combat = $(this).text();
            if (!isNaN(combat) && combat.length !== 0) {
                sum += parseFloat(combat);
            }
        });
        //set the value of currents rows sum to the total-combat element in the current row
        $('.tot', this).html(sum/5);
    });
}

function presentase() {
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    $.ajax({
        url: "query/presentase.php",
        method: "POST",
        data: {periode: periode, praktikum: praktikum},
        dataType: "text",
        success: function (data) {
            $('#presentase').html(data);
        }
    });
}

function edit_nilai(id, text, column_name)
{
    $.ajax({
        url: "query/nilai_update.php",
        method: "POST",
        data: {id: id, text: text, column_name: column_name},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });
}
$(document).on('blur', '.kls', function () {
    var id = $(this).data("id3");
    var kelas = $(this).text();
    edit_nilai(id, kelas, "kelas");
    hitung_nilai();
});
$(document).on('blur', '.uts', function () {
    var id = $(this).data("id5");
    var uts = $(this).text();
    edit_nilai(id, uts, "uts");
});
$(document).on('blur', '.uas', function () {
    var id = $(this).data("id6");
    var uas = $(this).text();
    edit_nilai(id, uas, "uas");
});
$(document).on('blur', '.pro', function () {
    var id = $(this).data("id7");
    var pro = $(this).text();
    edit_nilai(id, pro, "project");
});
$(document).on('blur', '.abs', function () {
    var id = $(this).data("id8");
    var abs = $(this).text();
    edit_nilai(id, abs, "absen");
});

//------------------------------------------------------------------------- Nilai Praktikum