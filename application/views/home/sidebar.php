<aside class="main-sidebar horizontal dark-bg">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <?php
            if ($this->session->userdata('status') == 'Login') {
            ?>
                <li> <a href="<?= base_url('Gejala') ?>"> <i class="fa fa-th"></i> <span>Gejala</span></a> </li>
                <li> <a href="<?= base_url('Penyakit') ?>"> <i class="fa fa-th"></i> <span>Penyakit</span></a> </li>
                <li> <a href="<?= base_url('Pasien') ?>"> <i class="fa fa-th"></i> <span>Data Pasien</span></a> </li>
            <?php } ?>
            <li> <a href="<?= base_url('Diagnosa') ?>"> <i class="fa fa-th"></i> <span>Konsultasi</span></a> </li>
        </ul>
        <!-- sidebar-menu -->
    </section>
</aside>