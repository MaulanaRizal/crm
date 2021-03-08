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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

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
                                <h3> Form Tambah Alamat Baru</h3>
                                <span>Masukan data alamat baru.</span>
                            </div>
                            <hr>
                            <form action="<?= base_url('pengguna/insert') ?> " method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama Lengkap*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Pelanggan*</label>
                                    <div class="col-sm-7">
                                        <select class="select2" style="width: 100%">
                                            <option disabled selected>Select</option>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Kategori*</label>
                                    <div class="col-sm-7">
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Billing">Billing</option>
                                            <option value="Shipping">Shipping</option>
                                            <option value="Link">Link</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Tipe*</label>
                                    <div class="col-sm-7">
                                        <div class="demo-radio-button">
                                            <input name="tipe" type="radio" id="terminating" />
                                            <label for="terminating">Termnating</label>
                                            <input name="tipe" type="radio" id="originating" />
                                            <label for="originating">Origninating</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Koordinat*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">SBU*</label>
                                    <div class="col-sm-7">
                                        <select class='select2'  style="width: 100%" name="" id="" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <?php foreach($sbus as $sbu): ?>
                                                <option value="<?= $sbu->ID_SBU ?>"><?=$sbu->SBU_REGION ?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Provinsi*</label>
                                    <div class="col-sm-7">
                                        <select class='select2'  style="width: 100%" name="" id="" class="form-control">
                                            <option value="" disabled selected>Povinsi</option>                                        
                                            <?php foreach($prov as $provinsi): ?>
                                                <option value="<?= $provinsi->NAMA ?>"><?= $provinsi->NAMA ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Kabupaten*</label>
                                    <div class="col-sm-7">
                                        <select class='select2'  style="width: 100%" name="" id="" class="form-control">
                                            <option value="" disabled selected>Select</option>                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Kecamatan*</label>
                                    <div class="col-sm-7">
                                        <select class='select2'  style="width: 100%" name="" id="" class="form-control">
                                            <option value="" disabled selected>Select</option>                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Jalan*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Kode Pos*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <hr>
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
        <script src="<?= base_url()?>database/wilayah.json"></script>
        <script>
            $(".select2").select2();
        </script>
</body>

</html>