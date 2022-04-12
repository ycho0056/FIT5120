<center div style=font-size:20px>
    <form action="http://47.74.84.126/search-food-nutrition/" method="POST">
        <input type="text" name="id" placeholder="Enter" />
        <input type="submit" name="search" value="Search" />
    </form>
</center>
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
              $sql = "SELECT * FROM food_nut_sql WHERE ID = '{$id}'";
              $result = $wpdb -> get_results($sql);
              if(!empty($result))
              {
                 foreach($result as $row)
              	{
                 echo "<h6 style='text-align:center;line-height:0.5'>Nutrition Fact</h6>";
                 echo "<h5 style='text-align:center;line-height:0.5'>$row->Food_Name</h5>";
                 echo "<table><tr><th>Nutrition</th><th>Value</th><th>capacity</th></tr>";
                 echo "<tr><th>Protein</th><th>$row->Protein_g(g)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Energy</th><th>$row->Energy_kJ(KJ)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Fat</th><th>$row->Fat_g(g)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Carbohydrate</th><th>$row->carbohydrate_g(g)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Sugars</th><th>$row->sugars_g(g)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Sodium_Na</th><th>$row->Sodium_Na_mg(mg)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Zinc_Zn</th><th>$row->Zinc_Zn_mg(mg)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Folate</th><th>$row->Folate_ug(ug)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Pyridoxine_B6</th><th>$row->Pyridoxine_B6_mg(mg)</th><th>$row->per_100g</th></tr>";
                 echo "<tr><th>Cobalamin_B12</th><th>$row->Cobalamin_B12_ug(ug)</th><th>$row->per_100g</th></tr>";
                 echo "</table>";
                }
              }
            }
        ?>
</html>