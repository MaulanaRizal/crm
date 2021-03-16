var daftar;
$('#daftar').ready(function(){
    daftar = document.getElementById('activityContent');
});
$('#instruksi').click(function() {
    var show = "<form action='' class='form-material'><label for='subjek'>Subjek</label><input class='form-control' type='text' name='' id='subjek'><label for='deskripsi'>Deskripsi</label><textarea class=form-control  class=form-control name='' id='deskripsi' cols='' 30'' rows='' 3''></textarea><div class=from-group><label for=''>Tenggang Waktu</label><input type='datetime-local' class=form-control name='' id=''></div><label for=''>Prioritas</label><select name='' id='' class='form-control'><option value='Rendah'>Rendah</option><option value='Normal'>Normal</option><option value='Tinggi'>Tinggi</option></select></form><br><br><a href='#' onclick='submitInstuksi()' class='btn-xs btn-primary'>Submit</a>";
    // console.log('instruksi');
    $('#activityContent').html(show);
    return false;
});
$('#daftar').click(function() {
    var show = "<table class='table'><thead><tr><th>#</th><th>Informasi</th></tr></thead><tbody><td><i class='fas fa-sticky-note fa-2x'></i></td><td></td></tbody></table>";
    console.log('instruksi');
    $('#activityContent').html(show);
    return false;
});
$('#telepon').click(function() {
    var show = "<form action=' class='form-material'><label for='deskripsi'>Deskripsi</label><textarea class='form-control' name='deskripsi' id='deskripsi' cols='30' rows='3'></textarea><label for='jangka'>Jangka Waktu</label><input class='form-control' type='datetime-local' name='janka' id='jangka'><label for='penerima'>Penerima</label><input type='text' class='form-control' name=' id='penerima'><label for='tujuan'>Tujuan</label><select class='form-control' name='tujuan' id='tujuan'><option value='Masuk'>Masuk</option><option value='Keluar'>Keluar</option></select><br><br><button class='btn-xs btn-primary' id='submitTelepon '>Submit</button></form></div>";
    // console.log('instruksi');
    $('#activityContent').html(show);
    return false;
});

