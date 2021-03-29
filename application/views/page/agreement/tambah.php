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
                            <li class="breadcrumb-item active">Tambah Agreement</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('agreement/insert') ?>" method="post" >
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
                                                    <select name="crm_status" style="width:100%">
                                                        <option>Draft</option>
                                                        <option>Ulasan Pelanggan</option>
                                                        <option>Tinjauan Hukum</option>
                                                        <option>Final</option>
                                                        <option>Kadaluarsa</option>
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
                                            <h6 class="card-subtitle">Agreement</h6>
                                            <h4 class="card-title">New Agreement</h4>
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
                                        <label for="agreement_date" class="col-md-4 text-right control-label">Tanggal Agreement <span style="color: red;">*</span></label>
                                        <div class='col-md-6 p-0'>
                                            <input required name=agr_date type="date" data-date-format="MM/DD/YYYY" class="form-control" id="agreement_date")>
                                            <small style="color: red;" id=agreement_date-alert></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pelanggan" class="col-md-4 text-right control-label">Pelanggan<span style="color: red;">*</span></label>
                                        <div class="col-md-6 p-0">
                                            <select required name='agr_pelanggan' class="select2" style="width: 100%" id=pelanggan name=pelanggan onvalid="this.setCustomValidity('Form Pelanggan belum diisi')">
                                                <option value="" disabled selected>Select</option>
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
                                            <small style="color: red;" id=pelanggan-alert></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_mulai" class="col-md-4 text-right control-label">Tanggal Mulai <span style="color: red;">*</span></label>
                                        <input required name='agr_mulai' type="date" class="col-md-6 form-control" id="tanggal_mulai" >
                                        <small style="color: red;" id=tanggal_mulai-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_selesai" class="col-md-4 text-right control-label">Tanggal Selesai <span style="color: red;">*</span></label>
                                        <input required name='agr_selesai' type="date" class="col-md-6 form-control" id="tanggal_selesai" onvalid="this.setCustomValidity('Form Agreement Date belum diisi')">
                                        <small style="color: red;" id=tanggal_selesai-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row offset-md-3">
                                        <input id="isRenewal" name="isRenewal" type="checkbox">
                                        <label for="isRenewal" class="col-md-6 control-label">Pebaruhan Otomatis</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="billing_agreement" class="col-md-4 text-right control-label">Tipe Billing Agreement <span style="color: red;">*</span></label>
                                        <select required name='agr_bill' class="col-md-6 form-control" id="billing_agreement" onvalid="this.setCustomValidity('Form Tipe Billing Agreement belum diisi')" >
                                            <option value='' selected="">Choose...</option>
                                            <option value="1">jumlah penuh</option>
                                            <option value="2">prorasi</option>
                                        </select>
                                        <small style="color: red;" id=billing_agreement-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cut_off" class="col-md-4 text-right control-label">Tanggal Pemutusan</label>
                                        <input name='agr_cut' type="date" class="col-md-6 form-control" id="cut_off" onvalid="this.setCustomValidity('Form Tanggal Pemutusan wajib diisi')">
                                    </div>
                                    <div class="form-group row">
                                        <!-- kosong -->
                                        <label for="billing_type" class="col-md-4 text-right control-label">Jenis Pembayaran <span style="color: red;">*</span></label>
                                        <select required name='agr_bill_type' class="col-md-6 form-control" id="billing_type">
                                            <option selected value="">Choose...</option>
                                            <option value="1">Prabayar</option>
                                            <option value="2">Pascabayar</option>
                                        </select>
                                        <small style="color: red;" id=billing_type-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="periode_type" class="col-md-4 text-right control-label">Tipe Periode <span style="color: red;">*</span></label>
                                        <select name='agr_period' class="col-md-6 form-control" id="periode_type">
                                            <option selected value="">Choose...</option>
                                            <option value="1">Bulanan</option>
                                            <option value="2">Tahunan</option>
                                        </select>
                                        <small style="color: red;" id=periode_type-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_perode" class="col-md-4 text-right control-label">Jumlah Periode <span style="color: red;">*</span></label>
                                        <input required name='agr-period-jml' type="number" min="1" class="col-md-3 form-control" id="jumlah_perode">
                                        <small style="color: red;" id=jumlah_perode-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Faktur" class="col-md-4 text-right control-label">Tipe Faktur <span style="color: red;">*</span></label>
                                        <select required name='agr_faktur' class="col-md-3 form-control" id="Faktur">
                                            <option selected value="">Choose...</option>
                                            <option value="1">Standar</option>
                                            <option value="2">Dipersemakan</option>
                                        </select>
                                        <small style="color: red;" id=Faktur-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jangka_waktu" class="col-md-4 text-right control-label">Jangka Waktu Pembayaran <span style="color: red;">*</span></label>
                                        <div class="col-md-3 p-0">
                                            <select required class="select2" style="width: 100%" id=jangka_waktu name=agr_waktu>
                                                <option value="" disabled selected>Select</option>
                                                <option value="5 Hari">5 Hari</option>
                                                <option value="7 Hari">7 Hari</option>
                                                <option value="10 Hari">10 Hari</option>
                                                <option value="30 Hari">30 Hari</option>
                                            </select>
                                        </div>
                                        <small style="color: red;" id=jangka_waktu-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="task_agreement" class="col-md-4 text-right control-label">Isi Agreement <span style="color: red;">*</span></label>
                                        <input required type="text" name='agr_isi' class="col-md-6 form-control" id="task_agreement">
                                        <small style="color: red;" id=task_agreement-alert class='offset-md-4'></small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hukuman" class="col-md-4 text-right control-label">Hukuman</label>
                                        <textarea maxlength="1000" name="agr_hukuman" class="col-md-6 form-control" id='hukuman' cols="70" rows="10"></textarea>
                                        <small class='offset-md-4'>Sisa karakter : <span id=char-hukuman>1000</small>
                                    </div>
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h4 class="card-title">Detail Penagihan</h4>
                                        </div>  
                                    </div>
                                    <div class="form-group row">
                                        <label for="task_agreement" class="col-md-4 text-right control-label">Isi Agreement <span style="color: red;">*</span></label>
                                        <input required type="text" name='agr_isi' class="col-md-6 form-control" id="task_agreement">
                                        <small style="color: red;" id=task_agreement-alert class='offset-md-4'></small>
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
                                        <textarea class=form-control class=form-control name="" id="deskripsi" cols="30" rows="3"></textarea>
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
                document.getElementById("name").focus();
            };
        })(), true);
    </script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>