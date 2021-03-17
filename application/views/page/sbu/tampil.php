<?php $this->load->view('template/head'); ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->
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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">SBU</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->


                <div class="row d-flex justify-content-center">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahMenu"><i class="fa fa-plus"></i> Tambah</button>
                                <h3>Daftar SBU</h3>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="myTable">
                                        <thead>
                                            <tr>
                                                <th width=50>#</th>
                                                <th>Wilayah SBU</th>
                                                <th width=500>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $num = 1;
                                            foreach($sbu as $data){ ?>
                                            <tr>
                                                <td><?= $num ?></td>
                                                <td><?= $data->SBU_REGION ?></td>
                                                <td><?= $data->DESKRIPSI ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $data->ID_SBU;?>"><i class="fa fa-trash"></i></a>
                                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal_edit<?=$data->ID_SBU?>"><i class="fa fa-info"></i></a>
                                                </td>
                                            </tr>
                                            <?php 
                                            $num++;
                                            }?>
                                        </tbody>
                                    </table>
                                    <?php echo $this->pagination->create_links(); ?>
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

        <!-- Modal Tambah-->
            <div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Tambah Data SBU</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form novalidate class="item" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Wilayah SBU:</label>
                                    <input type="text" class="form-control" id="recipient-name1" name="sbu_region">
                                    <span id="sbu_error" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Deskripsi:</label>
                                    <textarea class="form-control" rows=6 id="message-text1" name="deskripsi"></textarea>
                                    <span id="deskripsi_error" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" name="tambah" id="tambah" class="btn btn-primary">Simpan&nbsp;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal tambah -->
            </div>
            <!-- modal edit -->
            <?php foreach($sbu as $data){ ?>
            <div class="modal fade" id="modal_edit<?= $data->ID_SBU; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Edit Data SBU</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="<?= base_url('sbu/ubah') ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Wilayah SBU:</label>
                                    <input type="text" class="form-control" name="sbu_region" value="<?= $data->SBU_REGION ?>">
                                    <span id="sbu_error" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Deskripsi:</label>
                                    <textarea class="form-control" rows=6 name="deskripsi"><?= $data->DESKRIPSI ?></textarea>
                                    <span id="deskripsi_error" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id_sbu" value="<?php echo $data->ID_SBU?>">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="edit" id="edit">Simpan&nbsp;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- end modal edit -->

            <!-- modal hapus -->
            <?php foreach($sbu as $data){ ?>
        <div class="modal fade" id="modal_hapus<?= $data->ID_SBU; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('sbu/hapus')?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus!</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_sbu" value="<?php echo $data->ID_SBU?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php } ?>
            <!-- end modal hapus -->

        <?php $this->load->view('template/jquery'); ?>
        <script type="text/javascript">
            $(document).ready(function(){
                var data = $("#tambahMenu").serialize();
                var url = "sbu/tambah"
                    $.ajax({
                        type:"POST",
                        url:"<?= base_url() ?>"+url,
                        data:dataString,
                        success:function (data){
                            alert(data);
                        }
                    });
            })

            $(document).ready(function(){
                $("#tambah").click(function(e){
                    e.preventDefault();
                    var data = $('.item').serialize();
                    $.ajax({
                        type: 'POST',
                        dataType: "json",
                        url: "<?= base_url('sbu/tambah'); ?>",
                        data: data,
                        success: function(data){
                            if ($.isEmptyObject(data.error)) {
                                location.href = "<?= base_url('sbu'); ?>";
                            }
                            else{
                                $("#sbu_error").html(data.error.sbu_error);
                                $("#deskripsi_error").html(data.error.deskripsi_error);
                            }
                        }
                    });
                });
            });



        </script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>