
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html"><?= APP_TITLE ?></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <?php 
                        if ($this->session->userdata('nik'))
                        { ?>
                        <ul class="nav pull-right">
                            <li><a href="#"><?= $data_user->nik ?> - <?= $data_user->nama_lengkap ?> (<?= $data_user->jabatan ?> - <?= $data_user->divisi ?>) </a></li>
                            <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="text-danger icon-off"></i></a></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->