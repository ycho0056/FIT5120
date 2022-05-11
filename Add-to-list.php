<center>
<?php
 if(isset($_GET['ID']))
 {
   $id = (int)$_GET['ID'];
 }
echo "<button data=$id>Add to Food List</button>";
?>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
jQuery(function($){
$("button").click(function(){
    let foodname2 = $(this).attr('data');
    let cookie_key = 'list';
    $(".test").text(foodname2);
    let cookie_food = $.cookie(cookie_key);
    if('undefined' != cookie_food){
        $.cookie(cookie_key, cookie_food+','+foodname2, { expires: 1, path: '/' });
    }else{
        $.cookie(cookie_key, ','+foodname2, { expires: 1, path: '/' });
    }
    showMsg("Add to food list successful！", "success", 2000);
  });
  function showMsg(text, icon, hideAfter) {
        if (heading == undefined) {
            var heading = "Success";
        }
        $.toast({
            text: text,
            heading: heading,
            icon: icon,
            showHideTransition: 'fade',
            allowToastClose: true,
            hideAfter: hideAfter,
            stack: 1,
            position: 'bottom-center',
            textAlign: 'left',
            loader: true,
            loaderBg: '#ffffff',

        });
    }
});
</script>
<h2 class="test"></h2>