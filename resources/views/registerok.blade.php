<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>新規登録</title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="css/register.css">

</head>

<body>
  <div class="body"></div>
  <div class="header">
    <div class="sitelogo"><img src="images/HEADGEAR.png" alt="sitelogo"></div>
  </div>
  <div class="login">
    <h2>新規登録完了 Welcome</h2>
  </div>

  <script>
    'use strict';
    function checkForm() {
      const user = document.getElementById('form').user.value;
      const password = document.getElementById('form').password.value;
      const passwordcheck = document.getElementById('form').passwordcheck.value;
      if (user == "" || password == "" || passwordcheck == "" || mail == "") {
        document.getElementById('output').textContent = '必須項目を入力してください'
        return false;
      } if (password != passwordcheck) {
        document.getElementById('output').textContent = 'パスワードが一致しません'
        return false;
      } else {
        return true;
      }
    }


    document.getElementById('form').onsubmit = function (event) {
      event.preventDefault();
      const search = document.getElementById('form').user.value;
      const search1 = document.getElementById('form').password.value;
      const search2 = document.getElementById('form').passwordcheck.value;
      const search3 = document.getElementById('form').mail.value;
      const search4 = document.getElementById('form').tel.value;
      document.getElementById('output').textContent = 'loginが完了しました';
    };
    
  </script>
</body>

</html>