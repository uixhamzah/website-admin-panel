function hapusData(id, title) {
  Swal.fire({
    title: 'Hapus Data',
    text: "Yakin ingin menghapus "+ title +"?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#435EBE',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      document.getElementById(`hapus-${id}`).submit();
    }
  })
}