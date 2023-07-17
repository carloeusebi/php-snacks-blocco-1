<?php

if (isset($_GET['paragraph'])) {
  $paragraphs = explode('.', $_GET['paragraph']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta age="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-snacks-blocco-1</title>
</head>

<body>
  <main>
    <!--  LINK TO BASKET MATCHES -->
    <section id="basket">
      <h2>Basket games</h2>
      <a href="basket.php">Check basket games</a>
      <hr>
    </section>


    <!-- VERIFY FORM -->
    <section id="verify-form">
      <h2>Verify:</h2>
      <form action="verify.php" method="get" novalidate>
        <!-- All fields are type 'text' to allow all parameters to pass through html validation and get validate only via php validation -->
        <!-- name -->
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <!-- mail -->
        <label for="email">Email: </label>
        <input type="text" name="email" id="email">
        <!-- age -->
        <label for="age">Age: </label>
        <input type="text" name="age" id="age">

        <button>Verify</button>
      </form>
      <hr>
    </section>

    <!-- PARAGRAPH DIVIDER -->
    <h2>Paragraph divider</h2>
    <h4>You can copy this paragraph for testing purposes :)</h4>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <form action="" method="get" novalidate>
      <label for="paragraph">Enter a text with several sentences separated by dots "."</label><br>
      <textarea name="paragraph" id="paragraph" cols="60" rows="10"></textarea><br>
      <button>Split into paragraphs</button>
    </form>
    <?php if (isset($paragraphs)) : ?>

      <?php foreach ($paragraphs as $paragraph) : ?>
        <p><?= $paragraph ?></p>
      <?php endforeach ?>

    <?php endif    ?>
  </main>
</body>

</html>