        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0 text-dark">
                                Edit Data Trainer Coaching
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline12-list">
                                <div class="sparkline12-hd">
                                </div>
                                <hr>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="all-form-element-inner">
                                                    <?php foreach ($tbl_member as $data) { ?>
                                                        <form action="<?= base_url('Update/prosesubahdata') ?>" method="POST">
                                                            <input type="hidden" class="form-control" value="<?= $data->id_member ?>" name="id_member" hidden />
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Nama Lengkap<code>*</code></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <input type="text" class="form-control" name="nama_lengkap" value="<?= $data->nama_lengkap ?>" required autofocus maxlength="50" onkeyup="this.value = this.value.toUpperCase();" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Jenis Kelamin<code>*</code></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <select class="form-control" name="jenis_kelamin" required maxlength="200" placeholder="">
                                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                                            <option value="Perempuan">Perempuan</option>
                                                                        </select><br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Agama<code>*</code></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <input type="text" class="form-control" name="agama" value="<?= $data->agama ?>" required maxlength="200" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Nomor Telepon<code>*</code></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <input type="text" class="form-control" name="no_hp" value="<?= $data->no_hp ?>" required maxlength="200" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Email<code>*</code></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <input type="text" class="form-control" name="email" value="<?= $data->email ?>" required maxlength="200" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Alamat<code>*</code></label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <input type="text" class="form-control" name="alamat" value="<?= $data->alamat ?>" required maxlength="200" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <div class="modal-bootstrap shadow-inner mg-tb-30 responsive-mg-b-0">
                                                                    <div class="modal-area-button">
                                                                        <a class="btn btn-md btn-danger" href="<?= base_url('Dashboard') ?>">Kembali</a>
                                                                        <a class="btn btn-md btn-primary" href="<?= base_url('Update/prosesubahdata') ?>" data-toggle="modal" data-target="#PrimaryModalalert">Simpan Perubahan</a>
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
                                                                                <!-- <h2>Yakin !</h2> -->
                                                                                <p>Pastikan semua data sudah terisi dengan benar!</p>
                                                                                <!-- <code>Data yang sudah disimpan tidak dapat diubah.</code> -->
                                                                            </div>
                                                                            <div class="modal-footer text-center">
                                                                                <button class="btn btn-md btn-primary" type="submit">Tetap Simpan</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    <?php  } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>