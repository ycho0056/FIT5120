//recommendation-vitamin
<?php
	if (isset($_POST['search'])) {
        $age = (int)$_POST['Age'];
        $type = $_POST['group1'];
        //echo $type;
        global $wpdb;
        $sql = "SELECT Folate_ug_d,Vitamin_B6_mg_d,Vitamin_B12_ug_d,Vitamin_D_ug_d,Vitamin_C_mg_d,Vitamin_A_ug_d FROM dris_sql WHERE Lower_age <= '{$age}' and Upper_age >= '{$age}' and Type LIKE '%$type%'";
        $result = $wpdb -> get_results($sql);
        echo "<table><tr><th>Vitamin Type</th><th> Recommended Intake</th></tr>";
        foreach($result as $row)
        {
            //echo "<h5>Vitamins</h5>";
            echo "<tr><th>Vitamin B6 (mg/d)</th><th>$row->Vitamin_B6_mg_d μg</th></tr>";
            echo "<tr><th>Vitamin B12 (ug/d)</th><th>$row->Vitamin_B12_ug_d μg</th></tr>";
            echo "<tr><th>Vitamin D (ug/d)</th><th>$row->Vitamin_D_ug_d mg</th></tr>";
            echo "<tr><th>Vitamin C (mg/d)</th><th>$row->Vitamin_C_mg_d μg</th></tr>";
            echo "<tr><th>Vitamin A (ug/d)</th><th>$row->VitaminA_μg_d μg</th></tr>";
            echo "<tr><th>Folate (ug/d)</th><th>$row->Folate_ug_d μg</th></tr>";
        }
        echo "</table>";
      }
?>

//recommendation-based
<?php
	if (isset($_POST['search'])) {
        $age = (int)$_POST['Age'];
        $type = $_POST['group1'];
        global $wpdb;
        $sql = "SELECT Protein_g_d,Carbohydrate_g_d,Sugar FROM dris_sql WHERE Lower_age <= '{$age}' and Upper_age >= '{$age}' and Type LIKE '%$type%'";
        $result = $wpdb -> get_results($sql);
        echo "<table><tr><th>Nutrition Type</th><th> Recommended Intake</th></tr>";
        foreach($result as $row)
        {
            //echo "<h5>Vitamins</h5>";
            echo "<tr><th>Protein (g/d)</th><th>$row->Protein_g_d g</th></tr>";
            echo "<tr><th>Carbohydrate (g/d)</th><th>$row->Carbohydrate_g_d g</th></tr>";
            echo "<tr><th>Sugar</th><th>$row->Sugar</th></tr>";
        }
        echo "</table>";
      }
?>

//recommendation-vitamin
<?php
	if (isset($_POST['search'])) {
        $age = (int)$_POST['Age'];
        $type = $_POST['group1'];
        global $wpdb;
        $sql = "SELECT Sodium_g_d,Zinc_mg_d,Iron_mg_d,Calcium_mg_d,Selenium_ug_d FROM dris_sql WHERE Lower_age <= '{$age}' and Upper_age >= '{$age}' and Type LIKE '%$type%'";
        $result = $wpdb -> get_results($sql);
        echo "<table><tr><th>Vitamin Type</th><th> Recommended Intake</th></tr>";
        foreach($result as $row)
        {
            //echo "<h5>Vitamins</h5>";
            echo "<tr><th>Sodium (g/d)</th><th>$row->Sodium_g_d g</th></tr>";
            echo "<tr><th>Zinc (mg/d)</th><th>$row->Zinc_mg_d mg</th></tr>";
            echo "<tr><th>Iron (mg/d)</th><th>$row->Iron_mg_d mg</th></tr>";
            echo "<tr><th>Calcium (mg/d)</th><th>$row->Calcium_mg_d mg</th></tr>";
            echo "<tr><th>Selenium (ug/d)</th><th>$row->Selenium_ug_d μg</th></tr>";
        }
        echo "</table>";
      }
?>
Daily Calories Intake Recommendation
//calories 
<?php
	if (isset($_POST['search'])) {
        $age = (int)$_POST['Age'];
        $type = $_POST['group1'];//-->Females,Pregnancy,Lactation
        $weight_type = $_POST['type'];
        $height = (int)$_POST['Height'];
        $weight = (int)$_POST['Weight'];
        echo "<h5><center>Daily Calories Intake Recommendation</center></h5>";
        echo "<table><tr><th>Type</th><th> Recommended Intake</th></tr>";
        switch($type)
        {
          case "Females":
            if($weight_type == 'KG')
            {
              $result= round(9.247*$weight + 3.098*$height - 4.330*$age + 447.593);
            }
            else
            {
              $result= round(9.247*$weight*0.45359237 + 3.098*$height - 4.330*$age + 447.593);
            }
            echo "<tr><th>Calories (KJ)</th><th>$result KJ</th></tr>";
            echo "</table>";
            break;
          case "Pregnancy":
            if($weight_type == 'KG')
            {
              $result= round(9.247*$weight + 3.098*$height - 4.330*$age + 447.593 + 70);
            }
            else
            {
              $result= round(9.247*$weight*0.45359237 + 3.098*$height - 4.330*$age + 447.593 + 70);
            }
            echo "<tr><th>Calories (KJ)</th><th>$result KJ</th></tr>";
            echo "</table>";
            break;
          case "Lactation":
            if($weight_type == 'KG')
            {
              $result= round(9.247*$weight + 3.098*$height - 4.330*$age + 447.593 + 330);
            }
            else
            {
              $result= round(9.247*$weight*0.45359237 + 3.098*$height - 4.330*$age + 447.593 + 330);
            }
            echo "<tr><th>Calories (KJ)</th><th>$result KJ</th></tr>";
            echo "</table>";
            break;
          default:
            break;
        }
      echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>

      <script>
        jQuery(function($){
            $.cookie('recommendation', $result, { expires: 1, path: '/' });
        });
      </script>";
      }
?>
