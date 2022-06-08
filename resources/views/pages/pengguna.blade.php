@extends('layouts.app')
@section('title', 'Bisa Cari Ambulance | Riwayat Pesanan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Daftar Pengguna</h3>
      </div>
    </div>
  </div>

  <section class="section mt-3">
    <div class="card">
      <div class="card-body">
        <table class="table table-striped text-center" id="table1">
          <thead>
            <tr>
              <th class="text-center">ID Pengguna</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Provinsi</th>
              <th class="text-center">Kabupaten/Kota</th>
              <th class="text-center">No. Telp</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ Str::title($item->kabupaten->provinsi->name) }}</td>
                <td>{{ Str::title($item->kabupaten->name) }}</td>
                <td>{{ $item->no_telp }}</td>
                <td>
                  <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#detail">
                    <i class="far fa-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Pengguna"></i>
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
@include('includes.modals.pengguna-modal')
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
      noRows: "Pengguna tidak ditemukan",
      info: "Menampilkan {start} - {end} dari {rows} data",
    }
  });
</script>
@endpush