<script>
  $(document).ready(function(){

    $('#tmb_tambah').click(function() {
      event.preventDefault();

      var nim           = $("input[name=nim]");
      var nama_lengkap  = $("input[name=nama_lengkap]");
      var jenis_kelamin = $('#jenis_kelamin').val();
      var jurusan       = $('#jurusan').val();
      
      if(nim.val().trim() == "") {
          alert('nim tidak boleh kosong');
          nim.focus();
      }else if(nama_lengkap.val().trim() == "") {
          alert('nama lengkap tidak boleh kosong');
          nama_lengkap.focus();
      } else {
        r = confirm("Apakah anda yakin ingin menambahkan mahasiswa ?");
        if (r == true) {
          $.ajax({
          url : '<?php echo base_url('admin/proses-tambah-mahasiswa')?>',
          type : 'POST',
          data : {  
            nim : nim.val(),
            nama_lengkap : nama_lengkap.val(),
            jenis_kelamin : jenis_kelamin,
            jurusan : jurusan
          }, 
            success:function(response){
              if (response == "success") {
                window.alert('Mahasiswa berhasil ditambahkan');
                window.location.href =`<?php echo base_url('admin/mahasiswa')?>`;
              } else {
                alert('Mahasiswa gagal ditambahkan');
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

    $('.tmb_hapus ').on('click',function(){
      event.preventDefault();

      var id = this.id;
      
      r = confirm("Apakah anda yakin ingin Menghapus mahasiswa ini ?" );
      if (r == true) {
        $.ajax({
          url : `<?php echo base_url('admin/proses-hapus-mahasiswa/')?>`,
          type : 'POST',
          data : {
            id  : id
          },
          success:function(response){
            if (response == "success") {
              window.alert('Mahasiswa berhasil dihapus');
              window.location.href =`<?php echo base_url('admin/mahasiswa')?>`;
            } else {
              alert('Mahasiswa gagal dihapus');
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
      var nama_lengkap  = $("input[name=nama_lengkap]");
      var jenis_kelamin = $('#jenis_kelamin').val();
      var jurusan       = $('#jurusan').val();
      
      if(nim.val().trim() == "") {
          alert('nim tidak boleh kosong');
          nim.focus();
      }else if(nama_lengkap.val().trim() == "") {
          alert('nama lengkap tidak boleh kosong');
          nama_lengkap.focus();
      } else {
        r = confirm("Apakah anda yakin ingin mengubah user ini ?");
        if (r == true) {
          $.ajax({
          url : '<?php echo base_url('admin/proses-edit-mahasiswa')?>',
          type : 'POST',
          data : {  
            id : id,
            nim : nim.val(),
            nama_lengkap : nama_lengkap.val(),
            jenis_kelamin : jenis_kelamin,
            jurusan : jurusan
          }, 
            success:function(response){
              if (response == "success") {
                window.alert('Mahasiswa berhasil diubah');
                window.location.href =`<?php echo base_url('admin/mahasiswa')?>`;
              } else {
                alert('Mahasiswa gagal diubah');
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