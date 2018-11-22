<!DOCTYPE html>
<html>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">

<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>


    <ons-page>

      <table id="cadastroT" name="cadastroT">
     <tr>
         <td><img id="fotoA" src="img/avatar.png"></td>
           <td><img id="fotoA" src="img/avatar.png"></td>
           <td><img id="fotoA" src="img/avatar.png"></td>
         <td>
     </tr>
     <tr>

         <td><a href="pages/home.html"> Aluno</a> </td>
         <td> Educador </td>
         <td> Empresa</td>

     </tr>
     </table>



      <div style="text-align: center; margin-top: 30px;">
        <p>
          <ons-input id="username" modifier="underbar" placeholder="E-mail" float></ons-input>
        </p>
        <p>
          <ons-input id="password" modifier="underbar" type="password" placeholder="Senha" float></ons-input>
        </p>
        <p style="margin-top: 30px;">
          <ons-button onclick="login()">Sign in</ons-button>
        </p>
      </div>
    </ons-page>
  </body>




  <script type="text/javascript">

  var login = function() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === 'admin' && password === 'admin') {
      ons.notification.alert('Bem Vindo!');
    } else {
      ons.notification.alert('Nome ou Senha incorreta.');
    }
  };

  </script>
</html>
