<?php $this->load->view('layout/header'); ?>
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Users</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                    <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                </ol>
            </div>
        </div>
        <!-- Start Page Content -->

        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahMenu"><i class="mdi mdi-account-plus"></i> add user</button>

                <h3>Table User </h3>
                <span>Table kelola user crm icon+</span>
                <hr>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table display table-bordered table-striped">
                        <tr>
                            <th width=50>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>SBU</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rozal</td>
                            <td>Rozal56@mail.com</td>
                            <td>Cawang</td>
                            <td>Sales</td>
                            <td><label class="label label-danger">non-active</label></td>
                            <td>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- End PAge Content -->
    </div>
    <!-- footer -->
    <?php $this->load->view('layout/bottom'); ?>
</div>
<?php $this->load->view('layout/footer'); ?>