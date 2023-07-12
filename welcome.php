<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
if(isset($_POST['Issue'])) {
  echo "Your issue is regarding: ".htmlspecialchars($_POST['Issue']);
}
?><br>
Comment: <?php echo $_POST["comment"]; ?>

</body>
</html>