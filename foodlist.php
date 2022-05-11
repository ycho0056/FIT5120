
<?php
    echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>

    <script>
        jQuery(function($){
            let food_list = $.cookie('list');
            const array = food_list.split(',');
    
            $('.test').text(array[1]);
        });
    </script>
    <h2 class='test'></h2>";
?>



<?php
    $list = $_COOKIE['list'];
    $recommendation = $_COOKIE['recommendation']
    echo $recommendation;
    echo gettype($list);
    $list_array = explode(",",$list);
    $arraylenght = count($list_array);
    for($i = 1; $i < $arraylenght; $i++) {

        $id = $list_array[$i];
        echo $list_array[$i];
    
        echo "</ br>";

    
    }
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
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

			.invoice-box table tr.total td:nth-child(2) {
				border-bottom: 1px solid #eee;
				font-weight: bold;
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

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>
<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="http://postpartumhealthy.tk/wp-content/uploads/2022/04/%E6%9C%AA%E5%91%BD%E5%90%8D%E7%9A%84%E8%AE%BE%E8%AE%A1-removebg-preview-50x50.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Daily Food List<br />
									Created: January 1, 2015<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="heading">
					<td>Protein</td>

					<td>value</td>
				</tr>

				<tr class="item">
					<td>Website design</td>

					<td>$300.00</td>
				</tr>

				<tr class="item">
					<td>Hosting (3 months)</td>

					<td>$75.00</td>
				</tr>

				<tr class="item last">
					<td>Domain name (1 year)</td>

					<td>$10.00</td>
				</tr>
				<tr class="total">
					<td></td>

					<td>TOTAL: <?php echo 'a';?></td>
				</tr>
                <tr class="total">
					<td></td>

					<td>Recommendation: <?php echo 'a';?></td>
				</tr>
			</table>
		</div>
	</body>
</html>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
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

			.invoice-box table tr.total td:nth-child(2) {
				border-bottom: 1px solid #eee;
				font-weight: bold;
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

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>
<body>
<?php
		echo '<div class="invoice-box">
        		<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="http://postpartumhealthy.tk/wp-content/uploads/2022/04/%E6%9C%AA%E5%91%BD%E5%90%8D%E7%9A%84%E8%AE%BE%E8%AE%A1-removebg-preview-50x50.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Daily Food List<br />
									Created: January 1, 2015<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>';

	echo '</div>';
    echo'<tr class="heading">
					<td>Calories</td>

					<td>value</td>
				</tr>';
    $calories = 0;
    for($i=0;$i<3;$i++)
    {
    	
    	echo '<tr class="item">
					<td>Apple</td>

					<td>45KJ</td>
				</tr>';
       $calories = $calories + 45;
    }
    echo '<tr class="total">
					<td></td>

					<td>Recommendation: $calories</td>
				</tr>';
?>
</body>

</html>