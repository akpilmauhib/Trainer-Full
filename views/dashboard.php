        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                List Trainer Coaching <?php echo $this->session->userdata('email'); ?>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="card">
                <div class="card-header">
                    <div>
                        <a class=" btn btn-success" href="<?= base_url('Dompdf/pdf') ?>"><i class="fas fa-print "></i> Cetak XLS</a>
                        <a class=" btn btn-primary" href="<?= base_url('Tambah/tambahdata') ?>"><i class="fas fa-users"></i> Tambah Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dashboard as $dt) : {
                            ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $dt->nama_lengkap ?></td>
                                        <td><?= $dt->jenis_kelamin ?></td>
                                        <td><?= $dt->agama ?></td>
                                        <td><?= $dt->no_hp ?></td>
                                        <td><?= $dt->email ?></td>
                                        <td><?= $dt->alamat ?></td>
                                        <td>
                                            <div class="">
                                                <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                    <div class="modal-area-button">
                                                        <a href="<?= base_url('Update/editdata/' . $dt->id_member) ?>"><i class="fas fa-edit "></i></a>
                                                        <a data-toggle="modal" data-target="#PrimaryModalalert"><i class="fas fa-trash "></i></a>
                                                    </div>
                                                </div>
                                                <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                                <p>Yakin Ingin Menghapus Data Ini?</p>
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <a class="btn btn-md btn-primary" href="<?= base_url('Hapus/hapusdata/' . $dt->id_member) ?>">Tetap Hapus</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>