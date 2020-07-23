<?= $this->extend('user/component/template'); ?>

<?= $this->section('content'); ?>
<!----------------------------------- CHATTING PANEL ---------------------------------------------->
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Chatting With Admin</h5>
        </div>
        <?php if (session()->getFlashdata('berhasil')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('berhasil'); ?>
            </div>
        <?php endif ?>
        <?php if (session()->get('level') == 2) : ?>
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
                <!-- Chat admin -->
                <?php foreach ($level as $row) : ?>
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
            <?php endif ?>

            <!-- DIPLAY ADMIN -->
            <?php if (session()->get('level') == 1) : ?>
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
                    <!-- Chat admin -->
                    <?php foreach ($level as $row) : ?>
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
                <?php endif ?>
                </div>
                <div class="timeline-item">
                    <form action="/user/addComment/<?= session()->get('id_user') ?>" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="comment">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Go!</button>
                            </span>
                        </div>
                    </form>

                </div>

            </div>
    </div>
</div>

<?= $this->endSection(); ?>