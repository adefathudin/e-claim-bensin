<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?=base_url() ?>auth/logout">Logout <i class="fas fa-fw fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<!--/.container-->
</div>
<!--/.wrapper-->
<script src="<?= base_url() ?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/scripts/common.js" type="text/javascript"></script>

<script>
    $('#dataTable').DataTable();
</script>

</body>
</html>