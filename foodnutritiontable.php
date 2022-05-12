<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<?php
             if(isset($_GET['ID']))
            {
              $id = (int)$_GET['ID'];
              global $wpdb;
              $sql = "SELECT ID,FoodName,Energy_kJ_,VitaminA_µg_,VitaminC_mg_,VitaminE_mg_,VitaminE_mg_ FROM nutri WHERE ID = '{$id}'";
              $result = $wpdb -> get_results($sql);
              if(!empty($result))
              {
                 foreach($result as $row)
              	{
                 echo "<h6 style='text-align:center;line-height:0.5'>Nutrition Fact</h6>";
                 echo "<h5 style='text-align:center;line-height:0.5'>$row->FoodName</h5>";
                 echo "<tr><th>Energy_kJ&emsp;&emsp;&emsp;</th><th>$row->Energy_kJ_</th></tr>";
                 echo "<table><tr><th>Item</th><th>Value</th></tr>";
                 echo "<tr><th>Energy_kJ</th><th>$row->Energy_kJ_</th></tr>";
                 echo "<tr><th>VitaminA_µg</th><th>$row->VitaminA_µg_</th></tr>";
                 echo "<tr><th>VitaminC_mg</th><th>$row->VitaminC_mg_</th></tr>";
                 echo "<tr><th>VitaminE_mg</th><th>$row->VitaminE_mg_</th></tr>";
                 echo "</table>";
                }
              }
            }
        ?>
</html>


<div class="fav-list"></div>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
    jQuery(function($) {
        
            let cookie_key = 'fav-food';
            let cookie_food = $.cookie(cookie_key);
            $('.fav-list').html(cookie_food);
    });
</script>