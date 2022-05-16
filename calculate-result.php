//recommendation-vitamin
<?php
	if (isset($_POST['search'])) {
        $age = (int)$_POST['Age'];
        $type = $_POST['group1'];
        //echo $type;
        global $wpdb;
        $sql = "SELECT Folate_ug_d,Vitamin_B6_mg_d,Vitamin_B12_ug_d,Vitamin_D_ug_d,Vitamin_C_mg_d,Vitamin_A_ug_d FROM dris_sql WHERE Lower_age <= '{$age}' and Upper_age >= '{$age}' and Type LIKE '%$type%'";
        $result = $wpdb -> get_results($sql);
        echo "<div class='invoice-box'>
                  <table cellpadding='0' cellspacing='0'>
                      <tr class='top'>
                          <td colspan='2'>
                              <table>
                              <tr>
                                  <td>
                                    Vitamins<br />
                                  </td>
                              </tr>
                              </table>
                          </td>
                      </tr>";


                      echo'<tr class="heading">
                      <td>Vitamin Type</td>

                          <td>Recommended Intake</td>
                      </tr>';
                      foreach($result as $row)
                      {
                          //echo "<h5>Vitamins</h5>";
                          echo "<tr class='item'><td>Vitamin B6 (mg/d)</td><td>$row->Vitamin_B6_mg_d μg</td></tr>";
                          echo "<tr class='item'><td>Vitamin B12 (ug/d)</td><td>$row->Vitamin_B12_ug_d g</td></tr>";
                          echo "<tr class='item'><td>Vitamin D (ug/d)</td><td>$row->Vitamin_D_ug_d ug</td></tr>";
                          echo "<tr class='item'><td>Vitamin C (mg/d)</td><td>$row->Vitamin_C_mg_d mg</td></tr>";
                          echo "<tr class='item'><td>Vitamin A (ug/d)</td><td>$row->Vitamin_A_ug_d μg</td></tr>";
                          echo "<tr class='item'><td>Folate (ug/d)</td><td>$row->Folate_ug_d μg</td></tr>";
                          echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
                          <script>
                            jQuery(function($){
                                $.cookie('vitamins', $row->Vitamin_B6_mg_d+','+$row->Vitamin_B12_ug_d+','+$row->Vitamin_D_ug_d+','+$row->Vitamin_C_mg_d+','+$row->Vitamin_A_ug_d+','+$row->Folate_ug_d, { expires: 7, path: '/' });
                            });
                          </script>";
                      }
                  echo '</table>';
          echo '</div>';
  }
?>

//recommendation-based
<html>
    <head>
        <style>
            .invoice-box {
                max-width: 800px;
                margin: auto;
                padding: 30px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                font-size: 16px;
                line-height: 24px;
                color: #555;
            }

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
                border: 0;
            }

            .invoice-box table td {
                padding: 5px;
                vertical-align: top;
                border: 0;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
                font-size: 20px;
                font-weight: bold;
                text-align: center;

            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }
            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: 1px solid #eee;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }
        </style>
    </head>
    <body>
        <?php
          if (isset($_POST['search'])) {
              $age = (int)$_POST['Age'];
              $type = $_POST['group1'];
              global $wpdb;
              $sql = "SELECT Protein_g_d,Carbohydrate_g_d,Sugar FROM dris_sql WHERE Lower_age <= '{$age}' and Upper_age >= '{$age}' and Type LIKE '%$type%'";
              $result = $wpdb -> get_results($sql);
              echo "<div class='invoice-box'>
                  <table cellpadding='0' cellspacing='0'>
                      <tr class='top'>
                          <td colspan='2'>
                              <table>
                              <tr>
                                  <td>
                                      Base<br />
                                  </td>
                              </tr>
                              </table>
                          </td>
                      </tr>";


                      echo'<tr class="heading">
                      <td>Nutrition Type</td>

                          <td>Recommended Intake</td>
                      </tr>';
                      foreach($result as $row)
                      {
                          //echo "<h5>Vitamins</h5>";
                          echo "<tr class='item'><td>Protein (g/d)</td><td>$row->Protein_g_d g</td></tr>";
                          echo "<tr class='item'><td>Carbohydrate (g/d)</td><td>$row->Carbohydrate_g_d g</td></tr>";
                          echo "<tr class='item'><td>Sugar</td><td>$row->Sugar</td></tr>";
                          echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>

                          <script>
                            jQuery(function($){
                                $.cookie('recommendation2', $row->Protein_g_d+','+$row->Carbohydrate_g_d, { expires: 7, path: '/' });
                            });
                          </script>";
                      }
                  echo '</table>';
              echo '</div>';
          }
        ?>
    </body>
</html>

//recommendation-vitamin
<?php
	if (isset($_POST['search'])) {
        $age = (int)$_POST['Age'];
        $type = $_POST['group1'];
        global $wpdb;
        $sql = "SELECT Sodium_g_d,Zinc_mg_d,Iron_mg_d,Calcium_mg_d,Selenium_ug_d FROM dris_sql WHERE Lower_age <= '{$age}' and Upper_age >= '{$age}' and Type LIKE '%$type%'";
        $result = $wpdb -> get_results($sql);
        echo "<div class='invoice-box'>
        <table cellpadding='0' cellspacing='0'>
            <tr class='top'>
                <td colspan='2'>
                    <table>
                    <tr>
                        <td>
                          Minerals<br />
                        </td>
                    </tr>
                    </table>
                </td>
            </tr>";


            echo'<tr class="heading">
            <td>Mineral Type</td>

                <td>Recommended Intake</td>
            </tr>';
            foreach($result as $row)
            {
                echo "<tr class='item'><td>Sodium (g/d)</td><td>$row->Sodium_g_d g</td></tr>";
                echo "<tr class='item'><td>Zinc (mg/d)</td><td>$row->Zinc_mg_d mg</td></tr>";
                echo "<tr class='item'><td>Iron (mg/d)</td><td>$row->Iron_mg_d mg</td></tr>";
                echo "<tr class='item'><td>Calcium (mg/d)</td><td>$row->Calcium_mg_d mg</td></tr>";
                echo "<tr class='item'><td>Selenium (ug/d)</td><td>$row->Selenium_ug_d μg</td></tr>";
                echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
                          <script>
                            jQuery(function($){
                                $.cookie('minerals', $row->Sodium_g_d+','+$row->Zinc_mg_d+','+$row->Iron_mg_d+','+$row->Calcium_mg_d+','+$row->Selenium_ug_d, { expires: 7, path: '/' });
                            });
                          </script>";
            }
            echo '</table>';
        echo '</div>';
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

        echo "<div class='invoice-box'>
        <table cellpadding='0' cellspacing='0'>
            <tr class='top'>
                <td colspan='2'>
                    <table>
                    <tr>
                        <td>
                          Daily Calories Intake Recommendation<br />
                        </td>
                    </tr>
                    </table>
                </td>
            </tr>";


            echo'<tr class="heading">
            <td>Type</td>

                <td>Recommended Intake</td>
            </tr>';
        switch($type)
        {
          case "Females":
            if($weight_type == 'KG')
            {
              $result= round(round(9.247*$weight + 3.098*$height - 4.330*$age + 447.593)*4.18);
            }
            else
            {
              $result= round(round(9.247*$weight*0.45359237 + 3.098*$height - 4.330*$age + 447.593)*4.18);
            }
              echo "<tr class='item'><td>Calories (KJ)</td><td>$result KJ</td></tr>";
              echo '</table>';
            echo '</div>';
          $amount = round($result/271);
          $milk = $amount * 0.1;
          $many = round($result/533);
          $egg = $many * 100;
          $apple_amount = round($result/245);
          $apple = $apple_amount * 100;
          echo "<a>* Hint: $result KJ ≈ $milk L milk</a><br>";
          echo "<a>        $result KJ ≈ $egg g egg</a><br>";
          echo "<a>        $result KJ ≈ $apple g apple</a>";
            break;
          case "Pregnancy":
            if($weight_type == 'KG')
            {
              $result= round(round(9.247*$weight + 3.098*$height - 4.330*$age + 447.593)*4.18);
            }
            else
            {
              $result= round(round(9.247*$weight*0.45359237 + 3.098*$height - 4.330*$age + 447.593)*4.18);
            }
            echo "<tr class='item'><td>Calories (KJ)</td><td>$result KJ</td></tr>";
            echo '</table>';
          echo '</div>';
          $amount = round($result/271);
          $milk = $amount * 0.1;
          $many = round($result/533);
          $egg = $many * 100;
          $apple_amount = round($result/245);
          $apple = $apple_amount * 100;
          echo "<a>* Hint: $result KJ ≈ $milk L milk</a><br>";
          echo "<a>        $result KJ ≈ $egg g egg</a><br>";
          echo "<a>        $result KJ ≈ $apple g apple</a>";
            break;
          case "Lactation":
            if($weight_type == 'KG')
            {
              $result= round(round(9.247*$weight + 3.098*$height - 4.330*$age + 447.593)*4.18);
            }
            else
            {
              $result= round(round(9.247*$weight*0.45359237 + 3.098*$height - 4.330*$age + 447.593)*4.18);
            }
            echo "<tr class='item'><td>Calories (KJ)</td><td>$result KJ</td></tr>";
            echo '</table>';
          echo '</div>';
          $amount = round($result/271);
          $milk = $amount * 0.1;
          $many = round($result/533);
          $egg = $many * 100;
          $apple_amount = round($result/245);
          $apple = $apple_amount * 100;
          echo "<a>* Hint: $result KJ ≈ $milk L milk</a><br>";
          echo "<a>        $result KJ ≈ $egg g egg</a><br>";
          echo "<a>        $result KJ ≈ $apple g apple</a>";
            break;
          default:
            break;
        }
      echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>

      <script>
        jQuery(function($){
            $.cookie('recommendation', $result, { expires: 7, path: '/' });
        });
      </script>";
      }
?>


<?php
	if (isset($_POST['search'])) {
        echo "<h3>Your Recommended Minimums</h3>";
      }
?>