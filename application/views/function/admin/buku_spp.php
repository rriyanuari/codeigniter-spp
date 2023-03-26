<script>
  $(document).ready(function(){

    $('#tmb_cari').on('click',function(){
      event.preventDefault();

      var periode       = $('#periode').val();

      if(periode == "Select Year"){
        alert('Silahkan pilih periode')
      }else{
        window.location.href =`?periode=${periode}`;
      }
    });

  });
</script>