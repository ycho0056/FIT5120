<center div style=font-size:20px>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Enter" />
        <input type="submit" name="search" value="Search" />
    </form>
</center>
<br>
<?php
if (isset($_POST['search'])) {
    $name = $_POST['id'];
    global $wpdb;
    $sql = "SELECT ID,Food_Name FROM food_nut_sql WHERE Food_Name LIKE '%$name%'";
    $result = $wpdb->get_results($sql);
    echo "<t>Search result for: </t><t>$name</t>";
    echo "<h5>Select a Food</h5>";
    if (!empty($result)) {
        foreach ($result as $row) {
            echo "<p><a href='/search-detail/?ID=" . $row->ID . "'>$row->Food_Name</a> ==> <a href=\"#\" data='" . $row->Food_Name . "' class=\"add_to_fav\">Add to Food List</a></p>";
        }
    }
}
elseif(isset($_GET['id']))
{
  $name = $_GET['id'];
  global $wpdb;
  $sql = "SELECT ID,Food_Name FROM food_nut_sql WHERE Food_Name LIKE '%$name%'";
  $result = $wpdb->get_results($sql);
  echo "<t>Search result for: </t><t>$name</t>";
  echo "<h5>Select a Food</h5>";
  if (!empty($result)) {
    foreach ($result as $row) {
        echo "<p><a href='/search-detail/?ID=" . $row->ID . "'>$row->Food_Name</a> ==> <a href=\"#\" data='" . $row->ID . "' class=\"add_to_fav\">Add to Food List</a></p>";
    }
}
}
?>

<div class="fav-list" style="background:red;"></div>
<p id="test"></p>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
    jQuery(function($) {
        $('.add_to_fav').on('click', function() {
            let cookie_key = 'fav-food';
            let foodname = $(this).attr('data');
            $("test").text(foodname);
            $('.fav-list').append('<p>'+foodname+'<\/p>');
            console.log(foodname);
            let cookie_food = $.cookie(cookie_key);
            if('undefined' != cookie_food){
                $.cookie(cookie_key, cookie_food+'###'+foodname, { expires: 1, path: '/' });
            }else{
                $.cookie(cookie_key, foodname, { expires: 1, path: '/' });
            }
            console.log($.cookie(cookie_key));
            return false;
        });
    });
</script>

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
            text: text,//消息提示框的内容。
            heading: heading,//消息提示框的标题。
            icon: icon,//消息提示框的图标样式。
            showHideTransition: 'fade',//消息提示框的动画效果。可取值：plain，fade，slide。
            allowToastClose: true,//是否显示关闭按钮。(true 显示，false 不显示)
            hideAfter: hideAfter,//设置为false则消息提示框不自动关闭.设置为一个数值则在指定的毫秒之后自动关闭消息提框
            stack: 1,//消息栈。同时允许的提示框数量
            position: 'top-center',//消息提示框的位置：bottom-left, bottom-right,bottom-center,top-left,top-right,top-center,mid-center。
            textAlign: 'left',//文本对齐：left, right, center。
            loader: true,//是否显示加载条
			//bgColor: '#FF1356',//背景颜色。
			//textColor: '#eee',//文字颜色。
            loaderBg: '#ffffff',//加载条的背景颜色。
        });
    }
});
</script>

<h2 class="test"></h2>