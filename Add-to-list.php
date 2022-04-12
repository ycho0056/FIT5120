<?php
 if(isset($_GET['ID']))
 {
   $id = (int)$_GET['ID'];
 }
echo "<button data=$id>Add to Food List</button>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
jQuery(function($){
  $("button").click(function(){
    let foodname2 = $(this).attr('data');
    $(".test").text(foodname2);
    
    let cookie_key = 'fav-food';

    $("#success").click(function(){
				showMsg("成功样式！", "success", 2000);
		})
  });
  function showMsg(text, icon, hideAfter) {
        if (heading == undefined) {
            var heading = "提示";
        }
        $.toast({
            text: text,
            heading: heading,
            icon: icon,
            showHideTransition: 'fade',
            allowToastClose: true,
            hideAfter: hideAfter,
            stack: 1,
            position: 'top-center',
            textAlign: 'left',
            loader: true,
            loaderBg: '#ffffff',
        });
    }
});
</script>

<h2 class="test"></h2>