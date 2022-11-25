<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Hasil Diagnosa</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Hasil Diagnosa</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <?php if (isset($_GET['notif'])) : _notif($this->session->flashdata($_GET['notif']));
        endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">

                    <br>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Hasil Diagnosa</h4>
                        <p>Berdasarkan Hasil Diagnosa Sistem, Pasien Dengan Data Berikut :</p>
                        <hr>
                        <font style="margin-left: 1cm;">Nama : <?= $pasien->nama ?></font><br>
                        <font style="margin-left: 1cm;">Usia : <?= $pasien->usia ?> Tahun</font><br>
                        <font style="margin-left: 1cm;">Jenis Kelamin : <?= $pasien->jenis_kelamin ?></font>
                        <hr>
                        <p class="mb-0">Dengan Kemungkinan Sebesar
                            <strong><?= number_format((float)$pasien->nilai_diagnosa, 2, '.', '') ?>%</strong>
                            Menderita Penyakit <strong><?= $pasien->penyakit ?></strong>
                        </p>
                        <hr>
                        <p class="mb-0">Definisi Penyakit :
                            <strong><?= $pasien->definisi ?></strong>
                        </p>
                        <hr>
                        <p class="mb-0">Penyebab :
                            <strong><?= $pasien->penyebab ?></strong>
                        </p>
                        <hr>
                        <p class="mb-0">Solusi :
                            <strong><?= $pasien->solusi ?></strong>
                        </p>
                    </div>
                    <a href="<?= base_url('Gejala') ?>" class="float-left btn btn-danger"><i class="mdi mdi-arrow-left-bold-circle"> </i>Kembali</a>
                    <a href="<?= base_url('Pasien/pasien_detail/' . $pasien->id) ?>" class="btn btn-success">Detail</a>
                </div>
                <!-- column -->
            </div>
        </div>
    </section>
</div>