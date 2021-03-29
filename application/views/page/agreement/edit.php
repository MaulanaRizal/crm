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
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Tambah Agreement</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Agreement</li>
                            <li class="breadcrumb-item active">Edit Agreement</li>
                        </ol>
                    </div>
                </div>
                <!-- Start Content -->

                <?php if (!empty($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('agreement/insert') ?>" method="post">
                                    <div class="table-responsive float-right col-lg-6">
                                        <table>
                                            <tr>
                                                <th>Status*</th>
                                                <th>SBU Owner</th>
                                                <th>Owner *</th>
                                                <th>Deskrisi</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php $satus = ['Draft','Ulasan Pelanggan','Tinjauan Hukum','Final','Kadaluarsa'] ?>
                                                    <select name="crm_status" style="width:100%">
                                                    <?php foreach($satus as $sts): ?>
                                                    <?php if($sts == $agreement[0]->CRM_STATUS): ?>
                                                        <option selected ><?= $sts ?></option>
                                                    <?php else: ?>
                                                        <option><?= $sts ?></option>
                                                    <?php endif ?>
                                                    <?php endforeach ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" readonly value="<?= $_SESSION['SBU_REGION'] ?>">
                                                    <input type="hidden" name="crm_sbu" value="<?= $_SESSION['ID_SBU'] ?>">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" readonly value="<?= $_SESSION['NAMA_LENGKAP'] ?>">
                                                    <input type="hidden" name="crm_owner" value="<?= $_SESSION['ID_USER'] ?>">
                                                    <!-- <select name='crm_owner' id="">
                                                    <option value="<?= $_SESSION['ID_USER'] ?>"><?= $_SESSION['NAMA_LENGKAP'] ?></option>
                                                </select> -->
                                                </td>
                                                <td>
                                                    <input name='crm_deskrip' style="width:100%" type="text" value="">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="d-flex p-t-20 col-md-5 no-block align-items-center">
                                        <div>
                                            <h6 class="card-subtitle">Form Agreement</h6>
                                            <h4 class="card-title">Edit Agreement <?= $agreement[0]->NO_AGREEMENT ?></h4>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h4 class="card-title">Summary</h4>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="agreement_id" class="col-md-4 text-right control-label">Agreement ID</label>
                                        <input type="text" class="col-md-6 form-control" id="agreement_id" readonly>
                                    </div> -->

                                    <div class="form-group row">
                                        <label for="agreement_date" class="col-sm-4 text-right control-label">Tanggal Agreement <span style="color: red;">*</span></label>
                                        <div class='col-sm-6 p-0'>
                                            <input value='<?= $agreement[0]->TANGGAL_AGREEMENT ?>' required name=agr_date type="date" data-date-format="MM/DD/YYYY" class="form-control" id="agreement_date" ')">
                                            <small style="color: red;" id=agreement_date-alert></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pelanggan" class="col-sm-4 text-right control-label">Pelanggan<span style="color: red;">*</span></label>
                                        <div class="col-sm-6 p-0">
                                            <select required name=' agr_pelanggan' class="select2" style="width: 100%" id=pelanggan name=pelanggan onvalid="this.setCustomValidity('Form Pelanggan belum diisi')">
                                            <option value="" disabled selected>Select</option>
                                            <?php foreach ($pelanggan as $pel) : ?>
                                                <?php if ($agreement[0]->ID_OPPORTUNITY == $pel->ID_OPPORTUNITY) : ?>
                                                    <option selected value="<?= $pel->ID_OPPORTUNITY ?>"><?= $pel->NO_OPPORTUNITY ?> - <?= $pel->TOPIC ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $pel->ID_OPPORTUNITY ?>"><?= $pel->NO_OPPORTUNITY ?> - <?= $pel->TOPIC ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                            </select>
                                            <small style="color: red;" id=pelanggan-alert></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_mulai" class="col-sm-4 text-right control-label">Tanggal Mulai <span style="color: red;">*</span></label>
                                        <input value="<?= $agreement[0]->TANGGAL_MULAI ?>" required name='agr_mulai' type="date" class="col-sm-6 form-control" id="tanggal_mulai">
                                        <small style="color: red;" id=tanggal_mulai-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_selesai" class="col-sm-4 text-right control-label">Tanggal Selesai <span style="color: red;">*</span></label>
                                        <input value="<?= $agreement[0]->TANGGAL_BERAKHIR ?>" required name='agr_selesai' type="date" class="col-sm-6 form-control" id="tanggal_selesai" onvalid="this.setCustomValidity('Form Agreement Date belum diisi')">
                                        <small style="color: red;" id=tanggal_selesai-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row offset-sm-3">
                                        <?php if (empty($agreement[0]->IS_RENEWAL)) : ?>
                                            <input id="isRenewal" name="isRenewal" type="checkbox">
                                            <label for="isRenewal" class="col-sm-6 control-label">Pebaruhan Otomatis</label>
                                        <?php else : ?>
                                            <input id="isRenewal" name="isRenewal" type="checkbox" checked>
                                            <label for="isRenewal" class="col-sm-6 control-label">Pebaruhan Otomatis</label>
                                        <?php endif ?>
                                    </div>
                                    <div class="form-group row">
                                        <label for="billing_agreement" class="col-sm-4 text-right control-label">Tipe Billing Agreement <span style="color: red;">*</span></label>
                                        <?php $agr_bill = ['Jumlah Penuh', 'Prorasi'] ?>
                                        <select required name='agr_bill' class="col-sm-6 form-control" id="billing_agreement" onvalid="this.setCustomValidity('Form Tipe Billing Agreement belum diisi')">
                                            <option value='' selected="">Choose...</option>
                                            <?php foreach ($agr_bill as $bill) : ?>
                                                <?php if ($agreement[0]->JENIS_TAGIHAN == $bill) : ?>
                                                    <option selected value="<?= $bill ?>"><?= $bill ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $bill ?>"><?= $bill ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <small style="color: red;" id=billing_agreement-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cut_off" class="col-sm-4 text-right control-label">Tanggal Pemutusan</label>
                                        <input value="<?= $agreement[0]->TANGGAL_POTONG ?>" name='agr_cut' type="date" class="col-sm-6 form-control" id="cut_off" onvalid="this.setCustomValidity('Form Tanggal Pemutusan wajib diisi')">
                                    </div>
                                    <div class="form-group row">
                                        <!-- kosong -->
                                        <label for="billing_type" class="col-sm-4 text-right control-label">Jenis Pembayaran <span style="color: red;">*</span></label>
                                        <?php $agr_bill_type = ['Prabayar', 'Pascabayar'] ?>
                                        <select required name='agr_bill_type' class="col-sm-6 form-control" id="billing_type">
                                            <option selected value="">Choose...</option>
                                            <?php foreach ($agr_bill_type as $bill_type) : ?>
                                                <?php if ($agreement[0]->JENIS_PEMBAYARAN == $bill_type) : ?>
                                                    <option selected value="<?= $bill_type ?>"><?= $bill_type ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $bill_type ?>"><?= $bill_type ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <small style="color: red;" id=billing_type-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="periode_type" class="col-sm-4 text-right control-label">Tipe Periode <span style="color: red;">*</span></label>
                                        <?php $agr_period = ['Bulanan', 'Tahunan'] ?>
                                        <select name='agr_period' class="col-sm-6 form-control" id="periode_type">
                                            <option selected value="">Choose...</option>
                                            <?php foreach ($agr_period as $period) : ?>
                                                <option selected value="<?= $period ?>"><?= $period ?></option>
                                                <?php if ($agr_period == $period) : ?>
                                                <?php else : ?>
                                                    <option value="<?= $period ?>"><?= $period ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <small style="color: red;" id=periode_type-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_perode" class="col-sm-4 text-right control-label">Jumlah Periode <span style="color: red;">*</span></label>
                                        <input required value="<?= $agreement[0]->PERIODE ?>" name='agr-period-jml' type="number" min="1" class="col-sm-3 form-control" id="jumlah_perode">
                                        <small style="color: red;" id=jumlah_perode-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Faktur" class="col-sm-4 text-right control-label">Tipe Faktur <span style="color: red;">*</span></label>
                                        <?php $agr_faktur = ['Standar', 'Dipersemakan'] ?>
                                        <select required name='agr_faktur' class="col-sm-3 form-control" id="Faktur">
                                            <option selected value="">Choose...</option>
                                            <?php foreach ($agr_faktur as $faktur) : ?>
                                                <?php if ($agreement[0]->TIPE_FAKTUR == $faktur) : ?>
                                                    <option selected value="<?= $faktur ?>"><?= $faktur ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $faktur ?>"><?= $faktur ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <small style="color: red;" id=Faktur-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jangka_waktu" class="col-sm-4 text-right control-label">Jangka Waktu Pembayaran <span style="color: red;">*</span></label>
                                        <div class="col-sm-3 p-0">
                                            <?php $agr_waktu = ['5 Hari', '7 Hari', '10 Hari', '30 Hari'] ?>
                                            <select required class='form-control' style="width: 100%" id=jangka_waktu name=agr_waktu>
                                                <option value="" disabled selected>Select</option>
                                                <?php foreach ($agr_waktu as $waktu) : ?>
                                                    <?php if ($agreement[0]->JANGKA_WAKTU == $waktu) : ?>
                                                        <option selected value="<?= $waktu ?>"><?= $waktu ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $waktu ?>"><?= $waktu ?></option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <small style="color: red;" id=jangka_waktu-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="task_agreement" class="col-sm-4 text-right control-label">Isi Agreement <span style="color: red;">*</span></label>
                                        <input value="<?= $agreement[0]->AGREEMENT_TEKS ?>" required type="text" name='agr_isi' class="col-sm-6 form-control" id="task_agreement">
                                        <small style="color: red;" id=task_agreement-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hukuman" class="col-sm-4 text-right control-label">Hukuman</label>
                                        <textarea maxlength="1000" name="agr_hukuman" class="col-sm-6 form-control" id='hukuman' cols="70" rows="10"><?= $agreement[0]->HUKUMAN ?></textarea>
                                        <small class='offset-sm-4'>Sisa karakter : <span id=char-hukuman><?= 1000-strlen($agreement[0]->HUKUMAN) ?></small>
                                    </div>
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h4 class="card-title">Detail Penagihan</h4>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right control-label">Rekening Bank <span style="color: red;">*</span></label>
                                        <input value="<?= $agreement[0]->AKUN_BANK?>" required type="text" name='rekening' class="col-sm-6 form-control" id="rekening">
                                        <small style="color: red;" id='rekening-alert' class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 text-right control-label">Nomor Rekening Bank <span style="color: red;">*</span></label>
                                        <input value="<?= $agreement[0]->REKENING ?>" required type="text" name='no_rekening' class="col-sm-6 form-control" id="no_rekening">
                                        <small style="color: red;" id="no_rekening-alert" class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row m-b-5">
                                        <label for="" class="col-sm-4 text-right control-label">NPWP<span style="color: red;">*</span></label>
                                        <div class="col-sm-6 p-0">
                                            <select required class="select2" style="width: 100%" id='npwp' name='npwp'>
                                                <option value="" disabled selected>pilih...</option>
                                                <?php foreach ($npwp as $np) : ?>
                                                    <?php if($agreement[0]->NPWP==$np->ID_NPWP): ?>
                                                    <option selected value="<?= $np->ID_NPWP ?>"><?= $np->NO_PAJAK ?> - <?= $np->NAMA_NPWP ?></option>
                                                    <?php else: ?>
                                                    <option value="<?= $np->ID_NPWP ?>"><?= $np->NO_PAJAK ?> - <?= $np->NAMA_NPWP ?></option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <small style="color: red;" id=npwp-alert class='offset-sm-4'></small>
                                    </div>
                                    <div class="form-group row" id="input-npwp"></div>
                                    <div class="form-group row m-b-5">
                                        <label for="" class="col-sm-4 text-right control-label">Alamat Penagihan<span style="color: red;">*</span></label>
                                        <div class="col-sm-6 p-0">
                                            <select required class="select2" style="width: 100%" id='alamat' name='alamat'>
                                                <option value="" disabled selected>pilih...</option>
                                                <?php foreach ($addr as $ad) : ?>
                                                    <?php if($agreement[0]->ALAMAT==$ad->ID_ADDRESS): ?>
                                                    <option selected value="<?= $ad->ID_ADDRESS ?>"><?= $ad->NO_ADDRESS ?> - <?= $ad->NAMA ?></option>
                                                    <?php else:?>
                                                    <option value="<?= $ad->ID_ADDRESS ?>"><?= $ad->NO_ADDRESS ?> - <?= $ad->NAMA ?></option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <small style="color: red;" id=alamat-alert class='offset-sm-4'></small>
                                    </div>
                                    <div id="input-address">
                                    </div>
                                    <button type="submit" class="save-button waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="fa fa-save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h4>Aktivitas</h4>
                                <span>
                                    <a href="#" id="daftar">Daftar</a>
                                </span> |
                                <span>
                                    <a id='instruksi' href="#">Instruksi</a>
                                </span> |
                                <span>
                                    <a href="#" id='telepon'>Telepon</a>
                                </span>
                                <hr>
                                <div id='tableActivity'>
                                    <table id='tampilDaftar' class='table'>
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
                                <div id="formActivity">
                                    <form action="" class="form-material">
                                        <label for="subjek">Subjek</label>
                                        <input class="form-control" type="text" name="" id="subjek">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class=form-control class=form-control name="" id="deskripsi" cols="30" rows="3"><?= $agreement[0]->HUKUMAN ?></textarea>
                                        <div class=from-group>
                                            <label for="">Tenggang Waktu</label>
                                            <input type="datetime-local" class="form-control" name="" id="">
                                        </div>
                                        <label for="">Prioritas</label>
                                        <select name="" id="" class="form-control">
                                            <option value="Rendah">Rendah</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Tinggi">Tinggi</option>
                                        </select>
                                    </form><br><br><a href="#" onclick="submitInstuksi()" class="btn-xs btn-primary">Submit</a>
                                </div>
                                <div id="formTelepon">
                                    <form action="" class="form-material">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="3"></textarea>
                                        <label for="jangka">Jangka Waktu</label>
                                        <input class="form-control" type="datetime-local" name="janka" id="jangka">
                                        <label for="penerima">Penerima</label>
                                        <input type="text" class="form-control" name="" id="penerima">
                                        <label for="tujuan">Tujuan</label>
                                        <select class="form-control" name="tujuan" id="tujuan">
                                            <option value="Masuk">Masuk</option>
                                            <option value="Keluar">Keluar</option>
                                        </select><br><br>
                                        <button class="btn-xs btn-primary" id="submitTelepon ">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
                <div class="row">
                    <div class='col-md-9'>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary float-right">Tambah</button>
                                <h4 class="card-title">Addressing Terminating & Originating</h4>
                                <div class='table-responsive'>
                                    <table class="table striped m-b-20">
                                        <thead>
                                            <tr>
                                                <th width=50>#</th>
                                                <th>Address ID</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Account</th>
                                                <th>Region SBU</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Province</th>
                                                <th>State</th>
                                                <th>Street</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class='card'>
                            <div class="card-body">
                                <button class="btn btn-primary float-right">Tambah</button>
                                <h4 class="card-title">Product Line Item</h4>
                                <div class='table-responsive'>
                                    <table class="table striped m-b-20">
                                        <thead>
                                            <tr>
                                                <th width=50>#</th>
                                                <th>Address ID</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Account</th>
                                                <th>Region SBU</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Province</th>
                                                <th>State</th>
                                                <th>Street</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Container fluid  -->

    <!-- footer -->
    <footer class="footer">
        © 2019 Material Pro Admin by wrappixel.com
    </footer>
    <!-- End footer -->
    <!-- /content -->


    <?php $this->load->view('template/jquery'); ?>
    <script src="<?= base_url('assets/crm-js/activity.js') ?>"></script>
    <script src="<?= base_url('assets/crm-js/agreement.js') ?>"></script>

    <script>
        $(".select2").select2();

        function numberInput(evt) {
            var char = String.fromCharCode(evt.which);
            if (!/[0-9]/.test(char)) {
                evt.preventDefault();
            }
        }
        document.addEventListener('invalid', (function() {
            return function(e) {
                e.preventDefault();
            };
        })(), true);

        $(function() {
            $.ajaxSetup({
                type: "POST",
                cache: false,
            });

            $('#npwp').change(function() {
                var val = $(this).val();
                console.log(val);
                $.ajax({
                    url: "<?php echo base_url('agreement/npwp') ?>",
                    data: {
                        id: val,
                    },
                    success: function(respond) {
                        // $('#input-npwp').html(respond)
                        $('#input-npwp').html(respond);
                    }
                })
            });

            $('#alamat').change(function() {
                var val = $(this).val();
                console.log(val);
                $.ajax({
                    url: "<?php echo base_url('agreement/address') ?>",
                    data: {
                        id: val,
                    },
                    success: function(respond) {
                        // $('#input-npwp').html(respond)
                        $('#input-address').html(respond);
                    }
                })
            });
        });

        $('#npwp').ready(function() {
                $.ajax({
                    url: "<?php echo base_url('agreement/npwp') ?>",
                    data: {
                        id:  <?= $agreement[0]->NPWP ?>,
                    },
                    success: function(respond) {
                        // $('#input-npwp').html(respond)
                        $('#input-npwp').html(respond);
                    }
                })
            });
        
        $('#alamat').ready(function() {
                $.ajax({
                    url: "<?php echo base_url('agreement/address') ?>",
                    data: {
                        id: <?= $agreement[0]->ALAMAT ?>,
                    },
                    success: function(respond) {
                        // $('#input-npwp').html(respond)
                        $('#input-address').html(respond);
                    }
                })
            });

    </script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>