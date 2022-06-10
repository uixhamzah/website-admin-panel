@extends('layouts.app')
@section('title', 'Bisa Cari Ambulance | Riwayat Pesanan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Kelola Penyedia</h3>
      </div>
      <div class="col-6">
        <button class="btn icon icon-left btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#tambah">
          <i class="fad fa-buildings"></i> 
          Tambahkan Penyedia
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
              <th class="text-center">Nama Penyedia</th>
              <th class="text-center">Provinsi</th>
              <th class="text-center">Kabupaten/Kota</th>
              <th class="text-center">Jumlah Ambulance</th>
              <th class="text-center">Kategori</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>{{ $item->nama_penyedia }}</td>
                <td>{{ Str::title($item->kabupaten->provinsi->name) }}</td>
                <td>{{ Str::title($item->kabupaten->name) }}</td>
                <td>{{ $item->driver->count() }}</td>
                <td>
                  @if ($item->kategori == 'Rumah Sakit')
                    <span class="badge bg-light-primary">
                      <i class="fad fa-hospital text-danger"></i>
                      Rumah Sakit
                    </span>
                  @else
                    <span class="badge bg-light-primary">
                      <i class="fad fa-buildings text-info"></i>
                      NGO
                    </span>
                  @endif
                </td>
                <td>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#detail-{{ $item->id }}">
                      <i class="far fa-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Penyedia"></i>
                    </button>
                    <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}">
                      <i class="far fa-pen text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Penyedia"></i>
                    </button>
                    <a href="#" class="btn icon btn-sm btn-light" onclick="hapusData({{ $item->id }}, '{{ $item->nama_penyedia }}')">
                      <i class="far fa-trash" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Penyedia"></i>
                    </a>
                    <form action="{{ route('penyedia.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
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
@include('includes.modals.penyedia-modal')
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
      noRows: "Penyedia tidak ditemukan",
      info: "Menampilkan {start} - {end} dari {rows} data",
    }
  });
</script>
@endpush