//recommendation -base
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
                    if(!isset($_COOKIE['recommendation2'])){
                        echo "<tr class='list2'><td>You have not submit your Physical Condition Form yet</td><tr>";
                        echo "<tr class='list'><td><a href='/nutrition-calculator/' text-decoration: 'underline';>Go to Nutrition Calculator Now !</a></td><tr>";
                    }
                    else
                    {
                        $list = $_COOKIE['recommendation2'];
					    $list_array = explode(",",$list);
                        echo "<tr class='item'><td>Protein (g/d)</td><td>$list_array[0] g</td></tr>";
                        echo "<tr class='item'><td>Carbohydrate (g/d)</td><td>$list_array[1] g</td></tr>";
                    }  
                  echo '</table>';
              echo '</div>';
        ?>
    </body>
</html>

//recommendation -vitamin
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
                    <td>Nutrition Type</td>

                        <td>Recommended Intake</td>
                    </tr>';
                    $list = $_COOKIE['vitamins'];
					$list_array = explode(",",$list);
                    echo "<tr class='item'><td>Vitamin B6 (mg/d)</td><td>$list_array[0] g</td></tr>";
                    echo "<tr class='item'><td>Vitamin B12 (ug/d)</td><td>$list_array[1] g</td></tr>";
                    echo "<tr class='item'><td>Vitamin D (ug/d)</td><td>$list_array[2] g</td></tr>";
                    echo "<tr class='item'><td>Vitamin C (mg/d)</td><td>$list_array[3] g</td></tr>";
                    echo "<tr class='item'><td>Vitamin A (ug/d)</td><td>$list_array[4] g</td></tr>";
                    echo "<tr class='item'><td>Folate (ug/d)</td><td>$list_array[5] g</td></tr>";
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
            if(isset($_COOKIE['minerals'])){
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
                    <td>Nutrition Type</td>

                        <td>Recommended Intake</td>
                    </tr>';
                    $list = $_COOKIE['vitamins'];
					$list_array = explode(",",$list);
                    echo "<tr class='item'><td>Sodium (g/d)</td><td>$list_array[0] g</td></tr>";
                    echo "<tr class='item'><td>Zinc (mg/d)</td><td>$list_array[1] g</td></tr>";
                    echo "<tr class='item'><td>Iron (mg/d)</td><td>$list_array[2] g</td></tr>";
                    echo "<tr class='item'><td>Calcium (mg/d)</td><td>$list_array[3] g</td></tr>";
                    echo "<tr class='item'><td>Selenium (ug/d)</td><td>$list_array[4] g</td></tr>";
                    echo '</table>';
                    echo '</div>';
            }
        ?>
    </body>
</html>