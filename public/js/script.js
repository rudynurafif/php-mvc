$(function() { // ketika doc sudah siap, jalankan fungsi didalamnya (ready)
  
  $('.tombolTambahData').on('click', function() {
    $('#formModalLabel').html('Tambah Data Produk');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  })

  $('.tampilModalUbah').on('click', function() {
    
    $('#formModalLabel').html('Ubah Data Produk');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/products/ubah');

    const id = $(this).data('id'); // mengirimkan id
    
    $.ajax({
      url: 'http://localhost/phpmvc/public/products/getubah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        $('#nama').val(data.nama);
        $('#produsen').val(data.produsen);
        $('#kategori').val(data.kategori);
        $('#harga').val(data.harga);
        $('#id').val(data.id);
      }
    });

  });

});