<?php $this->load->view('template/head'); ?>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
    <?php $this->load->view('template/navbar'); ?>
    <?php $this->load->view('template/sidenav'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Tambah Pengguna</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="breadcrumb-item">Pengguna</li>
                            <li class="breadcrumb-item active">Tambah Pengguna</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

                <div class="row d-flex justify-content-center">
                         <?php if (!empty($_SESSION['message'])) { ?>
                            <div class="alert alert-danger">
                            <strong>Gagal!</strong><?= $_SESSION['message'] ?>
                            </div>
                        <?php } unset($_SESSION['message']);?>
                    <div class="card col-lg-8 ">
                        <div class="card-body">
                            <div class="text-center">
                            <h3> Form Tambah Pengguna Baru</h3>
                            <span >Masukan data pengguna baru untuk memberikan hak akses pada sistem.</span>
                            </div>
                            <hr>
                                <form action="<?= base_url('pengguna/insert')?> " method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama Lengkap <span class='require'>*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 text-right control-label col-form-label">Telepon <span class='require'>*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name="telepon" onkeypress="numberInput(event)" id="" placeholder="Nomor telepon yang bisa dihubungi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">Role <span class='require'>*</span></label>
                                    <div class="col-sm-4">
                                    <select class="form-control" required name="role" required>
                                            <option value="">Pilih Role...</option>
                                            <?php foreach($roles as $row) {?>
                                                <option value='<?= $row->ID_ROLE ?>'><?= $row->CRM_ROLE; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">SBU <span class='require'>*</span></label>
                                    <div class="col-sm-4">
                                        <?php //var_dump($sbu)?> 
                                    <select class="form-control"required name="sbu">
                                            <option value="">Pilih SBU...</option>
                                            <?php foreach($sbu as $row) {?>
                                                <option value="<?= $row->ID_SBU ?>" ><?= $row->SBU_REGION; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 text-right control-label col-form-label">Email <span class='require'>*</span></label>
                                    <div class="col-sm-5">
                                        <input type="input" required name="email" class="form-control" id="" placeholder="Email">
                                    </div>
                                    <span class='p-t-10'>@iconplus.com</span>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 text-right control-label col-form-label">Password <span class='require'>*</span></label>
                                    <div class="col-sm-7">
                                        <input type="password" required name="password" minlength="8" maxlength="15" class="form-control" id="" placeholder="password">
                                        <small class="form-text text-muted">masukan password minimal 8 karakter dan maksimal 15 karakter.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-7">
                                        <div class="checkbox checkbox-success">
                                            <input id="status" name="status" type="checkbox">
                                            <label for="status">Pengguna masih aktif</label>
                                        </div>
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


function numberInput(evt) {
	var char = String.fromCharCode(evt.which);
	if (!/[0-9]/.test(char)) {
		evt.preventDefault();
	}
}

</script>
</html>