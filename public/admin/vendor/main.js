$(document).on("click","#delete",function(e){
    e.preventDefault();
    var link =$(this).attr("href");
   swal({
  title: "Are you sure Want to Confirm?",
  
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
     window.location.href=link;
     if(willDelete){
       swal({
          title:"Deleted",
          Type:"success"
       });
     }
  } else {
    swal("Product Not Confirm");
  }
});

/*$('body').on('change','$alldelete',function(){
   alert('hi');
   
   var id=$(this).attr('data-id');
   $('.loader__').show();
   $.ajax({
      
      type:'get',
      success::function(result){
        $('.loader__').hide();

      }
   })
}); */
  });