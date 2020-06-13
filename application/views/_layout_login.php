<?php
$this->load->view('layout/_layout_header');
$this->load->view('layout/_layout_top_body');
?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="module module-login span4 offset4">
                <form class="form-vertical"  method="POST" action="<?=base_url() ?>auth/cek_login">
                    <div class="module-head">
                        <h3>Sign In</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="number" name="nik" id="inputEmail" placeholder="NIK">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="password" name="password" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="module-foot">
                        <div class="control-group">
                            <div class="controls clearfix">
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/.wrapper-->

<?php
$this->load->view('layout/_layout_footer');
?>