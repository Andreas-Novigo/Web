<div class="bg-dark text-white">
<div class="container">
    <div class="row mt-5">
        <div class="col mt-4">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  CRATE
</button>

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
        <div class="form-group">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="numeric" name="id" class="form-control" id="id" placeholder=" masukkan ID anda">
        </div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder=" masukkan Nama anda">
        </div>
        <div class="form-group">
            <label for="steam">Steam</label>
            <input type="text" name="steam" class="form-control" id="steam" placeholder=" masukkan Steam anda">
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

        <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Steam</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($anggota as $ag) : ?>
    <tr>
      <td><?php echo $ag['id']; ?></td>
      <td><?php echo $ag['nama']; ?></td>
      <td><?php echo $ag['steam']; ?></td>
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
            <label for="id">ID</label>
            <input type="numeric" name="id" class="form-control" value="<?= $ag['id'];?>" id="id" placeholder=" masukkan ID anda">
        </div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $ag['nama'];?>" id="nama" placeholder=" masukkan Nama anda">
        </div>
        <div class="form-group">
            <label for="steam">Steam</label>
            <input type="text" name="steam" class="form-control" value="<?= $ag['steam'];?>" id="steam" placeholder=" masukkan Steam anda">
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
