<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Pasien</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Pasien</li>
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
                            <a href="<?= base_url('Diagnosa') ?>" class="float-right btn btn-md btn-info"><i class="mdi mdi-plus-circle"> </i>Diagnosa</a>
                        </nav>
                    </div>

                    <h5 class="card-title">Tabel Pasien</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pasien->result() as $p) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama ?></td>
                                        <td><?= $p->usia ?></td>
                                        <td><?= $p->jenis_kelamin ?></td>
                                        <td>
                                            <a href="<?= base_url('Pasien/pasien_detail/' . $p->id) ?>" class="btn btn-success">Detail</a>
                                            <a href="<?= base_url('Pasien/hapus/' . $p->id) ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>