<div class="text-white">
<div class="container">
    <div class="row mt-5">
        <div class="col mt-4">

            <!-- Button trigger modal -->
              <div class="form-inline my-2 my-lg-3">
              <a href="<?= base_url('Games/tambah'); ?>" class="btn btn-outline-primary mr-sm-4">ADD</a>
              <form action="" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="search game" name="keyword">
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </div>
                </div>
              </form>
              </div>

          <?php if($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
              <div class="col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data <strong>Sukses!</strong><?= $this->session->flashdata('flash'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          <?php endif; ?>

    <div class="row mt-4">
      <div class="col-md-6">
        <h3><strong>Daftar Game</strong></h3>
    <ul class="list-group">
      <?php foreach($games as $gm): ?>
      <li class="list-group-item">
      <?= $gm['nama'] ?>
      <a href="<?= base_url(); ?>games/hapus/<?= $gm['no']; ?>" class=" badge bg-danger float-right" onclick="return confirm('Yakin kah Anda mau menghapus dia')">hapus</a>
      <a href="<?= base_url('games/ubah/'); ?><?= $gm['no']; ?>" class=" badge bg-primary float-right">ubah</a>
      <a href="<?= base_url('games/detail/'); ?><?= $gm['no']; ?>" class=" badge bg-success float-right">detail</a>
      </li>
      <?php endforeach; ?>
    </ul>
      </div>
    </div>
   

