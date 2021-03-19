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


        <!-- content -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">

                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-sm-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Pengguna</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-sm-7 text-right">
                        <h4 class='text-themecolor d-flex justify-content-end m-t-10'>Periode</h4>
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-info dropdown-toggle m-l-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='ti-settings'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-toggle="modal" data-target="#hapusTahun" href="#">Tambah</a>
                                <a class="dropdown-item" data-toggle="modal" data-target="#tambahTahun" href="#">Hapus</a>
                            </div>
                        </div>
                        <select class='form-control col-md-3 float-right' onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" name="periode" id="">
                            <?php foreach($period as $periode): ?>
                                <?php if ($period == $periode) : ?>
                                    <option selected value="#"><?= $periode ?></option>
                                <?php else : ?>
                                    <option value="<?= base_url('target_tahunan/periode/' . $periode) ?>"><?= $periode ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <!-- Modal Hapus Tahun - -->
                <div class="modal" tabindex="-1" role="dialog" id='tambahTahun'>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Hapus Periode Target Tahunan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('target_tahunan_pusat/delete') ?>" method="post">
                                <div class="modal-body">
                                    <p>Penghapusan ini akanbersifat permanen dan tidak bisa dikembalikan. Apakah anda yakin?</p>
                                    <input required type="checkbox" class='form-control check' name="check" id="check">
                                    <label for="check">Ya, saya yakin.</label><br>
                                    <small id=alert style="color: red;" class="form-control-feedback hide alert-checkbox">checkbox tidak boleh kosong.</small>
                                    <?php if ($this->uri->segment(3) == null) : ?>
                                        <input type="hidden" name="tahun" value="<?= date('Y') ?>">
                                    <?php else : ?>
                                        <input type="hidden" name="tahun" value="<?= $this->uri->segment(3) ?>">
                                    <?php endif ?>
                                </div>
                                <div class="modal-footer">
                                    <!-- <a href="#" class='btn btn-danger'>Hapus</a> -->
                                    <button type="submit" id='hapusPeriode' class="btn btn-danger submit">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal -->


                <!-- Modal Tambah Tahun - -->
                <div class="modal" tabindex="-1" role="dialog" id='hapusTahun'>
                    <div class="modal-dialog" role="document">
                        <form action="<?= base_url('target_tahunan/periode/tambah') ?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Periode Target Tahunan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="yearPicker">Tahun Periode</label>
                                    <input required class='form-control' type="number" value="<?= date('Y') ?>" name="tahun" id="yearPicker">
                                    <hr>
                                    <p>Penambahan periode target tahunan ini akan disesuaikan dengan kondisi Jumlah Sales saat ini. Apakah aperiodenda yakin akan menambahkanp  baru saat ini?</p>
                                    <input required type="checkbox" class='form-control check' name="check" id="check-periode">
                                    <label for="check-periode">Ya, saya yakin.</label><br>
                                    <small style="color: red;" class="form-control-feedback hide alert-checkbox">checkbox tidak boleh kosong.</small>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id='submitPeriode' class="btn btn-info submit">Tambah</button>
                                </div>
                        </form>
                    </div>
                </div>
                <!-- end modal -->
            </div>

            <!-- Start Content -->
            <?php if (!empty($_SESSION['message'])) { ?>
                <?= $_SESSION['message'] ?>
            <?php unset($_SESSION['message']);
            } ?>
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-4 float-right">
                        <div class="input-group">
                            <div class="input-group-append p-b-10">
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="exampleInputuname3">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                <!-- <a href="<?= base_url() ?>pengguna/tambah" class="btn btn-secondary "> <i class="mdi mdi-account-plus"></i> Tambah</a> -->
                                <!-- <a href="<?= base_url() ?>pengguna/tambah" class="btn btn-secondary "> <i class="fa fa-trash"></i> hapus</a> -->
                            </div>
                        </div>
                    </div>
                    <h3>Daftar Target Sales </h3>
                    <span>Daftar target sales periode <?= date('Y') ?> </span>
                    <hr>
                    <div class="table-responsive ">
                        <table class="table striped ">
                            <thead>
                                <tr>
                                    <th width=50>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Pemasukan</th>
                                    <th>Target</th>
                                    <th>Successfull Rate</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1 ?>
                                <?php foreach ($saleses as $sales) : ?>
                                    <tr>
                                        <td><?= $num++ ?></td>
                                        <td><?= $sales->NAMA_LENGKAP ?></td>
                                        <td>
                                            <?php $nominal = 2000000000; ?>
                                            Rp. <?= number_format($nominal, 2, ",", ".") ?>
                                        </td>
                                        <td>
                                            Rp. <?= number_format($sales->ANNUAL_TARGET, 2, ",", ".") ?>
                                        </td>
                                        <td>
                                            92%
                                        </td>
                                        <td><span class='label label-primary align-self-center'>On going</span></label></td>
                                        <td>
                                            <button class='btn btn-info btn-sm' data-target="#editTarget<?= $num ?>" data-toggle="modal" id=""><i class='fa fa-edit fa-sm'></i></button>
                                        </td>
                                    </tr>
                                    <div class="modal" tabindex="-1" role="dialog" id='editTarget<?= $num ?>'>
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Target <?= $sales->NAMA_LENGKAP ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('target_tahunan/insert') ?>" method="post">
                                                    <div class="modal-body">
                                                        <label for="nominal" class="control-label">Nominal Target:</label>
                                                        <input class="rupiah form-control" name='nominal' id="nominal" type="text" id="rupiah" data-a-sign="Rp. " data-a-dec="," data-a-sep=".">
                                                        <input type="hidden" name="sales" value="<?= $sales->ID_USER ?>">
                                                        <input type="hidden" name="tahun" value="<?= date('Y') ?>">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php //echo $this->pagination->create_links(); 
                        ?>
                    </div>
                </div>
            </div>
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
        </div>
        <!-- /content -->
        <?php $this->load->view('template/jquery'); ?>
        <script src="<?= base_url() ?>assets/crm-js/targetTahunan.js"></script>

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>