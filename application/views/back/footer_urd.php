<p></p>
<footer class="modal-footer navbar-inverse" style="border-radius: 3px; background-color: lightgrey; position: fixed; bottom: 0; width: 100%;">
    <a  style="color: grey; text-decoration: none;">Copyright © <?php echo date('Y'); ?> Masjid An-Nur Politeknik Negeri Malang</a>
  </footer>

    <script src="<?php echo base_url()."assets/jquery/jquery.min.js"?>"></script>
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );  
    $('body .dropdown-toggle').dropdown(); 
    </script>