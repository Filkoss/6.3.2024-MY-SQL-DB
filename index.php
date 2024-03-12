<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!--Pokud uzivatel je jiz v databazi vyhodi program error, nepodarilo se mi udelat exception -->
  <form id="form-example" class="form-example">
    <div class="form-example">
      <label for="name">Username</label>
      <input type="text" name="username" id="username" required />
    </div>
    <div class="form-example">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" />
    </div>
    <div class="form-example">
      <button type="button" id="login-btn">Login</button>
      <button type="button" id="register-btn">Register</button>
    </div>

  </form>

  <script>
    document.getElementById('login-btn').addEventListener('click', function () {
      var form = document.getElementById('form-example');
      var formData = new FormData(form);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'login.php', true);
      xhr.onload = function () {
        // Zpracování odpovědi
        if (xhr.status >= 200 && xhr.status < 300) {
          // Úspěšně zpracovaná odpověď, zde můžeš provést další akce
          console.log(xhr.responseText);
        } else {
          // Chyba při zpracování požadavku
          console.error('Chyba při zpracování požadavku.');
        }
      };
      xhr.send(formData);
    });

    document.getElementById('register-btn').addEventListener('click', function () {
      var form = document.getElementById('form-example');
      var formData = new FormData(form);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'register.php', true);
      xhr.onload = function () {
        // Zpracování odpovědi
        if (xhr.status >= 200 && xhr.status < 300) {
          // Úspěšně zpracovaná odpověď, zde můžeš provést další akce
          console.log(xhr.responseText);
        } else {
          // Chyba při zpracování požadavku
          console.error('Chyba při zpracování požadavku.');
        }
      };
      xhr.send(formData);
    });
  </script>

</body>

</html>