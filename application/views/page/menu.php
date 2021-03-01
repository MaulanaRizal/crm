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
                        <h3 class="text-themecolor">Manage Menu</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Menu</li>
                        </ol>
                    </div>
                </div>

                <!-- START content -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h3>Navigation</h3>
                                <hr>
                                <ul id="myUL">
                                    <li><span class="caret">Beverages</span>
                                        <ul class="nested">
                                            <li>Water</li>
                                            <li>Coffee</li>
                                            <li><span class="caret">Tea</span>
                                                <ul class="nested">
                                                    <li>Black Tea</li>
                                                    <li>White Tea</li>
                                                    <li><span class="caret">Green Tea</span>
                                                        <ul class="nested">
                                                            <li>Sencha</li>
                                                            <li>Gyokuro</li>
                                                            <li>Matcha</li>
                                                            <li>Pi Lo Chun</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahMenu"><i class="fa fa-plus"></i> Tambah</button>

                                <div class="modal fade " id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Tambah Menu</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url() ?>menu/tambah" method="post">
                                                    <div class="form-group">
                                                        <label for="icon" class="control-label">Nama Menu:</label>
                                                        <div class="from-group">
                                                            <select name="icon" name=icon id="icon" class="col-md-3 form-control " onchange="showIcon()">
                                                                <option value="">icon</option>
                                                                <option value="<i class='mdi mdi-clipboard-text'>">Dokumen</option>
                                                                <option value="<i class='mdi mdi-account'>">Akun</option>
                                                                <option value="<i class='fas fa-chart-line'>">Diagram</option>
                                                                <option value="<i class='mdi mdi-settings'>">Gear</option>
                                                            </select>
                                                            &nbsp;
                                                            <input type="text" class="form-control col-md-8" onkeyup="showMenu()" name=menu id="menu">
                                                        </div>
                                                        <br>
                                                        <div class="row form-group justify-content-center">
                                                            <div class="col-md-1 " id="showIcon"></div>
                                                            <p id="showMenu"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link" class="control-label">Link:</label>
                                                        <input type="text" class="form-control" id="link" name="link" onkeyup="showLink()">
                                                        <br>
                                                        <br>
                                                        <div class="row form-group justify-content-center">
                                                            <p class="col-md-12" id="showLink"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Parent Menu:</label>
                                                        <select name="parent" class="form-control" id="">
                                                            <option value="">Pilih parent menu...</option>
                                                        <?php foreach ($menu as $select) { ?>
                                                            <option value="<?= $select->ID_MENU ?>"><?= $select->NAMA_MENU ?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <h3>Table Menu</h3>
                                <hr>
                                <table class="table">
                                    <tr>
                                        <th>#</th>
                                        <th>Menu Name</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    $num = 1;
                                    foreach ($menu as $table) { ?>
                                        <tr>
                                            <td><?= $num ?></td>
                                            <td><a href="#"><?= $table->ICON . " " . $table->NAMA_MENU ?></a></td>
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                            </td>
                                        </tr>
                                    <?php $num++;
                                    } ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <h3>Table Access</h3>
                                <hr>
                                <table class="table ">
                                    <tr>
                                        <th>Menu</th>
                                        <th>Sales</th>
                                        <th>Aktivasi</th>
                                        <th>Adev</th>
                                        <th>Manager</th>
                                        <th>General Manager</th>
                                    </tr>
                                    <tr>
                                        <td>Dashboard</td>
                                        <td>
                                            <input type="checkbox" id="dashboard_sales" checked="">
                                            <label for="dashboard_sales"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="dashboard_aktivasi" checked="">
                                            <label for="dashboard_aktivasi"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="dashboard_adev" checked="">
                                            <label for="dashboard_adev"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="dashboard_manager" checked="">
                                            <label for="dashboard_manager"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="dashboard_gm" checked="">
                                            <label for="dashboard_gm"></label>
                                        </td>
                                    </tr>

                                </table>

                                <form action="">
                                    <input type="checkbox" name="adev" id="adev">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content -->
            </div>

            <!-- footer -->
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
            <!-- end footer -->

            <script>
                var toggler = document.getElementsByClassName("caret");
                var i;

                for (i = 0; i < toggler.length; i++) {
                    toggler[i].addEventListener("click", function() {
                        this.parentElement.querySelector(".nested").classList.toggle("active");
                        this.classList.toggle("caret-down");
                    });
                }

                function showIcon() {
                    var value = document.getElementById('icon').value;

                    document.getElementById('showIcon').innerHTML = value;
                }

                function showMenu() {
                    var value = document.getElementById('menu').value;

                    document.getElementById('showMenu').innerHTML = value;
                }

                function showLink() {
                    var value = document.getElementById('link').value;

                    document.getElementById('showLink').innerHTML = '<?= base_url() ?>' + value;
                }
            </script>
            <?php $this->load->view('template/jquery'); ?>