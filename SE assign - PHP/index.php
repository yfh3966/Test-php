<!DOCTYPE html>
<html>
    <head>
        <title>Plant A Tree</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
	<script type="text/javascript" src="xhr.js"></script>
    	<script type="text/javascript" src="simpleajax.js"> </script>
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                     <li><a href="category.php">CATEGORY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </nav>

            <h1 class="band-name band-name-large">TreeCo</h1>
						</header>
            <section class="content-section container">
            <h2 class="section-header">HOME</h2>
            
            <form>
	            <label>User Name:  <input type="text" name="username"></label>
	            <label><br>Password:  <input type="text" name="password"></label><br><br>
		    <input name="submit" type ="button" onClick = "getData('data.php','targetDiv', username.value, password.value) " value = "Login">
	    </form>
	            <p><a href="addUser.php"> Sign Up</a></br></p>
	            <p><a href="category.php"> Continue Without Login</a></br></p>
            	    
		   <div id="targetDiv">
	    		<p>Show here when login successful!</p>
		   </div>
            
            </section>
      
     <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">TreeCo</h3>
        </div>
    </footer>
</body>
</html>
