<?php 
require("./userModel.php");
$tmpName = getName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
    <!-- <script type="text/javascript" src="jquery-3.5.1.min.js"></script> -->
    <script language="javascript">
        function load(){
            console.log("window loaded");
            
        }
        window.onload = load;
    // function showName(){
    //     return;
    // }
    function showName() {
        console.log("showName loaded");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("List").value = this.responseText;
                console.log(this.responseText);
            }
        }
        xmlhttp.open("GET", "get_drowlots_name.php", true);
        xmlhttp.send();
    }

</script>
</head>
<body>
<!-- <div class="card">&nbsp</div> -->
<div class="container">
    <div class="row-mt-8 ustify-content-md-center">
        <br><br>
        <div class="col-mt-8">
            <div class="card">
            <h5 class="card-header">抽籤</h5>
                <div class="card-body">
                    <h5 class="card-title">隨機抽取已點名之學生</h5>
                    <input type="text" id="List" value="" class="form-control">
                    <br>
                    <a onclick="showName()" class="btn btn-outline-success">push</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>