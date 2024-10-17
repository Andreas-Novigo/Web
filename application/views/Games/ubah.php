<div class="container">
    <div class="row mt-5">
    <div class="col-md-5 mt-5">
        <div class="card bg-primary">
            <div class="card-header">
                Ubah game
            </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="no" value="<?= $games['no']; ?>">
            <div class="form-group">
                <label for="nama">Nama Game</label>
                <input type="text" class="form-control" value="<?= $games['nama']; ?>" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" value="<?= $games['harga']; ?>" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="size">Size/ukuran</label>
                <input type="text" class="form-control" value="<?= $games['size']; ?>" id="size" name="size">
            </div>
            <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>