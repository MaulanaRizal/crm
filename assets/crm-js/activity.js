// var daftar;
$('#daftar').ready(function(){
    // daftar = document.getElementById('activityContent');
    $('#tableActivity').show();
    $('#formActivity').hide();
    $('#formTelepon').hide();

});
$('#instruksi').click(function() {
    console.log('instruksi');
    // $('#activityContent').html(show);
    $('#tableActivity').hide();
    $('#formActivity').show();
    $('#formTelepon').hide();

    return false;
});
$('#daftar').click(function() {
    console.log('daftar');
    // $('#activityContent').html(show);
    $('#tableActivity').show();
    $('#formActivity').hide();
    $('#formTelepon').hide();

    return false;
});
$('#telepon').click(function() {
    console.log('daftar');
    // $('#activityContent').html(show);
    $('#tableActivity').hide();
    $('#formActivity').hide();
    $('#formTelepon').show();
    return false;
});

