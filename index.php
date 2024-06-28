<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awtouag käranasy</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    main{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    </style>
</head>
  <body>
    <main class="mainLogin">
      <div id="login-form">
        <h2>Hoş geldiňiz!</h2>
        <form action="login.php" method="post">
          <label for="username">Ulanyjy ady:</label>
          <input class="inputSec" type="text" name="username" id="username" required>
          <br>
          <label for="password">Açar söz:</label>
          <input class="inputSec" type="password" name="password" id="password" required>
          <br><br><br>
          <button type="submit">Ulgama girmek</button>
        </form>
        <?php if (isset($error_message)): ?>
          <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
      </div>
    </main>
  </body>
</html>
