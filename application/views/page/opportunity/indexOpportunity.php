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
                        <h3 class="text-themecolor">Opportunity</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Opportunity</li>
                            <li class="breadcrumb-item active">Index Opportunity</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class="btn waves-effect waves-light btn-primary">TAMBAH</a>
                                    <div class="table-responsive">
                                    <table class="table striped m-b-20" id="editable-datatable">
                                        <thead>
                                            <tr>
                                                <th>Opportunity ID</th>
                                                <th>Topic</th>
                                                <th>Customer</th>
                                                <th>Status</th>
                                                <th>SBU Owner</th>
                                                <th>Created On</th>
                                                <th>Action</th>
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
                                                <td>
                                                    <a class="btn waves-effect waves-light btn-info" href="#">EDIT</a>
                                                    <a class="btn waves-effect waves-light btn-danger" href="#">HAPUS</a>
                                                </td>
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
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
        $(function() {
            $('#editable-datatable').DataTable();
        });
   
    //     $(document).ready(function() {
    //     $('#myTable').DataTable();
    //     $(document).ready(function() {
    //         var table = $('#example').DataTable({
    //             "columnDefs": [{
    //                 "visible": false,
    //                 "targets": 2
    //             }],
    //             "order": [
    //                 [2, 'asc']
    //             ],
    //             "displayLength": 25,
    //             "drawCallback": function(settings) {
    //                 var api = this.api();
    //                 var rows = api.rows({
    //                     page: 'current'
    //                 }).nodes();
    //                 var last = null;
    //                 api.column(2, {
    //                     page: 'current'
    //                 }).data().each(function(group, i) {
    //                     if (last !== group) {
    //                         $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
    //                         last = group;
    //                     }
    //                 });
    //             }
    //         });
    //         // Order by the grouping
    //         $('#example tbody').on('click', 'tr.group', function() {
    //             var currentOrder = table.order()[0];
    //             if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
    //                 table.order([2, 'desc']).draw();
    //             } else {
    //                 table.order([2, 'asc']).draw();
    //             }
    //         });
    //     });
    // });
    // $('#example23').DataTable({
    //     dom: 'Bfrtip',
    //     buttons: [
    //         'copy', 'csv', 'excel', 'pdf', 'print'
    //     ]
    // });
        </script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>