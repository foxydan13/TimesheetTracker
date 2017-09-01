<html>
<head>
  <title>Ducky and Dan's Tantalising Timesheet Tracker</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>  
  <h1>Ducky and Dan's Tantalising Timesheet Tracker</h1>
    <form id="contact" action="index.php" method="post">
      <textarea name="comments" placeholder="Please enter your comments or questions..."></textarea>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </form>
  </br>
</br>
    <?php 
    $comments = $_POST["comments"];
    if(!($comments == '' || $comments === NULL)){
        echo $comments;
        echo $_SERVER['REQUEST_URI'];
    }
    ?>
 
</body>
</html>