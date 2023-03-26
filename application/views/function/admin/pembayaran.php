<script>
  $(document).ready(function(){

    $('#tmb_tambah').click(function() {
      event.preventDefault();

      var nim           = $("input[name=nim]");
      var periode       = $("input[name=periode]");
      var nominal_bayar = $("input[name=nominal_bayar]");
      
      if(nominal_bayar.val().trim() == "") {
          alert('nominal_bayar tidak boleh kosong');
          nominal_bayar.focus();
      } else {
        r = confirm("Apakah anda yakin ingin menginput pembayaran ?");
        if (r == true) {
          $.ajax({
          url : '<?php echo base_url('admin/proses-tambah-pembayaran')?>',
          type : 'POST',
          data : {  
            nim : nim.val(),
            periode : periode.val(),
            nominal_bayar : nominal_bayar.val(),
          }, 
            success:function(response){
              if (response == "success") {
                window.alert('Pembayaran berhasil diinput');
                window.location.href =`<?php echo base_url('admin/buku-spp/')?>${nim.val()}?periode=${periode.val()}`;
              } else {
                alert('Pembayaran gagal diinput');
              }
              console.log(response);
            },
            error:function(response){
              // swalTemplate('error', 'Opps!', 'kesalahan pada server');
              alert('Kesalahan pada server');
              console.log(response);
            }
          });
        }
      }
    });

    $('.tmb_hapus').on('click',function(){
      event.preventDefault();

      var id = this.id;
      
      r = confirm("Apakah anda yakin ingin menghapus pembayaran ini ?" );
      if (r == true) {
        $.ajax({
          url : `<?php echo base_url('admin/proses-hapus-pembayaran/')?>`,
          type : 'POST',
          data : {
            id  : id
          },
          success:function(response){
            if (response == "success") {
              window.alert('Pembayaran berhasil dihapus');
              window.location.href =`<?php echo base_url('admin/pembayaran')?>`;
            } else {
              alert('Pembayaran gagal dihapus');
            }
            console.log(response);
          },
          error:function(response){
            // swalTemplate('error', 'Opps!', 'kesalahan pada server');
            alert('Kesalahan pada server');
            console.log(response);
          }
        });
      }
    });

    $('.tmb_edit').click(function() {
      event.preventDefault();

      var id = this.id;
      var nim           = $("input[name=nim]");
      var periode       = $("input[name=periode]");
      var nominal_bayar = $("input[name=nominal_bayar]");
      
      if(nominal_bayar.val().trim() == "") {
          alert('nominal_bayar tidak boleh kosong');
          nominal_bayar.focus();
      } else {
        r = confirm("Apakah anda yakin ingin mengubah pembayaran ini ?");
        if (r == true) {
          $.ajax({
          url : '<?php echo base_url('admin/proses-edit-pembayaran')?>',
          type : 'POST',
          data : {  
            id : id,
            nim : nim.val(),
            periode : periode.val(),
            nominal_bayar : nominal_bayar.val(),
          }, 
            success:function(response){
              if (response == "success") {
                window.alert('Pembayaran berhasil diubah');
                window.location.href =`<?php echo base_url('admin/pembayaran')?>`;
              } else {
                alert('Pembayaran gagal diubah');
              }
              console.log(response);
            },
            error:function(response){
              // swalTemplate('error', 'Opps!', 'kesalahan pada server');
              alert('Kesalahan pada server');
              console.log(response);
            }
          });
        }
      }
    });

  });
</script>