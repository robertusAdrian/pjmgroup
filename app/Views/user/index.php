<?= $this->extend('user/component/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->get('level') == 1) : ?>
    <div class="col-lg-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>List Member</h5>
                <div class="ibox-tools">
                    <span class="label label-warning-light pull-right"><?= $count; ?> Members</span>
                </div>
            </div>
            <?php if (session()->getFlashdata('delete')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('delete'); ?>
                </div>
            <?php endif ?>
            <div class="search-form">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." name="keyword" class="form-control input-lg">
                        <div class="input-group-btn">
                            <button class="btn btn-lg btn-primary" type="submit" name="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ibox-content">
                <?php foreach ($item as $row) : ?>
                    <div>
                        <div class="feed-activity-list">

                            <div class="feed-element">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="asset-crud/img/profile_small.jpg">
                                </a>
                                <div class="media-body ">
                                    <form action="/user/<?= $row['id_user']; ?>" method="POST">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-warning btn-circle pull-right" type="submit" onclick="return confirm('Apakah Anda yakin ?');"><i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                    <strong><?= $row['username']; ?></strong> <?= $row['email']; ?><br>
                                    <small class="text-muted"><?= $row['created_at']; ?></small>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button> -->
            </div>
        </div>

    </div>
<?php endif ?>
<!----------------------------------- CHATTING PANEL ---------------------------------------------->
<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Chatting With Admin</h5>
        </div>
        <div class="ibox-content inspinia-timeline">

            <div class="timeline-item">
                <div class="row">
                    <div class="col-xs-3 date">
                        <i class="fa fa-briefcase"></i>
                        6:00 am
                        <br />
                        <small class="text-navy">2 hour ago</small>
                    </div>
                    <div class="col-xs-7 content no-top-border">
                        <p class="m-b-xs"><strong>Meeting</strong></p>
                        <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products. Below please find the current status of the
                            sale.</p>
                        <p><span data-diameter="40" class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,4,7,3,2,9,8,7,4,5,1,2,9,5,4,7,2,7,7,3,5,2</span></p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">

            </div>
        </div>
        <div class="timeline-item">
            <div class="input-group"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Go!
                    </button> </span></div>
        </div>

    </div>
</div>
</div>

<?= $this->endSection(); ?>