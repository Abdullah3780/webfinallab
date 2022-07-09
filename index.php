<!DOCTYPE html>
<?php
// session_unset();
// session_destroy();
  session_start();
if(isset($_SESSION['User_id'])){
    echo "User Already Logged In";
    header("Location: home.php");
}

?>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Login Page</title>
</head>

<body>
    <form method="post" action="home.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="UserName" />
            <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>