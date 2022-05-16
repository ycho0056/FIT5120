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

			.invoice-box table tr.top table td.a {
				padding-bottom: 20px;
				text-align: right;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;

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

			.invoice-box table tr.total td {
				border-bottom: 1px solid #eee;
				font-weight: bold;
			}

			.invoice-box table tr.list td {
				text-decoration: underline;
				font-size: 20px;
				text-align: left;
			}
			.invoice-box table tr.list3 td {
				font-size: 20px;
				text-align: left;
			}
			.invoice-box table tr.list3 a {
				text-decoration: underline;
			}

			.invoice-box table tr.list2 td {
				padding: 5px;
				font-size: 20px;
				text-align: left;
			}
			.invoice-box table tr.result{
				padding: 5px;
				font-size: 20px;
				text-align: center;
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
		$date = date("Y-m-d");
		echo "<div class='invoice-box'>
        		<table cellpadding='0' cellspacing='0' id='myTable'>
				<tr class='top'>
					<td colspan='2'>
						<table>
							<tr>
								<td class='title'>
									<img src='http://postpartumhealthy.tk/wp-content/uploads/2022/04/%E6%9C%AA%E5%91%BD%E5%90%8D%E7%9A%84%E8%AE%BE%E8%AE%A1-removebg-preview-50x50.png' style='width: 50%; max-width: 50px' />
								</td>

								<td class='a'>
									Daily Food List<br />
									Created: $date<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>";

	
			echo'<tr class="heading">
					<td>Calories</td>

					<td>value</td>
                    <td></td>
				</tr>';
				if(!isset($_COOKIE['list'])){
					if(!isset($_COOKIE['recommendation'])){
						echo"<tr class='list2'><td>Want to track your daily intake or make a diet plan? Follow the steps below 👇 </td><tr>";
						echo "<tr class='list3'><td>Step 1: <a href='/nutrition-calculator/' text-decoration: 'underline';>Get your nutrition recommendation here!</a></td><tr>";
						echo "<tr class='list3'><td>Step 2: <a href='/search-food-nutrition/' text-decoration: 'underline';>Add your first food here!</a></td><tr>";
					}
					else{
						echo "<tr class='list2'><td> Want to track your daily intake or make a diet plan? </td><tr>";
						echo "<tr class='list'><td><a href='/search-food-nutrition/' text-decoration: 'underline';>Add your first food here!</a></td><tr>";
					}
				}
				else
				{
					if(!isset($_COOKIE['recommendation'])){
						echo "<tr class='list2'><td> Want to track your daily intake or make a diet plan? </td><tr>";
						echo "<tr class='list'><td><a href='/nutrition-calculator/' text-decoration: 'underline';>Get your nutrition recommendation here!</a></td><tr>";
					}
					else{
						$calories = 0;
						$list = $_COOKIE['list'];
						$list_array = explode(",",$list);
						$arraylenght = count($list_array);
						for($i = 1; $i < $arraylenght; $i++) {
							$id = (int)$list_array[$i];
							global $wpdb;
							  $sql = "SELECT Food_Name,Energy_kJ FROM food_nut_sql WHERE ID = '{$id}'";
							  $result = $wpdb -> get_results($sql);
							if(!empty($result))
							{
								foreach($result as $row)
								{
									echo "<tr class='item'>
									<td>$row->Food_Name</td>
			
									<td>$row->Energy_kJ</td>
                                    <td><button data =$id id='delete' onclick='deleteRow(this)'>Delete</button></td>
                                   
									</tr>";
                                    
									
									$engergy = (int)str_replace(',','',$row->Energy_kJ);
								}
							}
							$calories = $calories + $engergy;
						}
						$recommendation = $_COOKIE['recommendation'];
						echo "<tr class='total'>
										<td>Total:  $calories KJ</td>
									</tr>";
						
						echo "<tr class='total'>
									<td>Recommendation: $recommendation KJ</td>
								</tr>";
						
						if($calories<=1.1*$recommendation and $calories >=0.9*$recommendation)
						{
							echo "<tr class='result'>
							Congratulations! your has reached the target &#9989;
							</tr>";
						}
						elseif($calories > 1.1*$recommendation)
						{
							echo "<tr class='result'>

							<td>your daily calories intake has exceeded the target &#10062;</td>
							</tr>";
						}
						elseif($calories < 0.9*$recommendation)
						{
							echo "<tr class='result'>
							<td>your daily calories intake has not reached the target &#10062;</td>
							</tr>";

						}
					}
				}
			   	echo '</table>';
			echo '</div>';
        
        echo "<script>
        function deleteRow(r) {
          var i = r.parentNode.parentNode.rowIndex;
          document.getElementById('myTable').deleteRow(i);
        }
        </script>";

        echo "<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
        <script>
        jQuery(function($){
            $('#delete').click(function(){
                let foodid = $(this).attr('data');
                let food_list = $.cookie('list');
                var array = food_list.split(',');
                for(let i=1;i<array.length;i++){
                    $('.test').text(array[i]);

                }

            });
        });
        </script>
        <h2 class='test'></h2>";
?>
</body>
</html>
