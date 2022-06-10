{{-- Ganti Password --}}
<div class="modal fade text-left" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Ganti Password</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <form action="{{ route('ganti-password') }}" method="post">
        @method('put')
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="current_password">Password Lama</label>
            <input type="password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="off" required>
            @error('current_password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">Password Baru</label>
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