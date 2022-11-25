<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Langkah 1 dari 2</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Diagnosa</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <?= form_open('Diagnosa/data_pasien_act') ?>
                    <h5 class="card-title mb-0">Silahkan isi data berikut :</h5>
                    <hr>
                    <div class="form-group mt-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                        <?= form_error('nama', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label>Umur</label>
                        <input type="number" class="form-control" name="umur" placeholder="Masukkan Umur">
                        <?= form_error('umur', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>
                    <div class="form-group mt-3">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<small><span class="text-danger">', '</span></small>'); ?>
                    </div>

                    <div class="form-group" align="right">
                        <a href="<?= base_url('Penyakit') ?>" class="btn btn-md btn-danger"><i class="fa fa-arrow-circle-o-left"> </i> Kembali</a>
                        <button class="btn btn-md btn-primary" type="submit" value="submit"><i class="mdi mdi-check-circle"> </i>Simpan & Lanjut</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>