<!-- Header, Navigation-->

<?php include 'header.php' ?>

<!-- Header, Navigation-->
<body>
<br><br><br>
  <main class="mainChat">
    <div class="contacts">
      <ul id="group-list">
        <a href="#">
          <li data-group-id="1">
            <img class="avatar" alt="avatar" src="avatars/user1.png" alt="John Doe">
            <span class="group-name">Toplum 1</span>
            <span class="unread-messages">3</span>
          </li>
        </a>
        <a href="#">
          <li data-group-id="2">
            <img class="avatar" alt="avatar" src="avatars/user1.png" alt="John Doe">
            <span class="group-name">Topar A</span>
            <span class="unread-messages">0</span>
          </li>
        </a>
      </ul>
      <ul id="user-list">
        <a href="#">
          <li data-user-id="1">
            <img class="avatar" alt="avatar" src="avatars/user1.png" alt="John Doe">
            <span class="username">John Doe</span>
            <span class="online-status">Online</span>
          </li>
        </a>
        <a href="#">
          <li data-user-id="2">
            <img class="avatar" alt="avatar" src="avatars/user2.png" alt="Jane Smith">
            <span class="username">Jane Smith</span>
            <span class="online-status">Offline</span>
          </li>
        </a>
      </ul>
    </div>
    <div class="chat-window">
        <ul id="chat-messages">
            <li class="message group-message">
                <img class="avatar" src="avatars/user1.png" alt="John Doe">
                <strong>John Doe:</strong> Salam, "Toplum 1" toparyna goşuldym!
                <span class="timestamp">10:00</span>
            </li>
            <li class="message group-message">
                <img class="avatar" src="avatars/user2.png" alt="Jane Smith">
                <strong>Jane Smith:</strong> Salam, John!  Biz bu ýerde prezentasiýa meselesini maslahatlaşýarys.
                <span class="timestamp">10:05</span>
            </li>
            <li class="message private-message">
                <img class="avatar" src="avatars/user2.png" alt="Jane Smith">
                <strong>Jane Smith:</strong>Salam Sarah, Öňümizdäki ýaryş üçin taýýarlygyňyz nähili?
                <span class="timestamp">14:00</span>
            </li>
            <li class="message private-message">
                <img class="avatar" alt="avatar" src="avatars/user3.png" alt="Sarah White">
                <strong>Sarah White:</strong> Salam David, Iş gowy gidýär! Köp işlenilýär, gündelik tertip üýtgedilýär.
                <span class="timestamp">14:05</span>
            </li>
            <li class="message announcement">
                <strong>Admin:</strong> Üns beriň! Biz size täze önümimizi görmegiňizi maslahat berýaris!
                <span class="timestamp">17:00</span>
            </li>
        </ul>
        <form id="message-form">
            <input type="text" id="message-input" placeholder="Enter your message..." required>
            <button type="submit">Ugratmak</button>
        </form>
    </div>
  </main>
  <script src="js/chat.js"></script>
</body>
</html>

