<html>
<head>
  <title>Ducky and Dan's Tantalising Timesheet Tracker</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>  
  <h1>Ducky and Dan's Tantalising Timesheet Tracker</h1>
  <?php

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    echo $url;
  ?> 
</body>
</html>