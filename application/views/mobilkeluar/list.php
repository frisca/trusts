<?php $this->load->view("script_header")?>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php $this->load->view('header');?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_sidebar.html -->
                <?php $this->load->view('menu');?>
                <!-- partial:partials/_sidebar.html -->
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Mobil Keluar</h4>
                                    <hr>
                                    <a href="<?php echo base_url("mobilkeluar/add")?>">
                                        <button type="button" class="btn btn-primary" style="margin-bottom:1rem;">
                                            Tambah
                                        </button>
                                    </a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nomor Polisi</th>
                                                <th>Mobil</th>
                                                <th>Tangga Keluar</th>
                                                <th>Km Awal</th>
                                                <th>Tujuan</th>
                                                <th>Driver</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Admin -->
                                            <?php
                                                foreach($mobilkeluar->data as $value) {
                                                    if($this->session->userdata("role") == "Admin") {
                                            ?>
                                            <tr id="<?php echo $value->out_no?>">
                                                <?php 
                                                    foreach($cars->data as $car){
                                                        if($car->car_no == $value->car_no){
                                                ?>
                                                <td>
                                                    <input type="button" class="btn btn-info btn-sm view_mobilkeluar" value="<?php echo $car->no_plat?>" id="<?php echo $value->out_no; ?>">
                                                </td>
                                                <td>
                                                    <?php echo $car->model?>
                                                </td>
                                                <?php 
                                                        }
                                                    } 
                                                ?>
                                                <td><?php echo date("d-m-Y", strtotime($value->out_dt));?></td>
                                                <td><?php echo $value->km_awal?> KM</td>
                                                <td><?php echo $value->tujuan?></td>
                                                <?php 
                                                    foreach($users->data as $user){
                                                        if($user->user_id == $value->user_id){
                                                ?>
                                                <td>
                                                    <?php echo $user->username?>
                                                </td>
                                                <?php 
                                                        }
                                                    } 
                                                ?>
                                                <td><?php echo $value->status?></td>
                                                <td><?php echo $value->progress?></td>
                                                <td style="width:21%">
                                                    <?php if($value->progress == "In Progress" && $value->status == "Request"){ ?>
                                                        <a href="<?php echo base_url("mobilkeluar/edit/".$value->out_no)?>" style="color:transparent">
                                                            <button type="button" class="btn btn-success icon-btn">
                                                                <i class="mdi mdi-table-edit"></i>
                                                            </button>
                                                        </a>
                                                    <?php } ?>

                                                    <?php if($value->progress == "Reject" && $value->status == "Ready"){ ?>
                                                        <button type="button" class="btn btn-danger icon-btn remove-mobilkeluar">
                                                            <i class="mdi mdi-delete"></i>
                                                        </button>
                                                    <?php } ?>

                                                    <?php if($value->progress == "Approve" && $value->status == "In Use" && $this->session->userdata("role") == "Admin"){ ?>
                                                        <a href="<?php echo base_url("mobilkeluar/lacak/".$value->out_no);?>">
                                                            <button type="button" class="btn btn-warning icon-btn lacak-mobilkeluar">
                                                                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                                                            </button>
                                                        </a>
                                                    <?php } ?>

                                                    <?php if($value->progress == "In Progress" && $value->status == "Request" && $this->session->userdata("role") == "Admin"){ ?>
                                                        <button type="button" class="btn btn-info icon-btn approve">
                                                            <i class="mdi mdi-check menu-icon"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger icon-btn reject">
                                                            <i class="mdi mdi-close menu-icon"></i>
                                                        </button>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <!-- End Admin -->

                                            <!-- User -->
                                            <?php
                                                foreach($mobilkeluar->data as $value) {
                                                    if($this->session->userdata("role") == "Driver" && $value->user_id == $this->session->userdata('user_id')) {
                                            ?>
                                            <tr id="<?php echo $value->out_no?>">
                                                <?php 
                                                    foreach($cars->data as $car){
                                                        if($car->car_no == $value->car_no){
                                                ?>
                                                <td>
                                                    <input type="button" class="btn btn-info btn-sm view_mobilkeluar" value="<?php echo $car->no_plat?>" id="<?php echo $value->out_no; ?>">
                                                </td>
                                                <td>
                                                    <?php echo $car->model?>
                                                </td>
                                                <?php 
                                                        }
                                                    } 
                                                ?>
                                                <td><?php echo date("d-m-Y", strtotime($value->out_dt));?></td>
                                                <td><?php echo $value->km_awal?> KM</td>
                                                <td><?php echo $value->tujuan?></td>
                                                <?php 
                                                    foreach($users->data as $user){
                                                        if($user->user_id == $value->user_id){
                                                ?>
                                                <td>
                                                    <?php echo $user->nama_lengkap?>
                                                </td>
                                                <?php 
                                                        }
                                                    } 
                                                ?>
                                                <td><?php echo $value->status?></td>
                                                <td><?php echo $value->progress?></td>
                                                <td style="width:21%">
                                                    <?php if($value->progress != "Approve" && $value->status != "In Use"){ ?>
                                                        <a href="<?php echo base_url("mobilkeluar/edit/".$value->out_no)?>" style="color:transparent">
                                                            <button type="button" class="btn btn-success icon-btn">
                                                                <i class="mdi mdi-table-edit"></i>
                                                            </button>
                                                        </a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php
                                                    }
                                                }
                                            ?>
                                            <!-- End User -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <?php $this->load->view("footer")?>
        <!-- partial -->
    </div>
<?php $this->load->view("script_footer");?>
<div class="modal fade" id="mobilKeluarModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Lihat Mobil Keluar</h4>
        </div>
        <div class="modal-body">
            <!-- Place to print the fetched phone -->
            <div id="mobilKeluar_result"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
