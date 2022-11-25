<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Gejala</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Gejala</li>
        </ol>

    </section>

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <section class="content container-fluid">
        <?php if (isset($_GET['notif'])) : _notif($this->session->flashdata($_GET['notif']));
        endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <a href="<?= base_url('Gejala/gejala_add') ?>" class="float-right btn btn-md btn-info"><i
                                    class="mdi mdi-plus-circle"></i>Tambah
                                Data Gejala</a>
                        </nav>
                    </div>
                    <h5 class="card-title">Tabel Gejala</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gejala</th>
                                    <th>Kode</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($gejala->result() as $p) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p->nama ?></td>
                                    <td><?= $p->kode ?></td>
                                    <td>
                                        <a href="<?= base_url('Gejala/gejala_edit/' . $p->id) ?>"
                                            class="btn btn-warning rounded-pill " title="Ubah Data">Ubah</a>
                                        <a href="<?= base_url('Gejala/gejala_delete/' . $p->id) ?>"
                                            onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?');"
                                            class="btn btn-danger rounded-pill " title="Hapus Data">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>