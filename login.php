<?php include('inc/header.inc.php') ?>

 	  <form method="POST" action="index.html" class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="user_name" class="sr-only">User Name</label>
        <input type="text" id="user_name" class="form-control" placeholder="User Name" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

<?php include('inc/footer.inc.php') ?>