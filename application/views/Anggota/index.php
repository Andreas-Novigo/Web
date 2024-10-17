<div class="text-white">
<div class="container">
    <div class="row mt-5">
        <div class="col mt-4">

        <!--validasi error -->
        <div class="row mt-3"></div>
        <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

            <!-- Button trigger modal -->
              <div class="form-inline my-2 my-lg-3">
              <button type="button" class="btn btn-outline-primary mr-sm-4" data-toggle="modal" data-target="#exampleModalScrollable">CRATE</button>
              <form action="" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="search" name="keyword">
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

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Data 🎮</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form action="<?php echo base_url('Anggota')?>" method="post">
      <div class="modal-body">
        <?php if(validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <div class="form-group">
          <div class="form-group">
            <label for="kode">Kode</label>
            <input type="numeric" name="kode" class="form-control" id="kode" placeholder=" masukkan Kode anda">
            <small class="form-text text-danger"><?= form_error('kode') ?></small>
        </div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder=" masukkan Nama anda">
            <small class="form-text text-danger"><?= form_error('nama') ?></small>
        </div>
        <div class="form-group">
            <label for="steam">Steam</label>
            <input type="text" name="steam" class="form-control" id="steam" placeholder=" masukkan Steam anda">
            <small class="form-text text-danger"><?= form_error('steam') ?></small>
        </div>
        <div class="form-group">
            <label for="pangkat"> level Steam</label>
            <select class="form-control" id="pangkat" name="pangkat">
              <option value="">pilih</option>
              <?php foreach($pangkat as $l): ?>
              <option><?php echo $l['level']; ?></option>
              <?php endforeach; ?>
            </select>
            <small class="form-text text-danger"><?= form_error('pangkat') ?></small>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>

<div class="row mt-3"></div>
        <table class="table table-hover bg-white text-black">
  <thead class="thead-black bg-success">

    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Steam</th>
      <th scope="col">Level</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($anggota as $ag) : ?>
    <tr>
      <td><?php echo $ag['kode']; ?></td>
      <td><?php echo $ag['nama']; ?></td>
      <td><?php echo $ag['steam']; ?></td>
      <td><?php echo $ag['pangkat']; ?></td>
      <td>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editmodal<?= $ag['id'];?>">
        Edit
      </button>
        <a href="<?= base_url(); ?>anggota/hapus/<?= $ag['id']; ?>" class=" btn btn-danger text-dark" onclick="return confirm('Are You Sure?');">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>
</div>


<!-- edit -->
<?php $no= 0; foreach($anggota as $ag) : $no++; ?>
<div class="modal fade" id="editmodal<?= $ag['id'];?>" tabindex="-1" role="dialog" aria-labelledby="editmodellabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodallabel">Edit Data 🎮</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= form_open_multipart('Anggota/ubah'); ?>
      <input type="hidden" name="id" value="<?= $ag['id']; ?>">
      
      <div class="modal-body">
        <div class="form-group">
          <div class="form-group">
            <label for="kode">KODE</label>
            <input type="numeric" name="kode" class="form-control" value="<?= $ag['kode'];?>" id="kode" readonly>
        </div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $ag['nama'];?>" id="nama" placeholder=" masukkan Nama anda">
        </div>
        <div class="form-group">
            <label for="steam">Steam</label>
            <input type="text" name="steam" class="form-control" value="<?= $ag['steam'];?>" id="steam" placeholder=" masukkan Steam anda">
        </div>
        <div class="form-group">
            <label for="pangkat"> level Steam</label>
            <select class="form-control" id="pangkat" name="pangkat">
              <option value="">pilih</option>
              <?php foreach($pangkat as $l): ?>
              <option><?php echo $l['level']; ?></option>
              <?php endforeach; ?>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    <?= form_close(); ?>
    </div>
  </div>
</div>
<?php endforeach; ?>
