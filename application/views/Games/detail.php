<div class="container">
    <div class="row mt-5">
        <div class="col-md-5 mt-5">
        </div>
    </div>
        <div class="card text-center">
        <div class="card-header">
            Detail Game
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $games['nama']; ?></h5>
            <p class="card-text">Rp <?= $games['harga']; ?></p>
            <p class="card-text"><?= $games['size']; ?></p>
            <a href="<?= base_url('Games'); ?>" class="btn btn-success">Back</a>
        </div>
        </div>
</div>