<div class="container">
    <h1 class="text-center">Daftar Post</h1>
    <?= $this->session->flashdata('message'); ?>
    <a class="btn btn-success" href="<?= base_url('post'); ?>">Buat Post</a>
    <div class="row mt-5">
    <?php foreach($daftar as $da) :  ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $da['title']; ?></h5>
                    <p class="card-text"><?= word_limiter($da['contents'], 20); ?> <a href="<?= base_url('post/detailPost/') . $da['id']; ?>">Selengkapnya</a></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>