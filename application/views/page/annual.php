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
                        <h3 class="text-themecolor">Annual</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Annual</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahTarget"><i class="fa fa-plus"></i> add</button>
                        <!-- Start Modal -->
                        <div class="modal fade" id="tambahTarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Tambah Target</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name1">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" id="message-text1"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal -->
                        <h3>Target Table</h3>
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th width=50>#</th>
                                    <th>Period</th>
                                    <th>Target (Rp)</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2016</td>
                                    <td>1.000.000.000</td>
                                    <td><label class="label label-danger">Fail</label></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2017</td>
                                    <td>1.000.000.000</td>
                                    <td><label class="label label-danger">Fail</label></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>1.000.000.000</td>
                                    <td><label class="label label-danger">Fail</label></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>1.000.000.000</td>
                                    <td><label class="label label-danger">Fail</label></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2020</td>
                                    <td>1.000.000.000</td>
                                    <td><label class="label label-warning">Won</label></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2021</td>
                                    <td>1.500.000.000</td>
                                    <td><label class="label label-warning">Won</label></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2022</td>
                                    <td>1.500.000.000</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editTarget"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Modal -->
            <div class="modal fade" id="editTarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name1">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Message:</label>
                                    <textarea class="form-control" id="message-text1"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Sales Overview</h3>
                                        <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline">
                                            <li>
                                                <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i> Product 1</h6>
                                            </li>
                                            <li>
                                                <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Product 2</h6>
                                            </li>
                                            <li>
                                                <h6 class="text-muted  text-warning"><i class="fa fa-circle font-10 m-r-10"></i>Product 3</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="amp-pxl" id=chat style="height: 360px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3>Sales Performances</h3>
                        <hr>
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Offers</th>
                                <th>Successful Rate</th>
                                <th>Target(Rp)</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Indra Rahardi</td>
                                <td>100</td>
                                <td>40,5%</td>
                                <td>500.000.000</td>
                                <td><label class="label label-danger">Faild</label></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rinda Rahardi</td>
                                <td>50</td>
                                <td>80,5%</td>
                                <td>500.000.000</td>
                                <td><label class="label label-warning">Won</label></td>
                            </tr>
                        </table>
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

                var chart2 = new Chartist.Bar('.amp-pxl', {
        labels: ['2016', '2017', '2018', '2019', '2020', '2021', '2022'],
        series: [
            [9, 5, 3, 7, 5, 10, 3],
            [6, 3, 9, 5, 4, 6, 4],
            [8, 7, 6, 3, 5, 6, 10]
        ]
    }, {
        axisX: {
            // On the x-axis start means top and end means bottom
            position: 'end',
            showGrid: false
        },
        axisY: {
            // On the y-axis start means left and end means right
            position: 'start'
        },
        high: '12',
        low: '0',
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });
        </script>

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>