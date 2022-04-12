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