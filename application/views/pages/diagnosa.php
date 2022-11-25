<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Konsultasi</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Konsultasi</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <?php if (isset($_GET['notif'])) : _notif($this->session->flashdata($_GET['notif']));
        endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-12">

                            <br>
                            <h2 style="text-align: center;">Pada Halaman Ini Sistem Akan Mendiagnosa Penyakit
                                Hipertensi Apa, Yang Anda Derita Secara Otomatis Berdasarkan Gejala-gejala Yang Anda
                                Alami</h2>
                            <br><br>
                            <div align="center">
                                <a href="<?= base_url('Diagnosa/data_pasien') ?>" class="btn btn-lg btn-primary"><i class="mdi mdi-hospital"></i> Konsultasi</a><br> <br>
                                <small>* Kilk Tombol Konsultasi Untuk Memulai Tahapan Diagnosa Penyakit
                                    Hipertensi</small>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>