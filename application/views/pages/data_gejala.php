<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="page-title">Langkah 2 dari 2</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Diagnosa</li>
        </ol>

    </section>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->


    <section class="content container-fluid">
        <?php if (isset($_GET['error'])) : _notif($this->session->flashdata($_GET['error']));
        endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <h5 class="card-title">Silahkan pilih gejala yang anda alami :</h5>
                    <div class="table-responsive">
                        <?= form_open('Diagnosa/naive_bayes/' . $id) ?>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <table class="table table-striped">
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($gejala->result() as $p) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama ?></td>
                                        <td>
                                            <select name="status_<?= $p->id ?>" id="status_<?= $p->id ?>" class="form-control" style="margin-bottom:5px;">
                                                <option value="Tidak Ada">Tidak Ada</option>
                                                <option value="Ada">Ada</option>
                                            </select>
                                            <!-- <label>
                                                <input name="status_<?= $p->id ?>" id="status_<?= $p->id ?>" type="radio" value="Ada" />
                                                Ada </label>
                                            <label>
                                                <input name="status_<?= $p->id ?>" id="status_<?= $p->id ?>" type="radio" value="Tidak Ada" />
                                                Tidak Ada </label> -->

                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="form-group" align="right">
                            <button class="btn btn-md btn-primary" type="submit" value="submit"><i class="mdi mdi-check-circle"> </i>Simpan</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>