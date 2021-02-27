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
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Tambah Opportunity</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Opportunity</li>
                            <li class="breadcrumb-item active"> Tambah Opportunity</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <table>
                                        <tr>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>SBU</th>
                                            <th>Owner</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select>
                                                    <option>Jaringan</option>
                                                    <option>Aplikasi</option>
                                                    <option>Administrasi</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select>
                                                    <option>Sedang Berlangsung</option>
                                                    <option>Tertahan</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select disabled="">
                                                    <option selected>Jakarta</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" value="Sigit">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h6 class="card-subtitle">OPPORTUNITY : ICON+ OPPORTUNITY</h6>
                                        <h4 class="card-title">Tambah Opportunity</h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h4 class="card-title">Summary</h4>
                                    </div>
                                </div>
                                <form class="form">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Opportunity ID</label>
                                        <div class="col-10">
                                            <fieldset disabled>
                                                <input type="text" id="disabledTextInput" class="form-control">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Topic</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Pelanggan</label>
                                        <div class="col-10 input-group">
                                            <input class="form-control" type="text">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Tanggal Opportunity</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">tanggal target penjualan</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Tipe Opportunity</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="1">Opportunity Baru</option>
                                                <option value="2">Agreement Tersedia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Tipe Survey</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="1">Jenis Survei</option>
                                                <option value="2">On Desk</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Jangka Waktu Pembelian</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="1">Segera</option>
                                                <option value="2">Kuartal Ini</option>
                                                <option value="3">Kuartal Berikutnya</option>
                                                <option value="4">Tahun Ini</option>
                                                <option value="5">Tidak Diketahui</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Perkiraan Pendapatan</label>
                                        <div class="col-10">
                                            <input class="form-control" id="rupiah1" name="rupiah1" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label">Jumlah Anggaran</label>
                                        <div class="col-10">
                                            <input class="form-control" id="rupiah2" name="rupiah2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Proses Pembelian</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="1">Individu</option>
                                                <option value="2">komersial</option>
                                                <option value="3">Tidak Diketahui</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Deskripsi</label>
                                        <div class="col-10">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Situasi Saat Ini</label>
                                        <div class="col-10">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Kebutuhan Pelanggan</label>
                                        <div class="col-10">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Solusi Yang Diusulkan</label>
                                        <div class="col-10">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <button class="right-side-toggle btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="fa fa-save"></i></button>
                                </form>
                                <h4 class="card-title">Addressing Terminating & Originating</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="" class="table striped m-b-20">
                                        <button class="btn btn-primary float-right">Tambah</button>
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
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="card-title">Product Line Item</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="" class="table striped m-b-20">
                                        <button class="btn btn-primary float-right">Tambah</button>
                                        <thead>
                                            <tr>
                                                <th width=50>#</th>
                                                <th>ID</th>
                                                <th>SLA</th>
                                                <th>Account</th>
                                                <th>Service ID</th>
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Bandwidth</th>
                                                <th>HJT</th>
                                                <th>Price Per Unit</th>
                                                <th>Extended Amount</th>
                                                <th>Opportunity ID</th>
                                                <th>Opportunity ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
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
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 15,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
    <script type="text/javascript">
        var dengan_rupiah1 = document.getElementById('rupiah1');
        dengan_rupiah1.addEventListener('keyup', function(e) {
            dengan_rupiah1.value = formatRupiah(this.value, 'Rp. ');
        });

        var dengan_rupiah2 = document.getElementById('rupiah2');
        dengan_rupiah2.addEventListener('keyup', function(e) {
            dengan_rupiah2.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</body>

</html>