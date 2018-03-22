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
              <input required type="text" class="form-control" name="surnameField" placeholder="Фамилия">
            </div>
            <div class="form-group">
              <input required type="text" class="form-control" name="nameField" placeholder="Имя">
            </div>
            <div class="form-group">
              <input required type="text" class="form-control" name="patronField" placeholder="Отчество">
            </div>
            <div class="form-group">
              <input required type="text" class="form-control" name="divisionField" placeholder="Отдел/подразделение">
            </div>
            <div class="form-group">
              <input required type="text" class="form-control" name="positionField" placeholder="Должность">
            </div>
            <div class="form-group">
              <input required type="text" class="form-control" name="phoneField" placeholder="Телефон">
            </div>
            <div class="form-group">
              <input required type="text" class="form-control" name="emailField" placeholder="Электронная почта">
            </div>
            <div class="form-group">
              <input required type="password" class="form-control" name="passwordField" placeholder="Пароль">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block" value="Отправить заявку">
            </div>
          </form>
        </div>
      </div>
      <?php
        if (!empty($data))
        {
          if ($data == 'decline')
          {
            echo '<div class="row justify-content-center">';
            echo '<div class="col-3 alert alert-danger">';
            echo 'Такой пользователь уже существует, или неправильно указаны логин/пароль.';
            echo '</div></div>';
          } else {
            echo '<div class="row justify-content-center">';
            echo '<div class="col-3 alert alert-success">';
            echo 'Регистрация прошла успешно. После активации вы можете использовать в качестве логина указанный адрес электронной почты.';
            echo '</div></div>';
          }
        }
      ?>
    </div>
