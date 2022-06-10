{{-- Tambah --}}
<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Daftarkan Admin</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('admin.store') }}" method="post">
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="name">Nama Admin</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" autocomplete="off" required>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" autocomplete="off" required>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" autocomplete="off" required>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" required>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="off" required>
            @error('password_confirmation')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
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

{{-- Setel --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="setelan-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Setel Admin</h5>
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