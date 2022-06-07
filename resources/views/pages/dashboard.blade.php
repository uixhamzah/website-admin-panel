@extends('layouts.app')
@section('title', 'Bisa Cari Ambulance | Dashboard')

@section('content')
<div class="page-heading">

  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Dashboard</h3>
      </div>
    </div>
  </div>

  <section class="section mt-4">
    
    <div class="row">
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon purple">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Pengguna</h6>
                <h6 class="font-extrabold mb-0">{{ $a }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon blue">
                  <i class="fas fa-truck-medical"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Driver</h6>
                <h6 class="font-extrabold mb-0">{{ $b }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon green">
                  <i class="fas fa-buildings"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">NGO</h6>
                <h6 class="font-extrabold mb-0">{{ $c }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon red">
                  <i class="fas fa-hospital"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Rumah Sakit</h6>
                <h6 class="font-extrabold mb-0">{{ $d }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Pesanan Hari Ini</h4>
          </div>
          <div class="card-body">
            <div id="pesanan-harian"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Pesanan 1 Minggu Terakhir</h4>
          </div>
          <div class="card-body">
            <div id="pesanan-mingguan"></div>
          </div>
        </div>
      </div>
    </div>

  </section>

</div>
@endsection

@push('addon-style')
    
@endpush

@push('addon-script')
<script>
  var optionsPesananHarian = {
    chart: {
      type: 'donut',
      width: '100%',
      height:'400px',
    },
    // series: [44, 92, 15],
    series: {!! json_encode($pesanan) !!},
    labels: ['Pesanan yang sedang berjalan', 'Pesanan yang telah selesai', 'Pesanan yang dibatalkan'],
    // colors:['#008FFB', '#00E396', '#FF4560'],
    // colors:['#57CAEB', '#5DDAB4', '#FF7976'],
    colors:['#008FFB', '#00E396', '#FF7976'],
    legend: {
      position: 'bottom'
    },
    plotOptions: {
      pie: {
        donut: {
          size: '40%'
        }
      }
    }
  };

  var optionsPesananMingguan = {
    chart: {
      type: 'area',
      height:'350px',
      zoom: {
        enabled: false
      }
    },
    series: [{
      name: "Pesanan",
      data: {!! json_encode($mingguan) !!}
    }],
    stroke: {
      curve: 'smooth'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'],
        opacity: 0.5
      },
    },
    xaxis: {
      categories: {!! json_encode($hari) !!},
    }
  };

  var chartPesananHarian = new ApexCharts(document.querySelector("#pesanan-harian"), optionsPesananHarian);
  var chartPesananMingguan = new ApexCharts(document.querySelector("#pesanan-mingguan"), optionsPesananMingguan);
  chartPesananHarian.render();
  chartPesananMingguan.render();
</script>
@endpush