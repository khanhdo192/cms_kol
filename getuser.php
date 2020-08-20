
<?php
    include('db_connect.php');
    if(isset($_POST['getuser'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $query = "INSERT INTO user (username,password,role) VALUES ('$username','$password','$role')";
        $query_run = mysqli_query($connection, $query);
    }

?>