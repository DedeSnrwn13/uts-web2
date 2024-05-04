<div class="button-add-player">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#playerModal" data-bs-whatever="@mdo">Tambah Pemain</button>
  <div class="modal fade" id="playerModal" tabindex="-1" aria-labelledby="playerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="playerModalLabel">Tambah Pemain</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="addplayer.php" enctype="multipart/form-data">
            <div class="">
              <label for="recipient-name" class="col-form-label">Foto:</label>
              <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Nama:</label>
              <input type="text" class="form-control" id="recipient-name" name="name">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Umur:</label>
              <input type="text" class="form-control" id="recipient-name" name="age">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Klub:</label>
              <input type="text" class="form-control" id="recipient-name" name="club">
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Posisi:</label>
              <input type="text" class="form-control" id="recipient-name" name="position">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" name="submit" class="btn btn-primary">Tambah Pemain</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>