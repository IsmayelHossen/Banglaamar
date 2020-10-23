  	  $(document).ready(function(){
    $("#district").click(function(){
     var dist=$(this).val();
         alert(dist);

           $.ajax({

            type: "GET",

            dataType: "json",

            url: '/district',

            data: {'district': dist},

            success: function(data){

              console.log(data.success);

            }

        });
    
      // return false;
    });
  });
