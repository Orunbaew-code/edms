<!-- Header, Navigation-->

<?php include 'header.php'; 
    // Database connection details
    session_start();
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

    $sql = "SELECT * FROM documents";
    $result = $conn->query($sql);
    
?>
<!-- Header, Navigation-->
        <section class="document-filter">
            <form action="documents.html" method="get">
            <div class="search-group">
                <input type="text" name="search" placeholder="Resminama gözlemek">
                    <select name="category">
                        <option value="">Kategoriýalar</option>
                        <option value="Project A">Project A</option>
                        <option value="Project B">Project B</option>
                        </select>
                    <button type="submit">Filter</button>
                </div>
            </form>
        </section>
    <main>
        
    <section class="document-list">
        <?php
            $sql = "SELECT * FROM documents";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()){
        ?>

                <div class="document-item">
                    <h3>Ady: <?php echo $row["name"]; ?></h3>
                    <p>Awtor: <?php echo $row["author"]; ?></p>
                    <p>Sene: <?php echo $row["date"]; ?></p>
                    <p>Bellik: <?php echo $row["comment"]; ?></p>
                    <a href="documents/<?php echo $row["unique_name"]?>">Ýüklemek</a>
                    <a href="#">Paýlaşmak</a>
                    <a href="#">Syn ýazmak</a>
        </div> 
        <?php } ?>
    </section>
    </main>
    <?php $conn->close(); ?>
</body>
</html>