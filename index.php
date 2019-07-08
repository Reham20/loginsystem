<?php require "header.php"; ?>
    <main>
    <section class="container">  
      <?php
          if (isset($_GET['error'])){
          if($_GET['error'] == "emptyfields"){
            echo "<span>"."Fill Your inputs"."</span>";
          }
          elseif($_GET['error'] == "ivalidusernameormail"){
            echo "<span>"."Fill Your inputs"."</span>";
          }
          elseif ($_GET['error'] == "ivalidmail") {
            echo "<span>"."Your mail is not valid"."</span>";
          }
          elseif ($_GET['error'] == "passwordchedkid") {
            echo "<span>"."The Password Is Not Matched"."</span>";
          }
          elseif ($_GET['error'] == "usertaken") {
            echo "<span>"."This UserName Is Taken"."</span>";
          }
          elseif ($_GET['error'] == "serror") {
            header("Location:index.php");
            exit();
          }
        }elseif (isset($_GET['signup']) && $_GET['signup'] == "success"){
        echo "<span class='success'>"."You'r successfully Signup "."</span>";
      }
      ?>
      </div>
      </section>

      <div class="main-div">
      <h1>Register</h1>
      <form action="action_page.php">
           <label for="Full Name">Full Name</label>
           <br/>
           <input type="text" placeholder="Your Full Name" name="Full Name" required>
           <br/>

	      	<label for="email">Email</label>
	      	<br/>
			 <input type="text" placeholder="Enter Email" name="email" required>
	      	 <br/>
	        <label for="psw">Password</label>
	        <br/>
	        <input type="password" placeholder="Enter Password" name="psw" required>
	        <br/>
	        <label for="psw-repeat">Repeat Password</label>
	        <br/>
	        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	        <br/>
   			<button type="submit" class="registerbtn">Register</button>
	</form>
      </div>
    </main>
<?php require "footer.php"; ?>
