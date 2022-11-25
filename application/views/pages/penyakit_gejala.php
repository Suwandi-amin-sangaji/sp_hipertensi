    <div class="content-wrapper full-wide">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="page-title">Data Gejala Pada Penyakit : <?= $gejala_id->nama ?></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"><i class="fa fa-dashboard"></i> Penyakit</li>
            </ol>

        </section>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <?php
                        if ($gejala_id->gejala_id) {
                            $gp = $this->m_vic->edit_data(['penyakit_id' => $gejala_id->id], 'gejala_bobot');
                        ?>
                            <h5 class="card-title mb-0">Data gejala pada penyakit : <p class="text-danger">
                                    <?= $gejala_id->nama ?></p>
                            </h5>

                            <hr>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gejala</th>
                                        <th>Kode</th>
                                        <th>Bobot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($gp->result() as $p) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $p->gejala_nama ?></td>
                                            <td><?= $p->gejala_kode ?></td>
                                            <td><?= $p->bobot ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                        ?>
                            <?= form_open('Penyakit/penyakit_gejala_act') ?>
                            <input type="hidden" name="id" value="<?= $gejala_id->id ?>">
                            <h5 class="card-title mb-0">Form Tambah Data Gejala Pada Penyakit : <?= $gejala_id->nama ?>
                            </h5>
                            <hr>
                            <small class="text-danger">* Silahkan isi nilai bobot untuk gejala yang ingin anda tambahkan
                                sebagai gejala penyakit <?= $gejala_id->nama ?></small>
                            <?php foreach ($gejala->result() as $g) : ?>
                                <div class="form-group mt-3">
                                    <label><?= $g->nama ?> Kode : <?= $g->kode ?></label>
                                    <input type="text" class="form-control" name="bobot_<?= $g->id ?>" value="0">
                                    <?= form_error('nama', '<small><span class="text-danger">', '</span></small>'); ?>
                                </div>
                            <?php
                            endforeach; ?>
                            <div class="form-group" align="right">
                                <a href="<?= base_url('Penyakit') ?>" class="float-right btn btn-md btn-dark"><i class="mdi mdi-arrow-left-bold-circle"> </i>Kembali</a>
                                <button class="btn btn-md btn-primary" type="submit" value="submit"><i class="mdi mdi-check-circle"> </i>Simpan</button>
                            </div>
                            <?= form_close() ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>