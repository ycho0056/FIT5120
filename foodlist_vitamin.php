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
           if(isset($_COOKIE['vitamins'])){
            if(isset($_COOKIE['list'])){
                echo "<div class='invoice-box'>
                <table cellpadding='0' cellspacing='0'>
                <tr class='top'>
                    <td colspan='2'>
                        <table>
                            <tr>
                                <td>
                                    
                                </td>

                                <td>
                                  Vitamins<br />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>";

    
                echo'<tr class="heading">
                    <td>Vitamin type</td>

                    <td>Recommendation</td>

                    <td>Intake</td>
                </tr>';
                $list_food = $_COOKIE['list'];
                $list_recommendation = $_COOKIE['vitamins'];
                $list_food_array = explode(",",$list_food);
                $list_recommendation_array = explode(",",$list_recommendation);
                //$arraylenght = count($list_recommendation_array);
                $listlenght = count($list_food_array);
                //sum vitamin
                $c_intake = 0;
                $b6_intake = 0;
                $b12_intake = 0;
                $d_intake = 0;
                $a_intake = 0;
                $Folate_intake = 0;
                for ($a = 1;$a < $listlenght; $a++){
                    $id = (int)$list_food_array[$a];
                    global $wpdb;
                    $sql = "SELECT Pyridoxine_B6_mg,Cobalamin_B12_ug,Vitamin_D3_ug,Vitamin_C_mg,Vitamin_A_ug,Folate_ug FROM food_nut_sql WHERE ID = '{$id}'";
                    $result = $wpdb -> get_results($sql);
                    if(!empty($result)){
                        foreach($result as $row){
                            $c = $row->Vitamin_C_mg;
                            $b6 = $row->Pyridoxine_B6_mg;
                            $b12 = $row->Cobalamin_B12_ug;
                            $d = $row->Vitamin_D3_ug;
                            $vitaminA = (int)$row->Vitamin_A_ug;
                            $Folate = (int)str_replace(',','',$row->Folate_ug);
                            $b6_intake = $b6_intake + $b6;
                            $b12_intake = $b12_intake + $b12;
                            $d_intake = $d_intake + $d;
                            $c_intake = $c_intake + $c;
                            $a_intake = $a_intake + $vitaminA;
                            $Folate_intake = $Folate_intake + $Folate;
                        }
                    }
                }
                echo "<tr class='item'>";
                echo "<td>Vitamin B6 (mg/d)</td>";
                $value = $list_recommendation_array[0];
                echo "<td>$value</td>";
                echo "<td>$b6_intake</td>";

                echo "<tr class='item'>";
                echo "<td>Vitamin B12 (ug/d)</td>";
                $value = $list_recommendation_array[1];
                echo "<td>$value</td>";
                echo "<td>$b12_intake</td>";

                echo "<tr class='item'>";
                echo "<td>Vitamin D (ug/d)</td>";
                $value = $list_recommendation_array[2];
                echo "<td>$value</td>";
                echo "<td>$d_intake</td>";

                echo "<tr class='item'>";
                echo "<td>Vitamin C (mg/d)</td>";
                $value = $list_recommendation_array[3];
                echo "<td>$value</td>";
                echo "<td>$c_intake</td>";

                echo "<tr class='item'>";
                echo "<td>Vitamin A (ug/d)</td>";
                $value = $list_recommendation_array[4];
                echo "<td>$value</td>";
                echo "<td>$a_intake</td>";

                echo "<tr class='item'>";
                echo "<td>Folate (ug/d)</td>";
                $value = $list_recommendation_array[5];
                echo "<td>$value</td>";
                echo "<td>$Folate_intake</td>";
            }
            echo '</table>';
            echo '</div>';
           }     
        ?>
    </body>
</html>

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
           if(isset($_COOKIE['recommendation2'])){
            if(isset($_COOKIE['list'])){
                echo "<div class='invoice-box'>
                <table cellpadding='0' cellspacing='0'>
                <tr class='top'>
                    <td colspan='2'>
                        <table>
                            <tr>
                                <td>
                                    
                                </td>

                                <td>
                                  Base<br />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>";

    
                echo'<tr class="heading">
                    <td>Nutrition Type</td>

                    <td>Recommendation</td>

                    <td>Intake</td>
                </tr>';
                $list_food = $_COOKIE['list'];
                $list_recommendation = $_COOKIE['recommendation2'];
                $list_food_array = explode(",",$list_food);
                $list_recommendation_array = explode(",",$list_recommendation);
                //$arraylenght = count($list_recommendation_array);
                $listlenght = count($list_food_array);
                //sum vitamin
                $Protein_intake = 0;
                $Carbohydrate_intake = 0;
                for ($a = 1;$a < $listlenght; $a++){
                    $id = (int)$list_food_array[$a];
                    global $wpdb;
                    $sql = "SELECT Protein_g,carbohydrate_g FROM food_nut_sql WHERE ID = '{$id}'";
                    $result = $wpdb -> get_results($sql);
                    if(!empty($result)){
                        foreach($result as $row){
                            $Protein = $row->Protein_g;
                            $Carbohydrate = $row->carbohydrate_g;
                            $Protein_intake = $Protein_intake + $Protein;
                            $Carbohydrate_intake = $Carbohydrate_intake + $Carbohydrate;
                        }
                    }
                }
                echo "<tr class='item'>";
                echo "<td>Protein (g/d)</td>";
                $value = $list_recommendation_array[0];
                echo "<td>$value</td>";
                echo "<td>$Protein_intake</td>";

                echo "<tr class='item'>";
                echo "<td>Carbohydrate (g/d)</td>";
                $value = $list_recommendation_array[1];
                echo "<td>$value</td>";
                echo "<td>$Carbohydrate_intake</td>";
            }
            echo '</table>';
            echo '</div>';
           }     
        ?>
    </body>
</html>