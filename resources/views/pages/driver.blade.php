@extends('layouts.app')
@section('title', 'Bisa Cari Ambulance | Riwayat Pesanan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Kelola Driver</h3>
      </div>
      <div class="col-6">
        <button class="btn icon icon-left btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#tambah">
          <i class="fad fa-truck-medical"></i> 
          Daftarkan Driver
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
              <th class="text-center">ID Driver</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Penyedia</th>
              <th class="text-center">No. Polisi</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                  <a href="https://www.google.com/maps/?t=k&q={{ $item->driverDetails->penyedia->lat }},{{ $item->driverDetails->penyedia->long }}" target="_blank" class="btn btn-sm icon icon-left btn-light rounded-pill">
                    <i class="far fa-hospital {{ $item->driverDetails->penyedia->kategori == 'Rumah Sakit' ? 'text-danger' : 'text-info'}}"></i>
                    {{ $item->driverDetails->penyedia->nama_penyedia }}
                  </a>
                </td>
                <td>
                  <span class="badge bg-secondary">{{ $item->driverDetails->plat }}</span>
                </td>
                <td>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#detail-{{ $item->id }}">
                      <i class="far fa-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Driver"></i>
                    </button>
                    <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}">
                      <i class="far fa-pen text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Driver"></i>
                    </button>
                    <a href="#" class="btn icon btn-sm btn-light" onclick="hapusData({{ $item->id }}, '{{ $item->nama }}')">
                      <i class="far fa-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Driver"></i>
                    </a>
                    <form action="{{ route('driver.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
                      @method('delete')
                      @csrf
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>
@include('includes.modals.driver-modal')
@endsection

@push('addon-style')
    
@endpush

@push('addon-script')
<script>
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1, {
    labels: {
      placeholder: "Cari...",
      perPage: "{select}",
      noRows: "Driver tidak ditemukan",
      info: "Menampilkan {start} - {end} dari {rows} data",
    }
  });
</script>
@endpush