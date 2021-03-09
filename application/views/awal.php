<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="<?= base_url() ?>assets/material-pro/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?= base_url() ?>assets/material-pro/assets/plugins/jquery/jquery.min.js"></script>

<body>
    <select name="" id="provinsi">
        <option value="">pilih..</option>
        <option value="11">Aceh</option>
    </select>
    <select name="" id="kabupaten">
        <option value="">pilih..</option>
    </select>
</body>
<script src="<?= base_url()?>database/try.json"></script>
<script>
                $("#provinsi").change(function() {
                var id = $(this).val();
                $.ajax({
                    data:{
                        modul:'kabupaten',
                        id:id
                    },
                    success:function(respond){
                        $("#kabupaten").html(respond);
                    }
                })
            });
</script>

</html>