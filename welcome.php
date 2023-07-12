<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
<?php
if(isset($_POST['formIssue'])) {
  echo "Your issue is regarding: ".htmlspecialchars($_POST['formIssue']);
}
?><br>
Comment: <?php echo $_POST["comment"]; ?>

</body>
</html>