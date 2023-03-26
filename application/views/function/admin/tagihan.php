<script>
  $(document).ready(function(){

    $('#tmb_tambah').click(function() {
      event.preventDefault();

      var periode       = $('#periode').val();
      var jurusan       = $('#jurusan').val();
      var tagihan       = $("input[name=tagihan]");
      
      if(periode == "Select Year") {
          alert('silahkan pilih periode');
      }else if(tagihan.val().trim() == "") {
          alert('tagihan tidak boleh kosong');
          tagihan.focus();
      } else {
        r = confirm("Apakah anda yakin ingin menambahkan tagihan ?");
        if (r == true) {
          $.ajax({
          url : '<?php echo base_url('admin/proses-tambah-tagihan')?>',
          type : 'POST',
          data : {  
            periode : periode,
            jurusan : jurusan,
            tagihan : tagihan.val(),
          }, 
            success:function(response){
              if (response == "success") {
                window.alert('Tagihan berhasil ditambahkan');
                window.location.href =`<?php echo base_url('admin/tagihan')?>`;
              } else {
                alert('Tagihan gagal ditambahkan');
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
      
      r = confirm("Apakah anda yakin ingin Menghapus tagihan ini ?" );
      if (r == true) {
        $.ajax({
          url : `<?php echo base_url('admin/proses-hapus-tagihan/')?>`,
          type : 'POST',
          data : {
            id  : id
          },
          success:function(response){
            if (response == "success") {
              window.alert('Tagihan berhasil dihapus');
              window.location.href =`<?php echo base_url('admin/tagihan')?>`;
            } else {
              alert('Tagihan gagal dihapus');
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
      var periode       = $('#periode').val();
      var jurusan       = $('#jurusan').val();
      var tagihan       = $("input[name=tagihan]");
      
      if(periode == "Select Year") {
          alert('silahkan pilih periode');
      }else if(tagihan.val().trim() == "") {
          alert('tagihan tidak boleh kosong');
          tagihan.focus();
      } else {
        r = confirm("Apakah anda yakin ingin mengubah tagihan ini ?");
        if (r == true) {
          $.ajax({
          url : '<?php echo base_url('admin/proses-edit-tagihan')?>',
          type : 'POST',
          data : {  
            id : id,
            periode : periode,
            jurusan : jurusan,
            tagihan : tagihan.val(),
          }, 
            success:function(response){
              if (response == "success") {
                window.alert('Tagihan berhasil diubah');
                window.location.href =`<?php echo base_url('admin/tagihan')?>`;
              } else {
                alert('Tagihan gagal diubah');
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