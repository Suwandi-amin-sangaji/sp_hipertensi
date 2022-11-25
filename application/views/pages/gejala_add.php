<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Tambah Data Gejala</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Add Gejala</li>
        </ol>

    </section>
    <!-- End Bread crumb and right sidebar toggle -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <?= form_open('Gejala/gejala_add_act') ?>
                    <h5 class="card-title mb-0">Form Tambah Data Gejala</h5>
                    <hr>
                    <div class="form-group mt-3">
                        <label>Gejala</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Gejala">
                        <?= form_error('nama', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label>Kode</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode">
                        <?= form_error('kode', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group" align="right">
                        <a href="<?= base_url('Gejala') ?>" class="float-right btn btn-md btn-dark"><i
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