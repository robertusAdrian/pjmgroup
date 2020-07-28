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
                                    <a href="/user/chatting/<?= $row['id_user']; ?>" type="submit">Chat Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <button class="btn btn-primary btn-block m-t"><i class="fa fa-arrow-down"></i> Show More</button> -->
            </div>
        </div>

    </div>
    <div class="col-lg-8">
    <?php endif ?>
    <!----------------------------------- CHATTING PANEL ---------------------------------------------->
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>History ALL Member Chatting With Admin</h5>
            </div>
            <?php if (session()->getFlashdata('berhasil')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('berhasil'); ?>
                </div>
            <?php endif ?>
            <?php if (session()->getFlashdata('update')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('update'); ?>
                </div>
            <?php endif ?>
            <div class="ibox-content inspinia-timeline">
                <?php foreach ($chatting as $row) : ?>
                    <div class="timeline-item">
                        <div class="row">
                            <div class="col-xs-3 date">
                                <?= $row['created_at']; ?>
                                <i class="fa fa-briefcase"></i>
                                <br />
                            </div>
                            <div class="col-xs-7 content no-top-border">
                                <p class="m-b-xs"><strong><?= $row['username']; ?></strong></p>
                                <p><?= $row['comment']; ?>.</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- <div class="timeline-item">
                <form action="/user/addComment/<?= session()->get('id_user') ?>" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" name="comment">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Go!</button>
                        </span>
                    </div>
                </form>

            </div> -->

        </div>
    </div>
    </div>

    <?= $this->endSection(); ?>