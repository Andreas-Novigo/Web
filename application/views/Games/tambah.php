<div class="container">
    <div class="row mt-5">
    <div class="col-md-5 mt-5">
        <div class="card bg-primary">
            <div class="card-header">
                Tambah game
            </div>
        <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama Game</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <small class="form-text text-danger"><?= form_error('name') ?></small>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="size">Size/Ukuran</label>
                <input type="text" class="form-control" id="size" name="size">
            </div>
            <button type="submit" name="tambah" class="btn btn-success">ADD</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>