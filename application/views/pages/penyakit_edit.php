<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Ubah Data Penyakit</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Penyakit</li>
        </ol>

    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <?= form_open('Penyakit/penyakit_update') ?>
                    <h5 class="card-title mb-0">Form Ubah Data Penyakit</h5>
                    <hr>
                    <div class="form-group mt-3">
                        <label>Penyakit</label>
                        <input type="hidden" name="id" value="<?= $penyakit->id ?>">
                        <input type="text" class="form-control" name="nama" value="<?= $penyakit->nama ?>">
                        <?= form_error('nama', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label>Definisi</label>
                        <input type="text" class="form-control" name="definisi" value="<?= $penyakit->definisi ?>">
                        <?= form_error('definisi', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label>Penyebab</label>
                        <input type="text" class="form-control" name="penyebab" value="<?= $penyakit->penyebab ?>">
                        <?= form_error('penyebab', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label>Solusi</label>
                        <input type="text" class="form-control" name="solusi" value="<?= $penyakit->solusi ?>">
                        <?= form_error('solusi', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group" align="right">
                        <a href="<?= base_url('Penyakit') ?>" class="float-right btn btn-md btn-dark"><i
                                class="mdi mdi-arrow-left-bold-circle"> </i>Kembali</a>
                        <button class="btn btn-md btn-primary" type="submit" value="submit"><i
                                class="mdi mdi-check-circle"> </i>Simpan</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>