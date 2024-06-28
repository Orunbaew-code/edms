<?php include 'header.php' ?>

<main class="settings">
    <nav>
      <ul>
        <li class="active"><a href="#profile">Profile</a></li>
        <li><a href="#security">Security</a></li>
        <li><a href="#preferences">Preferences</a></li>
        <li><a href="#billing">Billing</a></li>
      </ul>
    </nav>
    <section id="profile">
      <h2>Profil maglumatlary</h2>
      <img src="avatars/user1.png" alt="User Avatar" class="avatar">
      <form action="">
        <label for="username">Ulanyjy ady:</label>
        <input type="text" id="username" value="johndoe123">
        <label for="email">Email Adres:</label>
        <input type="email" id="email" value="johndoe123@example.com">
        <label for="bio">Bio:</label>
        <textarea id="bio">Programmist inžener...</textarea>
        <button type="submit">Ýatda sakla</button>
      </form>
    </section>
    <section id="security" class="hidden">
      <h2>Howpsuzlyk</h2>
      </section>
    <section id="preferences" class="hidden">
      <h2>Maglumat</h2>
      </section>
    <section id="billing" class="hidden">
      <h2>Salgy maglumaty</h2>
      </section>
  </main>
  <script src="settings.js"></script>
</body>
</html>