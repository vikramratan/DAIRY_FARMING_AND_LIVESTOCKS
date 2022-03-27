 <?php include('server.php'); ?> 
<!Doctype html>
<html>
<head>
        <title>user registeration system using php and mysql </title>
        <link rel="stylesheet" type="text/css" href="../../PROJECT/style.css">
</head>
<body>
<div class="header">
     <h2>Login</h2>
     </div>

     <form method="post" action="login.php">
     <!..display validation errors here..>
     <?php include('errors.php'); ?>
     <div class="input-group">
     <label>Username</label>
     <input type="text" name="username">
     </div>
     
     <div class="input-group">
     <label>Password</label>
     <input type="password" name="password">
     </div>
    
     <div class="input-group">
    <button type="submit" name="login" class="btn">Login</button>
	<a href="../../PROJECT/mywebpage.php">button</a>
     </div>
     <p> Not yet a member? <a href="../../PROJECT/register.php">sign up </a>
     </p>
</body>
