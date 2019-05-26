<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <H1>Sign Up</H1>
  <body>
    <form class="form" action="addUser.php" method="post">
      <label>Name: <input type="text" name="username"></label>
      <label><br>Password: <input type="text" name="password"></label>
      <input type="submit" value="Submit">
      <input type="hidden" name="sub">
      <?php
        if(isset($_POST["username"])&&isset($_POST["sub"])) {
          include 'connectDB.php';
          $username = $_POST['username'];
          $password = $_POST['password'];          
          $conn = OpenCon();

          $exist = $conn->query("SELECT 1 FROM SE_1b");
          if ($exist!==false) {
              //table checked! do nothing, continues to insert into database.
          } else {            
              //if table is not exists, create table.
              $sql_create = "CREATE TABLE SE_1b (USERNAME VARCHAR(255) PRIMARY KEY, PASSWORD VARCHAR(255), ADDRESS VARCHAR(255), DATEDELI VARCHAR(255))";
              $conn->query($sql_create);
          }

          $sql_insert = "INSERT INTO SE_1b VALUES ('$username','$password')";

          if($conn->query($sql_insert)===TRUE) {
            echo "<strong><p>Sign Up Successful!";
          }else {
            echo "Error: ".$sql_insert."<br>".$conn->error;
          }
        }
       ?>
      <br><a href="index.php">Back to Home Page</a>
  </form>
  </body>
</html>
