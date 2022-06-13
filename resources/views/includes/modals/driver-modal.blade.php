{{-- Tambah --}}
<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Daftarkan Driver</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('driver.store') }}" method="post">
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <label for="name">Nama Driver</label>
            <input type="text" id="name" class="form-control" name="name" autocomplete="off" required>
          </div>
            
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
              <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="id_penyedia">Penyedia</label>
            <select class="form-select" id="id_penyedia" name="id_penyedia" required>
              <option value="" selected disabled>-- Pilih Penyedia --</option>
              @foreach ($penyedia as $item)
                <option value="{{ $item->id }}">{{ $item->nama_penyedia }}</option>
              @endforeach
            </select>
          </div>

          
          <div class="form-group">
            <label for="plat">Plat</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="DB" name="plat_a" maxlength="2" autocomplete="off" required>
              <input type="number" class="form-control" placeholder="1234" name="plat_b" max="9999" autocomplete="off" required>
              <input type="text" class="form-control" placeholder="WA" name="plat_c" maxlength="3" autocomplete="off" required>
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary ml-1">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Detail --}}
@foreach ($items as $item)
  <div class="modal fade text-left" id="detail-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel1">Detail Driver</h5>
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
@endforeach

{{-- Edit --}}
@foreach ($items as $item)
  <div class="modal fade text-left" id="edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel1">Edit Driver</h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="{{ route('driver.update', $item->id) }}" method="post">
          @method('put')
          @csrf
          <div class="modal-body">
            
            <div class="form-group">
              <label for="name">Nama Driver</label>
              <input type="text" id="name" class="form-control" name="name" autocomplete="off" value="{{ $item->name }}" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" name="email" autocomplete="off" value="{{ $item->email }}" required>
            </div>
  
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                <option {{ $item->driverDetails->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option {{ $item->driverDetails->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
              </select>
            </div>
  
            <div class="form-group">
              <label for="id_penyedia">Penyedia</label>
              <select class="form-select" id="id_penyedia" name="id_penyedia" required>
                <option value="" selected disabled>-- Pilih Penyedia --</option>
                @foreach ($penyedia as $pen)
                  <option value="{{ $pen->id }}" {{ $pen->id == $item->driverDetails->id_penyedia ? 'selected' : '' }}>{{ $pen->nama_penyedia }}</option>
                @endforeach
              </select>
            </div>
  
            
            <div class="form-group">
              <label for="plat">Plat</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="DB" name="plat_a" maxlength="2" autocomplete="off" value="{{ Str::before($item->driverDetails->plat, ' ') }}" required>
                <input type="number" class="form-control" placeholder="1234" name="plat_b" max="9999" autocomplete="off" value="{{ (int)Str::after($item->driverDetails->plat, ' ') }}" required>
                <input type="text" class="form-control" placeholder="WA" name="plat_c" maxlength="3" autocomplete="off" value="{{ Str::after(Str::after($item->driverDetails->plat, ' '), ' ') }}" required>
              </div>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">
              Tutup
            </button>
            <button type="submit" class="btn btn-primary ml-1">
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endforeach