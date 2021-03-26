<?php $this->load->view('template/head'); ?>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
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
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Update Lead</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Lead</li>
                            <li class="breadcrumb-item active"> Update Lead</li>
                        </ol>
                    </div>
                </div>
                <!-- Start Page Content -->
                <div class="row d-flex justify-content-center">
                    <div class="card col-md-9">
                        <div class="card-body">
                            <form action="<?= base_url('lead/update') ?>" method="post">
                                <input type="hidden" name="id_leads" value="<?php echo $lead->ID_LEADS; ?>">
                                <div class="table-responsive float-right col-lg-9">
                                    <table>
                                        <tr>
                                            <th>Sumber Lead</th>
                                            <th>Peringkat</th>
                                            <th>Status</th>
                                            <th>Pemilik*</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="sumber_lead" id="sumber_lead">
                                                    <option></option>
                                                    <option value="iklan" <?php echo ($lead->SUMBER_LEAD ? 'iklan' : 'selected');?>>Iklan</option>
                                                    <option value="rujukan_karyawan" <?php echo ($lead->SUMBER_LEAD ? 'rujukan_karyawan' : 'selected');?>>Rujukan Karyawan</option>
                                                    <option value="rujukan_eksternal" <?php echo ($lead->SUMBER_LEAD ? 'rujukan_eksternal' : 'selected');?>>Rujukan Eksternal</option>
                                                    <option value="partner" <?php echo ($lead->SUMBER_LEAD ? 'partner' : 'selected');?>>Partner</option>
                                                    <option value="hubungan_masyarakat" <?php echo ($lead->SUMBER_LEAD ? 'hubungan_masyarakat' : 'selected');?>>Hubungan Masyarakat</option>
                                                    <option value="seminar" <?php echo ($lead->SUMBER_LEAD ? 'seminar' : 'selected');?>>Seminar</option>
                                                    <option value="pameran_dagang" <?php echo ($lead->SUMBER_LEAD ? 'pameran_dagang' : 'selected');?>>Pameran Dagang</option>
                                                    <option value="web" <?php echo ($lead->SUMBER_LEAD ? 'web' : 'selected');?>>Web</option>
                                                    <option value="mulut_ke_mulut" <?php echo ($lead->SUMBER_LEAD ? 'mulut_ke_mulut' : 'selected');?>>Dari Mulut ke Mulut</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="rating">
                                                    <option selected></option>
                                                    <option>Hot</option>
                                                    <option>Warm</option>
                                                    <option>Cold</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="status">
                                                    <option selected>Baru</option>
                                                    <option>Dihubungi</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="ti-user"></i>
                                                        </span>
                                                    </div>
                                                    <input readonly type="text" class="form-control" name="pemilik" value="<?= $_SESSION['NAMA_LENGKAP'] ?>">
                                                    <input type="hidden" name="crm_owner" value="<?= $_SESSION['ID_USER'] ?>">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h6 class="card-subtitle">LEAD : ICON+ LEAD</h6>
                                        <h4 class="card-title">Update Lead</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 offset-sm-2 text-center">
                                        <div class="form-group row <?=form_error('topic') ? 'has-error' : null?>">
                                            <label class="control-label text-left col-md-3">Topic*</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Topic" name="topic">
                                                <span class="text-danger"><?=form_error('topic')?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row <?=form_error('nama') ? 'has-error' : null?>">
                                            <label class="control-label text-left col-md-3">Nama*</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama" name="nama">
                                                <span class="text-danger"><?=form_error('nama')?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Pekerjaan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $lead->PEKERJAAN; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row <?=form_error('telepon') ? 'has-error' : null?>">
                                            <label class="control-label text-left col-md-3">Telepon</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Telepon" name="telepon">
                                                <span class="text-danger"><?=form_error('telepon')?></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Coordinat</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Coordinat" name="coordinat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" placeholder="Tulis Alamat Lengkap" name="alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Penawaran</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="Penawaran" name="penawaran">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Penawaran Kembali</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="Penawaran Kembali" name="penawaran_kembali">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="save-button waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="fa fa-save"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4>Aktivitas</h4>
                                <span>
                                    <a href="#" id="daftarActivitasLead">Daftar</a>
                                </span> | 
                                <span>
                                    <a id="tambah-panggilan-telepon" href="#">Tambah Panggilan Telepon</a>
                                </span> | 
                                <span>
                                    <a href="#" id="tambah-tugas">Tambah Tugas</a>
                                </span>
                                <hr>
                                <div id='tableActivityLead'>
                                    <table id='tampilDaftarLead' class='table'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Informasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td><i class='fas fa-sticky-note fa-2x'></i></td>
                                            <td></td>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="form-tambah-panggilan-telepon">
                                    <form action="" class="form-material">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" type="text" name="" id="deskripsi"></textarea>
                                        <label for="jatuh-tempo">Jatuh Tempo</label>
                                        <input class=form-control name="" id="jatuh-tempo" type="date">
                                        <label for="telepon-dengan">Telepon Dengan*</label>
                                        <input type="text" name="telepon-dengan" class="form-control">
                                        <label for="direction">Direction</label>
                                        <select name="direction" id="direction" class="form-control">
                                            <option>Keluar</option>
                                            <option>Masuk</option>
                                        </select>
                                        <br><br>
                                        <button  type="submit" class="btn-xs btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div id="form-tambah-tugas">
                                    <form action="" class="form-material">
                                        <label for="subyek">Subyek*</label>
                                        <input type="text" name="subyek" id="subyek" class="form-control">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                                        <label for="jatuh-tempo">Jatuh Tempo</label>
                                        <input type="date" name="jatuh-tempo" id="jatuh-tempo" class="form-control">
                                        <label for="prioritas">Prioritas</label>
                                        <select name="prioritas" id="prioritas" class="form-control"> 
                                            <option>Low</option>
                                            <option>Normal</option>
                                            <option>High</option>
                                        </select>
                                        <label for="pemilik">Pemilik*</label>
                                        <input readonly type="text" name="pemilik" value="<?= $_SESSION['NAMA_LENGKAP']?>" class="form-control">
                                        <input type="hidden" name="" value="<?= $_SESSION['ID_USER'] ?>">
                                        <br><br>
                                        <button class="btn-xs btn-primary" type="submit">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- footer -->
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <!-- /content -->
    <?php $this->load->view('template/jquery'); ?>
        <script type="text/javascript">
        $('#daftarAktivitasLead').ready(function(){
            // daftar = document.getElementById('activityContent');
            $('#tableActivityLead').show();
            $('#form-tambah-panggilan-telepon').hide();
            $('#form-tambah-tugas').hide();
        });
        $('#tambah-panggilan-telepon').click(function() {
            console.log('tambah-panggilan-telepon');
            // $('#activityContent').html(show);
            $('#tableActivityLead').hide();
            $('#form-tambah-panggilan-telepon').show();
            $('#form-tambah-tugas').hide();
            return false;
        });
        $('#daftarActivitasLead').click(function() {
            console.log('daftarActivitasLead');
            // $('#activityContent').html(show);
            $('#tableActivityLead').show();
            $('#form-tambah-panggilan-telepon').hide();
            $('#form-tambah-tugas').hide();
            return false;
        });
        $('#tambah-tugas').click(function() {
            console.log('tambah-tugas');
            // $('#activityContent').html(show);
            $('#tableActivityLead').hide();
            $('#form-tambah-panggilan-telepon').hide();
            $('#form-tambah-tugas').show();
            return false;
        });
    </script>
</body>
