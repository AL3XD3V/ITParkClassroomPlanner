<div class="container">
      <div class="row">
        <div class="col" style="text-align: center; padding: 20px; padding-top: 150px;">
          <img src="img/park-logo.png" style="border-radius: 5px;" alt="it-park">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-3">
          <form method="post">
            <div class="form-group">
              <input required type="text" class="form-control" name="loginField" placeholder="Логин">
            </div>
            <div class="form-group">
              <input required type="password" class="form-control" name="passwordField" placeholder="Пароль">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block" value="Войти">
            </div>
          </form>
        <div class="row">
          <div class="col">
            </br>
            Нет аккаунта?</br>
            <a class="btn btn-success btn-block" href="/reg">Зарегистрироваться</a>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container" style="padding-top: 20px;">
  <?php
    if (!empty($data))
    {
      if ($data == 'decline')
      {
        echo '<div class="row justify-content-center">';
        echo '<div class="col-3 alert alert-danger">';
        echo 'Такого пользователя не существует или неправильно указаны логин/пароль';
        echo '</div></div>';
      } else if ($data == 'not_activated') {
        echo '<div class="row justify-content-center">';
        echo '<div class="col-3 alert alert-danger">';
        echo 'Данная учетная запись еще не активирована.';
        echo '</div></div>';
      }
    }
  ?>
</div>
