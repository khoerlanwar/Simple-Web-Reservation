<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 </body>
</html>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
  <?php foreach ($js as $src) :  ?>
    <script type="text/javascript" src="<?= $src ?>" charset="utf-8"></script>
  <?php endforeach; ?>

  <?php if(isset($app)) { ?>
    <script type="text/javascript" src="<?= $app ?>" charset="utf-8"></script>
  <?php } ?>