@extends('layouts.app')
@section('title', 'Bisa Cari Ambulance | Riwayat Pesanan')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Kelola Admin</h3>
      </div>
      <div class="col-6">
        <button class="btn icon icon-left btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#tambah">
          <i class="fad fa-user-plus"></i> 
          Daftarkaan Admin
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
              <th class="text-center">Nama</th>
              <th class="text-center">Username</th>
              <th class="text-center">Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>
                  <a href="mailto:{{ $item->email }}" target="_blank" class="btn btn-sm icon icon-left btn-light rounded-pill">
                    <i class="far fa-envelope text-danger"></i>
                    {{ $item->email }}
                  </a>
                </td>
                <td>
                  <button type="button" class="btn icon btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#setelan-{{ $item->id }}">
                    <i class="far fa-gear" data-bs-toggle="tooltip" data-bs-placement="top" title="Setel Admin"></i>
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
@include('includes.modals.admin-modal')
@endsection

@push('addon-style')
    
@endpush

@push('addon-script')
@if (count($errors))
  <script>
    var daftarAdminModal = new bootstrap.Modal(document.getElementById('tambah'));
    daftarAdminModal.show();
  </script>
@endif
<script>
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1, {
    labels: {
      placeholder: "Cari...",
      perPage: "{select}",
      noRows: "Admin tidak ditemukan",
      info: "Menampilkan {start} - {end} dari {rows} data",
    }
  });
</script>
@endpush