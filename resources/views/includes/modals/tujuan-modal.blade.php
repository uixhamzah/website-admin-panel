<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Tambahkan Tujuan</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('rumah-sakit-tujuan.store') }}" method="post">
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <label for="nama_rs">Nama Rumah Sakit</label>
            <input type="text" id="nama_rs" class="form-control" name="nama_rs" required>
          </div>

          <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select class="form-select" id="provinsi" name="provinsi" required>
              <option value="" selected disabled>-- Pilih Provinsi --</option>
              <option>Nama Provinsi</option>
              <option>Nama Provinsi</option>
              <option>Nama Provinsi</option>
            </select>
          </div>

          <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <select class="form-select" id="kabupaten" name="kabupaten" required>
              <option value="" selected disabled>-- Pilih Kabupaten --</option>
              <option>Nama Kabupaten</option>
              <option>Nama Kabupaten</option>
              <option>Nama Kabupaten</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="latlong">LatLong</label>
            <input type="text" id="latlong" class="form-control" name="latlong" required>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade text-left" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Detail Tujuan</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quibusdam. Commodi quos blanditiis, tempora, omnis doloremque mollitia consequuntur reiciendis nihil voluptatum quis nesciunt accusantium cum quas quasi eum. Aliquid, in? Eius ratione voluptatibus sed eaque ut? Reprehenderit eaque laudantium ab a autem. Velit maiores magni atque, iste aliquid dicta minus et sunt repudiandae facere rem quibusdam voluptates repellat, minima assumenda, iusto aspernatur mollitia! Iste possimus ad eius libero. Laudantium deserunt enim laboriosam? Voluptatibus laboriosam aut deserunt dolorem aliquid facere dolor sit veritatis magni repudiandae exercitationem non error, molestiae, nesciunt delectus nisi? Numquam iusto eius maxime in quidem voluptatem deleniti rerum?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Accept</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Edit Tujuan</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quibusdam. Commodi quos blanditiis, tempora, omnis doloremque mollitia consequuntur reiciendis nihil voluptatum quis nesciunt accusantium cum quas quasi eum. Aliquid, in? Eius ratione voluptatibus sed eaque ut? Reprehenderit eaque laudantium ab a autem. Velit maiores magni atque, iste aliquid dicta minus et sunt repudiandae facere rem quibusdam voluptates repellat, minima assumenda, iusto aspernatur mollitia! Iste possimus ad eius libero. Laudantium deserunt enim laboriosam? Voluptatibus laboriosam aut deserunt dolorem aliquid facere dolor sit veritatis magni repudiandae exercitationem non error, molestiae, nesciunt delectus nisi? Numquam iusto eius maxime in quidem voluptatem deleniti rerum?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Accept</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Hapus Tujuan</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptatibus?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Close</span>
        </button>
        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Accept</span>
        </button>
      </div>
    </div>
  </div>
</div>