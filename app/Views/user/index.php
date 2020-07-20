<?= $this->extend('user/component/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Personal Users </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <form action="/user/edit" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <!-- pemalsuan dari halaman lain (form hanya bisa diakses oleh halaman ini ) -->
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control" required="" autofocus>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="name" name="name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="name" name="name" class="form-control" required="">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white" type="submit" onclick="return confirm('Are you sure for cancel ?')">Cancel</button>
                            <button class="btn btn-primary" type="submit" value="submit">Edit changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>