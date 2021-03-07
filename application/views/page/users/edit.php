<?php $this->load->view('template/head'); ?>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
        <?php $this->load->view('template/navbar'); ?>
        <?php $this->load->view('template/sidenav'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Edit Pengguna</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="breadcrumb-item">Pengguna</li>
                            <li class="breadcrumb-item active">Edit Pengguna</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <?php foreach ($user as $data) {
                } ?>
                <div class="row d-flex justify-content-center">
                    <?php if (!empty($_SESSION['message'])) { ?>
                        <div class="alert alert-danger">
                            <strong>Gagal!</strong><?= $_SESSION['message'] ?>
                        </div>
                    <?php }
                    unset($_SESSION['message']); ?>
                    <div class="card col-lg-8 ">
                        <div class="card-body">
                            <div class="text-center">
                                <h3> Form Tambah Pengguna Baru</h3>
                                <span>Mengubah data pengguna yang sudah tersedia.</span>
                            </div>
                            <hr>
                            <form action="<?= base_url('pengguna/update/'.$id)?>" method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama Lengkap*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna" value="<?= $data->NAMA_LENGKAP ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 text-right control-label col-form-label">Telepon*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name="telepon" onkeypress="numberInput(event)" id="" placeholder="Nomor telepon yang bisa dihubungi" value="<?= $data->TELEPON ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">Role*</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" required name="role" required>
                                            <option value="">Pilih Role...</option>
                                            <?php foreach ($roles as $row) { ?>
                                                <?php if ($data->ID_ROLE == $row->ID_ROLE) { ?>
                                                    <option selected value='<?= $row->ID_ROLE ?>'><?= $row->CRM_ROLE; ?></option>
                                                <?php } else { ?>
                                                    <option value='<?= $row->ID_ROLE ?>'><?= $row->CRM_ROLE; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">SBU*</label>
                                    <div class="col-sm-4">

                                        <select class="form-control" required name="sbu">
                                            <option value="">Pilih SBU...</option>
                                            <?php foreach ($sbu as $row) {
                                                if ($row->ID_SBU == $data->ID_SBU) { ?>
                                                    <option selected value="<?= $row->ID_SBU ?>"><?= $row->SBU_REGION; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?= $row->ID_SBU ?>"><?= $row->SBU_REGION; ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                    <div class="col-sm-7">
                                        <input type="email" required readonly="true" name="email" class="form-control" id="" placeholder="Email" value="<?= $data->CRM_EMAIL ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 text-right control-label col-form-label">Password*</label>
                                    <div class="col-sm-7">
                                        <input type="password" required name="password" minlength="8" maxlength="15" class="form-control" id="" placeholder="password" >
                                        <small class="form-text text-muted">masukan password minimal 8 karakter dan maksimal 15 karakter.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-7">
                                    <?php if($data->CRM_STATUS==1) {?>
                                        <div class="checkbox checkbox-success">
                                            <input id="status" checked name="status" type="checkbox">
                                            <label for="status">Pengguna masih aktif</label>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="checkbox checkbox-success">
                                            <input id="status" name="status" type="checkbox">
                                            <label for="status">Pengguna masih aktif</label>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-7">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
        </div>
        <?php $this->load->view('template/jquery'); ?>
</body>
<script>
    var input = document.getElementById('password');

    input.onKeyUp = function() {
        // validate 8 character lenght
        if (input.value.length >= 8) {

        }
    };

    function numberInput(evt) {
        var char = String.fromCharCode(evt.which);
        if (!/[0-9]/.test(char)) {
            evt.preventDefault();
        }
    }
</script>

</html>