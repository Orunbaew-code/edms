<!-- Header, Navigation-->

<?php include 'header.php' ?>

<!-- Header, Navigation-->

  <?php
    $servername = "localhost"; // Replace with your actual database server address
    $username = "admin"; // Replace with your database username
    $password = "admin"; // Replace with your database password
    $dbname = "nuryyew"; // Replace with your actual database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
    $sql = "SELECT * FROM users";
    $users_list = $conn->query($sql);
    
    session_start();
    if (isset($_SESSION["user_role"])){
      $user_role = $_SESSION["user_role"];
      if ($user_role == "admin"){
        ?>
        <br><br>
        <form class="addNewAssignment" action="process.php" method="post"> 
          <div class="form-group">
            <label for="assignment_name_label">Tabşyrygyň ady:</label>
            <textarea id="assignment_name" name="assignment_name" rows="1" cols="50" required></textarea>
            <label for="assignment_text_label">Tabşyrygyň teksti:</label>
            <textarea id="assignment_text" name="assignment_text" rows="5" cols="50" required></textarea>
            <label for="user">Kabul ediji:</label>
            <select name="assignment_to" id="assignment_to">
              <?php
                while ($row = $users_list->fetch_assoc()){
              ?>
              <option value="<?php echo $row['username']?>"><?php echo $row['username']?></option>
              <?php } ?>
            </select>
          </div>
          <br><br>
          <button type="submit">Tabşyryk ugratmak</button>
        </form>
        
        
      <?php
      }
    }
  ?>

  <title>Tabşyrykar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .assignment-card {
      border: 1px solid #ddd;
      border-radius: 25px;
      padding: 15px;
      margin: 10px;
    }
    .done { background-color: #dff0d8; }
    .working { background-color: #fafad2; }
    .not-started { background-color: #ffffff; }
  </style>
</head>
<body>
  <h1>Tabşyrykar</h1>
  <?php 
    $status[0] = null;
    $status[1] = "Ýagdaýy: Işlenlýär!";
    $status[2] = "Ýagdaýy: Edildi!";
    
    $statusEng[0] = "not-started";
    $statusEng[1] = "working";
    $statusEng[2] = "done";
    

    $sql = "SELECT * FROM assignments";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
  ?>
  <div class="assignment-card <?php echo $statusEng[$row["status"]]?>">
    <h3><?php echo $row["name"] ?></h3>
    <p><?php echo $row["text"] ?></p>
    <p><?php echo $row["date"] ?></p>
    <p><?php echo $status[$row["status"]]; ?> </p>
    <?php
      if ($status[$row["status"]] == 0){ ?>
        <a href="update-status.php?id=<?php echo $row["id"]?>&status=2">Edildi bellemek</a>
        <a href="update-status.php?id=<?php echo $row["id"]?>&status=1">IIenilýär bellemek</a>
      <?php
      }
    ?>

  </div>
  
  <?php
    }
  ?>
</body>
</html>
