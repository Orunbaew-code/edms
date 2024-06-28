<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awtoulag kärhanasy</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="main.php">Resminamalar</a></li>
        <li><a href="newDoc.php">Resminama goşmak</a></li>
        <li><a href="assignments.php">Tabşyryklar</a></li>
        <li><a href="chat.php">Chat</a></li>
        <li>
          <?php
          session_start();
          if (isset($_SESSION["username"])) {
            $user_id = $_SESSION["username"];
            echo "<a href='settings.php'>$user_id</a>"; // Wrap username in an anchor tag for better styling
          }
          ?>
        </li>
        <li><a href="index.php">Ulgamdan çykmak</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>
