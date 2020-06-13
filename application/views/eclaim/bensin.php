<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Form Input Klaim Bensin</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST" action="<?=base_url() ?>eclaim/simpan_klaim_bensin">
                    <input type="hidden" name="pic" value="<?= $data_user->nik ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tanggal Pengisian</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="date" name="tanggal_pengisian" data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Kode Pom Bensin</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="text" name="kode_spbu"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">KM Awal</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" name="km_awal" type="number"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">KM Akhir</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" name="km_akhir" type="number"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Liter</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="number" name="liter"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Rupiah</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" name="rupiah" type="number"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Upload Struk BBM</label>
                        <div class="controls">
                            <input type="file" name="upload" class="span8 tip" accept=".png, .jpeg, .jpg," required>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary btn-submit"><i class="icon-save"></i> Submit Form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div><!--/.content-->
</div><!--/.span9-->
