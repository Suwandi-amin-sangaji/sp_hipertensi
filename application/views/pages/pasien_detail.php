<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Detail Pasien</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Detail Pasien</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <?php if (isset($_GET['notif'])) : _notif($this->session->flashdata($_GET['notif']));
        endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <a href="<?= base_url('Pasien') ?>" class="float-right btn btn-danger"><i class="mdi mdi-arrow-left-bold-circle"> </i>Kembali</a>
                        </nav>
                    </div>

                    <br>
                    <div class="alert alert-success mb-5" role="alert">
                        <h4 class="alert-heading">Hasil Pengujian Menggunakan Algoritma Naive Bayes</h4>
                        <p>Data Pribadi Pasien :</p>
                        <hr>
                        <font style="margin-left: 1cm;">Nama : <?= $pasien->nama ?></font><br>
                        <font style="margin-left: 1cm;">Usia : <?= $pasien->usia ?> Tahun</font><br>
                        <font style="margin-left: 1cm;">Jenis Kelamin : <?= $pasien->jenis_kelamin ?>
                        </font>
                        <hr>
                        <div class="row">
                            <div class="col-6" style="margin-left: 0.5cm;">
                                <p>Gejala-Gejala Yang Dialami Pasien :</p>
                                <hr>
                                <ol style=" margin-left: 0.5cm">
                                    <?php
                                    foreach ($gejala->result() as $g) :
                                    ?>
                                        <li><?= $g->gejala_nama ?></li>
                                    <?php endforeach ?>
                                </ol>
                            </div>
                            <div class="col-6" style="margin-left: 0.5cm;">
                                <hr>
                                <p>Hasil Uji Sistem :</p>
                                <hr>

                                <table class="table table-bordered" border="2">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Penyakit</th>
                                            <th>Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $p_nilai = explode(',', $pasien->array_nilai);
                                        $p_id = explode(',', $pasien->array_id);
                                        for ($i = 0; $i < count($p_nilai); $i++) {
                                            $name = $this->db->select('nama')->get_where('penyakit', ['id' => $p_id[$i]])->row();
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $name->nama ?></td>
                                                <td><?= $p_nilai[$i] ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-6" style="margin-left: 0.5cm;">
                                <hr>
                                <p>Solusi :</p>
                                <hr>
                                <strong><?= $pasien->solusi ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>