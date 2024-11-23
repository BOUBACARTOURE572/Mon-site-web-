<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // Vous pouvez envoyer un email ou enregistrer les données dans une base ici
  echo "Merci, $name. Nous avons reçu votre message.";
}
?>

<form action="process.php" method="post">
  <input type="text" name="name" placeholder="Nom" required>
  <input type="email" name="email" placeholder="Email" required>
  <textarea name="message" placeholder="Message" required></textarea>
  <button type="submit">Envoyer</button>
</form>

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

#animatedText {
  animation: fadeIn 2s ease-in-out;
}



