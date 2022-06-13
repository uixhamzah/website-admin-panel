@extends('layouts.app')
@section('title', 'Bisa Cari Ambulance | Riwayat Pesanan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Riwayat Pesanan</h3>
      </div>
      <div class="col-6">
        <button class="btn icon icon-left btn-outline-success float-end" data-bs-toggle="modal" data-bs-target="#tambah">
          <i class="fad fa-file-excel"></i> 
          .XLS
        </button>
      </div>
    </div>
  </div>

  <section class="section mt-3">
    <div class="card">
      <div class="card-body">
        <table class="table table-striped text-center" id="table1">
          <thead>
            <tr>
              <th class="text-center">ID Pesanan</th>
              <th class="text-center">Pengguna</th>
              <th class="text-center">Driver</th>
              <th class="text-center">Tujuan</th>
              <th class="text-center">Tanggal</th>
              <th class="text-center">Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->pengguna->name }}</td>
                <td>
                  @if ($item->driver->trashed())
                    <span class="badge bg-light-secondary text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Dihapus">{{ $item->driver->name }}</span>
                  @else
                    {{ $item->driver->name }}
                  @endif
                </td>
                <td>
                  <a href="https://www.google.com/maps/?t=k&q=1.4876308588283509, 124.83760674457933" target="_blank" class="btn btn-sm icon icon-left btn-light rounded-pill">
                    <i class="far fa-hospital {{ $item->tujuan->trashed() ? '' : 'text-danger' }}"></i>
                    {{ $item->tujuan->nama_rs }}
                  </a>
                </td>
                <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMM YYYY') }}</td>
                <td>
                  @if ($item->status == 'Sedang Berjalan')
                    <span class="badge bg-light-primary">{{ $item->status }}</span>
                  @elseif ($item->status == 'Selesai')
                    <span class="badge bg-light-success">{{ $item->status }}</span>
                  @else
                    <span class="badge bg-light-danger">{{ $item->status }}</span>
                  @endif
                </td>
                <td>
                  <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#detail-{{ $item->id }}">
                    <i class="far fa-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"></i>
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>
@include('includes.modals.riwayat-modal')
@endsection

@push('addon-style')
    
@endpush

{{-- @push('addon-script')
<script src="{{ url('frontend/scripts/table.js') }}"></script>
@endpush --}}

@push('addon-script')
<script>
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1, {
    labels: {
      placeholder: "Cari...",
      perPage: "{select}",
      noRows: "Pesanan tidak ditemukan",
      info: "Menampilkan {start} - {end} dari {rows} data",
    }
  });
</script>
@endpush