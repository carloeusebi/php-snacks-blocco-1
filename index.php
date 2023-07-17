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
    </section>
  </main>
</body>

</html>