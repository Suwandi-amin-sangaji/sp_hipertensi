<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper full-wide">
    <!-- Content Header (Page header) -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="chart-box">
                    <div class="row">
                        <?php
                        if ($this->session->userdata('status') == 'Login') {
                        ?>
                            <h1 class="text-center"> Selamat Datang <?php echo $this->session->userdata('name') ?></h1>
                            <div class="col-6 justify-content-center">
                                <img style="margin-left: 25% ;" src="https://www.ramsaysimedarby.co.id/cfind/source/images/jatinegara/image/hypertension-2.png" class="img-fluid" alt="..." width="50%">
                            </div>
                        <?php } else { ?>
                            <h1 class="text-center"> Selamat Datang Di Sistem Pakar Penyakit Hipertensi</h1>
                            <div class="col-6 justify-content-center">
                                <img style="margin-left: 25% ;" src="https://www.ramsaysimedarby.co.id/cfind/source/images/jatinegara/image/hypertension-2.png" class="img-fluid" alt="..." width="50%">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content-wrapper -->