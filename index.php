<?php require "header.php"; ?>
    <main>
      <div class="main-div">
      <h1>Register</h1>
      <form action="action_page.php">
	      	<label for="email">Email</label>
	      	<br/>
			 <input type="text" placeholder="Email" name="email" required>
	      	 <br/>
	        <label for="psw">Password</label>
	        <br/>
	        <input type="password" placeholder="Password" name="psw" required>
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
