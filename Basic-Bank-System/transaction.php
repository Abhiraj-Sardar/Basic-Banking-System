<?php
echo $_GET["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/transaction.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="transaction-cards">
        
            <div class="from">
                <form onsubmit=refresh() method="post">
                <h2 style="text-align:center">Depositor Info</h2>
                <hr style="border:2px solid black;">
                <br/>
                <h3 style="text-align:center;color:#000;">Name : Abhiraj Sardar</h3>
                <br/>
                <h3 style="text-align:center;color:#000;">Phone : 8697499539</h3>
                <br/>
                <h3 style="padding-left:15px;color:#000;">Address : Kolkata</h3>
                <br/>
                <br>
                <h4 style="text-align:center;color:#000;">Enter Amount in Rupees:</h4>
                <h3 style="border-radius:50%;"><input type="text" name="amt"></h3>
                <button class="btn btn-success" type="submit">Transfer</button>
                </form>
            </div>
            <div class="logo"></div>
            <div class="to"></div>
        
    </div>
    <div class="history">

    </div>
    <script>
        var refresh=()=>{
            alert();
        }
    </script>
</body>
</html>