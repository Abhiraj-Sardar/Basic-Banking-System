<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'bank';
    
    // Create connection
    $conn = mysqli_connect($host, $user, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        $result=mysqli_query($conn,"select * from transactions");
        $records=mysqli_num_rows($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bd">
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11" style="">
          <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
          <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-lg-flex col-lg-3 justify-content-lg-end">
            <button class="btn btn-primary">Button</button>
          </div>
        </div>
      </div>
    </nav>
    <!-- Table -->
    <div class="container table-container my-190">
        <table class="table table-bordered border-primary table-responsive">
            <thead>
                <tr class="text-center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Current Balance</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <?php
                if($records)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                       echo "<tr><td>".$row["id"]."</td>" ;
                       echo "<td>".$row["name"]."</td>" ;
                       echo "<td>".$row["email"]."</td>" ;
                       echo "<td>".$row["address"]."</td>" ;
                       echo "<td>".$row["phone"]."</td>" ;
                       echo "<td>".$row["balance"]."</td>" ;
                       echo "<td>"."<a href='transaction.php?name=" . $row['name'] . "'>";
                       echo "<button class='btn btn-success'>Transfer Money</button><a>"."</td></tr>" ;
                    }
                }
            ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>