<center>
<?php
 if(isset($_GET['ID']))
 {
   $id = (int)$_GET['ID'];
 }
echo "<button data=$id id='this' onclick='openForm()'>Add to Food List</button>";
?>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
jQuery(function($){
$("#this").click(function(){
    let foodname2 = $(this).attr('data');
    let cookie_key = 'list';
    let cookie_food = $.cookie(cookie_key);
    if('undefined' != cookie_food){
        $.cookie(cookie_key, cookie_food+','+foodname2, { expires: 1, path: '/' });
    }else{
        $.cookie(cookie_key, ','+foodname2, { expires: 1, path: '/' });
    }
    showMsg("Add to food list successful！", "success", 2000);
  });
  function showMsg(text, icon, hideAfter) {
        if (heading == undefined) {
            var heading = "Success";
        }
        $.toast({
            text: text,
            heading: heading,
            icon: icon,
            showHideTransition: 'fade',
            allowToastClose: true,
            hideAfter: hideAfter,
            stack: 1,
            position: 'bottom-center',//消息提示框的位置：bottom-left, bottom-right,bottom-center,top-left,top-right,top-center,mid-center。
            textAlign: 'left',
            loader: true,
            loaderBg: '#ffffff',

        });
    }
});
</script>




<html>
<body>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
    background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
    opacity: 1;
    }
    </style>
</head>
<body>
<?php?>
<button class="open-button" onclick="openForm()">Add to food list</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <label for="Weight"><b>Weight</b></label>
    <input type="text" placeholder="Enter food weight" name="weight" required>

    <button type="submit" class="btn" id="submit2">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
jQuery(function($){
$("#submit2").click(function(){
    
    showMsg("Add to food list successful！", "success", 2000);
  });
  function showMsg(text, icon, hideAfter) {
        if (heading == undefined) {
            var heading = "Success";
        }
        $.toast({
            text: text,
            heading: heading,
            icon: icon,
            showHideTransition: 'fade',
            allowToastClose: true,
            hideAfter: hideAfter,
            stack: 1,
            position: 'bottom-center',//消息提示框的位置：bottom-left, bottom-right,bottom-center,top-left,top-right,top-center,mid-center。
            textAlign: 'left',
            loader: true,
            loaderBg: '#ffffff',

        });
    }
});
</script>

</body>
</html>