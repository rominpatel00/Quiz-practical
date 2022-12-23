
$(":checkbox").click(function(){
  
    var cID = $(this).data('id');
    if(this.checked){
        $('#'+cID).css('display','');
    }else{
        $('#'+cID).css('display','none');
    }
  });
  