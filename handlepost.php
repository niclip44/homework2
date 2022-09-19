<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
 
  <form action="handleget.php" method="get">
Age: <input type="text" name="age"><br>
School: <input type="text" name="school"><br>
<input type="submit">
</form>


</body>
</html>
