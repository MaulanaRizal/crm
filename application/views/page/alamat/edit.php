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
                <?php if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                // var_dump($alamat)
                ?>
                <div class="row d-flex justify-content-center">

                    <div class="card col-lg-8 ">
                        <div class="card-body">
                            <div class="text-center">
                                <h3> Form Tambah Alamat Baru</h3>
                                <span>Masukan data alamat baru.</span>
                            </div>
                            <hr>
                            <form action="<?= base_url('alamat/update/' . $alamat[0]->ID_ADDRESS) ?> " method="post">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 text-right control-label col-form-label">Nama Lengkap*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="nama" value="<?= $alamat[0]->NAMA ?>" placeholder="Nama lengkap...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pelanggan" class="col-sm-3 text-right control-label col-form-label">Pelanggan*</label>
                                    <div class="col-sm-7">
                                        <select class="select2" style="width: 100%" id=pelanggan name=pelanggan required>
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
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori" class="col-sm-3 text-right control-label col-form-label">Kategori*</label>
                                    <div class="col-sm-7">
                                        <select required id="kategori" class="form-control" name='kategori'>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Billing">Billing</option>
                                            <option value="Shipping">Shipping</option>
                                            <option value="Link">Link</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tipe" class="col-sm-3 text-right control-label col-form-label">Tipe*</label>
                                    <div class="col-sm-7">
                                        <div class="demo-radio-button">
                                            <?php if ($alamat[0]->TIPE == 'Terminating') : ?>
                                                <input required checked name=tipe value="Terminating" type="radio" id="terminating" />
                                                <label for="terminating">Terminating</label>
                                                <input required name="tipe" name="tipe" value="Originating" type="radio" id="originating" />
                                                <label for="originating">Origninating</label>
                                            <?php else : ?>
                                                <input required name=tipe value="Terminating" type="radio" id="terminating" />
                                                <label for="terminating">Terminating</label>
                                                <input required checked name="tipe" name="tipe" value="Originating" type="radio" id="originating" />
                                                <label for="originating">Origninating</label>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="koordinat" class="col-sm-3 text-right control-label col-form-label">Koordinat</label>
                                    <div class="col-sm-7">
                                        <input type="text" id=koordinat class="form-control" name=koordinat id="koordinat" value="<?= $alamat[0]->KORDINAT ?>" placeholder="Koordinat alamat...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sbu" class="col-sm-3 text-right control-label col-form-label">SBU*</label>
                                    <div class="col-sm-7">
                                        <select required select class='select2' style="width: 100%" name="sbu" id="sbu" class="form-control" required>
                                            <option value="" disabled selected>Select</option>
                                            <?php foreach ($sbus as $sbu) : ?>
                                                <?php if ($sbu->ID_SBU == $alamat[0]->CABANG_SBU) : ?>
                                                    <option selected value="<?= $sbu->ID_SBU ?>"><?= $sbu->SBU_REGION ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $sbu->ID_SBU ?>"><?= $sbu->SBU_REGION ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="provinsi" class="col-sm-3 text-right control-label col-form-label">Provinsi*</label>
                                    <div class="col-sm-7">
                                        <select required class='select2' style="width: 100%" name="provinsi" id="provinsi" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <?php foreach ($prov as $provinsi) : ?>
                                                <?php if ($provinsi->id == $alamat[0]->PROVINSI) : ?>
                                                    <option selected value="<?= $provinsi->id ?>"><?= $provinsi->name ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $provinsi->id ?>"><?= $provinsi->name ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <p id=kabupaten></p> -->
                                <div class="form-group row">
                                    <label for="kabupaten" class="col-sm-3 text-right control-label col-form-label">Kabupaten*</label>
                                    <div class="col-sm-7">
                                        <select required class='select2' style="width: 100%" name="kabupaten" id="kabupaten" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kecamatan" class="col-sm-3 text-right control-label col-form-label">Kecamatan*</label>
                                    <div class="col-sm-7">
                                        <select required class='select2' style="width: 100%" name="kecamatan" id="kecamatan" onclick="" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jalan" class="col-sm-3 text-right control-label col-form-label">Jalan*</label>
                                    <div class="col-sm-7">
                                        <input required type="text" class="form-control" required name=jalan id="jalan" value="<?= $alamat[0]->JALAN ?>" placeholder="Jalan...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode" class="col-sm-3 text-right control-label col-form-label">Kode Pos</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" required name="telepon" onkeypress="numberInput(event)" id="" placeholder="Nomor telepon yang bisa dihubungi"> -->
                                        <input type="text" class="form-control" name=kode id="kode" value="<?= $alamat[0]->KODE_POST ?>" onkeypress="numberInput(event)" placeholder="Kode pos...">
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
        <script src="<?= base_url() ?>database/wilayah.json"></script>
        <script>
            $(".select2").select2();

            function numberInput(evt) {
                var char = String.fromCharCode(evt.which);
                if (!/[0-9]/.test(char)) {
                    evt.preventDefault();
                }
            }
            
            $(function() {

                var kategori = '<?= $alamat[0]->KATEGORI ?>';
                $('#kategori').val(kategori);

                $.ajaxSetup({
                    type: "POST",
                    url: "<?php echo base_url('alamat/ambil_data') ?>",
                    cache: false,
                });

                $("#provinsi").change(function() {
                    var value = $(this).val();
                    $.ajax({
                        data: {
                            table: 'regencies',
                            column: 'province_id',
                            id: value
                        },
                        success: function(respond) {
                            $("#kabupaten").html(respond);
                            // console.log(respond);
                        }
                    })
                });

                $("#kabupaten").change(function() {
                    var value = $(this).val();
                    $.ajax({
                        data: {
                            table: 'districts',
                            column: 'regency_id',
                            id: value
                        },
                        success: function(respond) {
                            $("#kecamatan").html(respond);
                        }
                    })
                });

            });
        </script>

</body>

</html>