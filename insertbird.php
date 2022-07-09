<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Home Page</title>
</head>

<body>
    <form action="index.php" method="post">
        <h1>Enter Bird Info</h1><button type="submit" name="Logout">Log Out</button>
    </form>


    <form method="post" action="result.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bird Name</label>
            <input type="text" class="form-control" id="BirdName" name="BirdName" />

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">FOOD</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="food" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
<?php 
if(isset($_POST['Logout'])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}
if(!isset($_COOKIE['visits'])){
$_COOKIE['visits']=0;}
$value=$_COOKIE['visits']++;
print($value." TIMES YOU VISITED");

        require_once('database.php');
        
    $dbobject=new Database();
    $dbobject->birdlog($_POST['BirdName'],$_POST['food'],$_SESSION['User_id']);


    ?>

</html>