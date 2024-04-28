
        </div>
    </div>    
    <!-- optional javascript -->
    <!-- jQuery first , them popper.js. then bootstrap.js  -->
    <script src="<?php echo ASSETS;?>/jsjQuery-3.4.1.min.js"></script>
    <script src="<?php echo ASSETS;?>/js/popper.min.js"></script>
    <script src="<?php echo ASSETS;?>/js/bootstrap.min.js"></script>
    <!-- function delete  -->
    <script>

      $(".delete").click(function(){
        var item_id = $(this).attr("data-id")
        var table = $(this).attr("data-table")
        var field = $(this).attr("data-field")
      
        $.ajax({
          type:'GET',
          url:'<?php echo BURLA.'inc/delete.php'?>',
          data:{item_id:item_id , table:table , field:field },
          dataType:'JSON',
          success:function(data){
            if(data.message == 'success'){
              alert('Deleted Success');
            }
          }
        })
      
      
      })

    </script>
  </body>
</html>