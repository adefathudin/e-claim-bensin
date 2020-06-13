<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Form Input Klaim Parkir</h3>
            </div>
            <div class="module-body">
                <form class="form-horizontal row-fluid" enctype="multipart/form-data" method="POST" action="<?=base_url() ?>eclaim/simpan_klaim_parkir">
                    <input type="hidden" name="pic" value="<?= $data_user->nik ?>">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tanggal Parkir</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="date" name="tanggal_parkir" data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Tempat</label>
                        <div class="controls">
                            <select name="tempat" class="span8 tip" required>
                                <?php
                                foreach ($data_toko as $toko){
                                echo "<option value='".$toko->kode_toko." - ".$toko->nama_toko."'>".$toko->kode_toko." - ".$toko->nama_toko."</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Jam Masuk</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" name="jam_masuk" type="time"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Jam Keluar</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" name="jam_keluar" type="time"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Rupiah</label>
                        <div class="controls">
                            <input data-title="A tooltip for the input" type="number" name="rupiah"  data-original-title="" class="span8 tip" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Upload Struk Parkir</label>
                        <div class="controls">
                            <input type="file" name="upload" class="span8 tip" accept=".png, .jpeg, .jpg," required>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i> Submit Form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div><!--/.content-->
</div><!--/.span9-->