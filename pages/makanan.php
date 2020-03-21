<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to CodeIgniter</title>
</head>

<body>

    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-fw"></i> INPUT MAKANAN
                    <div class="pull-right">
                        <div class="btn-group">
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="<?php echo base_url() ?>welcome/save_makanan" enctype="multipart/form-data" accept-charset="utf-8" method="post">
                                    <div class="form-group">
                                        <label>Kode Makanan</label>
                                        <input class="form-control" name="id" type="number">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Makanan</label>
                                        <input class="form-control" name="nama" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga </label>
                                        <input class="form-control" name="harga" type="number">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Makanan</label>
                                        <input class="form-control" name="foto" type="file">
                                    </div>
                                    <input type="submit" class="btn btn-default" name="submit" value="kirim">

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        <!-- ================ start footer Area ================= -->
    </div>

</body>

</html>