let table1 = document.querySelector('#table1');
let dataTable = new simpleDatatables.DataTable(table1, {
  // sortable: false,
  labels: {
    placeholder: "Cari...",
    perPage: "{select}",
    noRows: "Data tidak ditemukan",
    info: "Menampilkan {start} - {end} dari {rows} data",
  }
});