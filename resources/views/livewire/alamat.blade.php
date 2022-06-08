<div>

	<div class="form-group">
    <label for="provinsi">Provinsi</label>
    <select wire:model="selectedProvinsi" class="form-select" id="provinsi" required>
      <option value="" selected disabled>-- Pilih Provinsi --</option>
      @foreach ($provinsi as $item)
        <option value="{{ $item->id }}">{{ Str::title($item->name) }}</option>
      @endforeach
    </select>
  </div>

  @if ($selectedProvinsi)
    <div class="form-group">
      <label for="kabupaten">Kabupaten</label>
      <select class="form-select" id="kabupaten" name="id_kabupaten" required>
        <option value="" selected disabled>-- Pilih Kabupaten --</option>
        @foreach ($kabupaten as $item)
          <option value="{{ $item->id }}">{{ Str::title($item->name) }}</option>
        @endforeach
      </select>
    </div>
  @endif

</div>
