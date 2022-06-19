<?php
    //connecting database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "notes_db";

    $connection = mysqli_connect($servername,$username,$password,$database);

    if(!$connection){
        echo "your connection will be failed! <br>";
    }

    // insert data

    $insert  = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $ins = "INSERT INTO `notes` ( `title`, `description`) VALUES ('$title', '$description');";
        $call = mysqli_query($connection,$ins);
        if($call){
                $insert  = true;
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error !</strong> Sorry please wait some technical issue. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

        }
    }

    if(isset($_GET['delete']) && !empty($_GET['delete'])){
      $a = $_GET['delete'];
      $q = "DELETE FROM notes WHERE `s.no` = $a";
      mysqli_query($connection,$q);
    }

?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Notes Project</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script>
            $(document).ready( function () {
                 $('#myTable').DataTable();
            } );
        </script>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Notes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <?php

            if($insert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully !</strong> Your data is inserted to te database.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        ?>

        <div class="container mt-4">
            <h2>Add a Notes</h2>
            <form action = "/PHP/crud.php" method= "post">
                <div class="mb-3">
                    <label for="title" class="form-label">Note Title</label>
                    <input type="text" name="title" required class="form-control" id="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Note Description</label>
                    <textarea class="form-control" id="description" required name="description" rows="3" placeholder="Write a note description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
        <div class="container mb-5">
            <table class="table" style="padding-top: 16px" id="myTable">
                <thead class="table-dark ">
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php
                      $sql = "SELECT * FROM `notes`";
                    $result = mysqli_query($connection,$sql);

                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $count = $count + 1;
                        echo "<tr>
                            <td>" . $count . "</td>
                            <td>" . $row['title'] . "</td>
                            <td>" .$row['description'] . "</td>
                            <td><button><a href='?delete=".$row['s.no']."'>delete</a></button></td>
                            </tr>";
                        }
                        echo "<br>";
                        
                    ?>
                        
                </tbody>
            </table>
        </div>
            
        
    </body>
</html>