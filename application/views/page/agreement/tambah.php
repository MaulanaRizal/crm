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
                        <h3 class="text-themecolor">Tambah Agreement</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Agreement</li>
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
                                            <th>Status Agreement *</th>
                                            <th>SBU Owner</th>
                                            <th>Owner *</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select>
                                                    <option>Draft</option>
                                                    <option>Ulasan Pelanggan</option>
                                                    <option>Tinjauan Hukum</option>
                                                    <option>Final</option>
                                                    <option>Kadaluarsa</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" value="Jakarta">
                                            </td>
                                            <td>
                                                <input disabled type="text" value="Sigit">
                                            </td>
                                            <td>
                                                <input type="text" value="">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="d-flex no-block align-items-center">
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
                                <form class="form">
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Agreement ID</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname3" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Agreement Date *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="exampleInputuname3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Customer *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname3">
                                                <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Tanggal Mulai *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="exampleInputuname3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Tanggal Selesai *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="exampleInputuname3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Billing Agreement Type *</label>
                                        <div class="col-sm-3">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect1">
                                                <option selected="">Choose...</option>
                                                <option value="1">jumlah penuh</option>
                                                <option value="2">prorasi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Cut Off Date</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname3" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Billing Type *</label>
                                        <div class="col-sm-3">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect1">
                                                <option selected="">Choose...</option>
                                                <option value="1">Prabayar</option>
                                                <option value="2">Pascabayar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Tipe Periode *</label>
                                        <div class="col-sm-3">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect1">
                                                <option selected="">Choose...</option>
                                                <option value="1">Bulan</option>
                                                <option value="2">Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Jumlah Periode *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="exampleInputuname3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Tipe Faktur *</label>
                                        <div class="col-sm-3">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect1">
                                                <option selected="">Choose...</option>
                                                <option value="1">Standar</option>
                                                <option value="2">Dipersemakan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Jangka Waktu Pembayaran *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname3">
                                                <div class="input-group-append">
                                                <button class="btn btn-secondary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Tesk Agreement *</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Penalty</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-2 control-label">Hukuman</label>
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
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
            <!-- End Container fluid  -->

            <!-- footer -->
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
            <!-- End footer -->
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
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>