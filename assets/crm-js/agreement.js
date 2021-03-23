$('.save-button').click(function(){
    // TanggalAgreement
    var val = $('#agreement_date').val();
    if(val==''){
        // console.log('form tidak boleh kosong.')
        $('#agreement_date-alert').html("form tidak boleh kosong.");
    }else{
        $('#agreement_date-alert').hide();
    }
    // Pelanggan
    var val = $('#pelanggan').val();
    // console.log(val)
    if(val==null){
        $('#pelanggan-alert').html("form tidak boleh kosong.");
    }else{
        $('#pelanggan-alert').hide();
    }
    // Tanggal Mulai
    var val = $('#tanggal_mulai').val();
    // console.log(val)
    if(val==''){
        $('#tanggal_mulai-alert').html("form tidak boleh kosong.");
    }else{
        $('#tanggal_mulai-alert').hide();
    }
    // Tanggal Selesai 
    var val = $('#tanggal_selesai').val();
    // console.log('tanggal selesai'+val)
    if(val==''){
        $('#tanggal_selesai-alert').html("form tidak boleh kosong.");
    }else{
        $('#tanggal_selesai-alert').hide();
    }
    // Tipe Billing Agreement
    var val = $('#billing_agreement').val();
    // console.log('billing_agreement ='+val)
    if(val==''){
        $('#billing_agreement-alert').html("form tidak boleh kosong.");
    }else{
        $('#billing_agreement-alert').hide();
    }
    // Jenis Pembayaran
    var val = $('#billing_type').val();
    // console.log('billing_type ='+val)
    if(val==''){
        $('#billing_type-alert').html("form tidak boleh kosong.");
    }else{
        $('#billing_type-alert').hide();
    }
    // Tipe Periode
    var val = $('#periode_type').val();
    // console.log('periode_type ='+val)
    if(val==''){
        $('#periode_type-alert').html("form tidak boleh kosong.");
    }else{
        $('#periode_type-alert').hide();
    }
    // Jumlah Periode
    var val = $('#jumlah_perode').val();
    // console.log('jumlah_perode ='+val)
    if(val==''){
        $('#jumlah_perode-alert').html("form tidak boleh kosong.");
    }else{
        $('#jumlah_perode-alert').hide();
    }
    // Tipe Faktur
    var val = $('#Faktur').val();
    // console.log('Faktur ='+val)
    if(val==''){
        $('#Faktur-alert').html("form tidak boleh kosong.");
    }else{
        $('#Faktur-alert').hide();
    }
    // Jangka Waktu Pembayaran
    var val = $('#jangka_waktu').val();
    // console.log('jangka_waktu ='+val)
    if(val==null){
        $('#jangka_waktu-alert').html("form tidak boleh kosong.");
    }else{
        $('#jangka_waktu-alert').hide();
    }
    // Isi Agreement
    var val = $('#task_agreement').val();
    // console.log('task_agreement ='+val)
    if(val==''){
        $('#task_agreement-alert').html("form tidak boleh kosong.");
    }else{
        $('#task_agreement-alert').hide();
    }
});
// Hukuman
$('#hukuman').keyup(function () {
    var len = $(this).val().length;
    // console.log(len);
    $('#char-hukuman').html(1000 - len);
});
