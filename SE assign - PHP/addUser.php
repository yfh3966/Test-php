<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
	<title>Sign Up</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="styles.css" />
	<script type="text/javascript" src="xhr.js"></script>
    <script type="text/javascript" src="simpleajax.js"> </script>
    <title></title>
  </head>
    <H1>Sign Up</H1>
  <body>
    <header class="main-header">                    
		<h1 class="band-name band-name-large">TreeCo</h1>
	</header>
        <section class="content-section container">
          <h2 class="section-header">Sign Up</h2>			
			
    <form class="form" action="addUser.php" method="post">
      <label>Name: <input type="text" name="name"></label>
      <label><br>Password: <input type="text" name="password"></label></br></br>
      <input type="submit" value="Sign Up"></br>
      <input type="hidden" name="sub"></br>
      
	  <?php
        if(isset($_POST["name"])&&isset($_POST["sub"])) {
          include 'connectDB.php';
          $name = $_POST['name'];
          $pwd = $_POST['password'];
          $email = $_POST['email'];
          $conn = OpenCon();

          $exist = $conn->query("SELECT 1 FROM Ajax");
          if ($exist!==false) {
              //table checked! do nothing, continues to insert into database.
          } else {
              //if table is not exists, create table.
              $sql_create = "CREATE TABLE Ajax (NAME VARCHAR(50) PRIMARY KEY, PWD VARCHAR(20), EMAIL VARCHAR(50))";
              $conn->query($sql_create);
          }

          $sql_insert = "INSERT INTO Ajax VALUES ('$name','$pwd','$email')";

          if($conn->query($sql_insert)===TRUE) {
            echo "<strong><p>Insert!";
          }else {
            echo "Error: ".$sql_insert."<br>".$conn->error;
          }
        }
       ?>
      <br><a href="index.php">Back to Home Page</a>
  </form>    
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">TreeCo</h3>
        </div>
    </footer>
  </body>
</html>




 
