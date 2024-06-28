<?php include 'header.php'?>
<br><br><br><br><br>
<form class="addNewDoc" style="display: padding: 50px; margin: 50px;" action="upload.php" method="post" enctype="multipart/form-data">
        <label for="document">Faýly saýlamak:</label>
        <input type="file" name="document" id="document" accept=".pdf,.docx,.xlsx,.txt" required>
        <br><br>
        <label for="comment">Faýl barada maglumat (Hökmandy däl):</label>
        <textarea name="comment" id="comment" rows="4" cols="50"></textarea>
        <br><br>
        <button type="submit">Ýüklemek</button>
    </form>