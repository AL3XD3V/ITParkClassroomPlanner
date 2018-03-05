<div class="container">
  <div class="row">
    <div class="col align-self-center">
      <ul class="nav justify-content-end">
        <?php require_once './src/menu/common.php'; ?>
      </ul>
    </div>
    <div class="col-1 text-center">
      <img src="img/park-logo.png" class="park-logo" alt="it-park">
    </div>
  </div>
</div>
<div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <form method="post">
            <div class="form-group">
              Выберите аудиторию:
              <select required class="form-control" name="classField">
                  <option value="16">16 аудитория</option>
                  <option value="17">17 аудитория</option>
                  <option value="18">18 аудитория</option>
                  <option value="19">19 аудитория</option>
              </select>
            </div>
            <div class="form-group">
              Выберите дату:
              <input type="date" name="calendarField">
            </div>
            <div class="form-group">
              Выберите время начала мероприятия:
              <select required class="form-control" name="startHourField">
                  <option value="08">08 часов</option>
                  <option value="09">09 часов</option>
                  <option value="10">10 часов</option>
                  <option value="11">11 часов</option>
                  <option value="12">12 часов</option>
                  <option value="13">13 часов</option>
                  <option value="14">14 часов</option>
                  <option value="15">15 часов</option>
                  <option value="16">16 часов</option>
              </select>
              <select required class="form-control" name="startMinuteField">
                  <option value="00">00 минут</option>
                  <option value="10">10 минут</option>
                  <option value="20">20 минут</option>
                  <option value="30">30 минут</option>
                  <option value="40">40 минут</option>
                  <option value="50">50 минут</option>
              </select>
            </div>
            <div class="form-group">
              Выберите время окончания мероприятия:
              <select required class="form-control" name="stopHourField">
                  <option value="09">09 часов</option>
                  <option value="10">10 часов</option>
                  <option value="11">11 часов</option>
                  <option value="12">12 часов</option>
                  <option value="13">13 часов</option>
                  <option value="14">14 часов</option>
                  <option value="15">15 часов</option>
                  <option value="16">16 часов</option>
                  <option value="17">17 часов</option>
              </select>
              <select required class="form-control" name="stopMinuteField">
                  <option value="00">00 минут</option>
                  <option value="10">10 минут</option>
                  <option value="20">20 минут</option>
                  <option value="30">30 минут</option>
                  <option value="40">40 минут</option>
                  <option value="50">50 минут</option>
              </select>
            </div>
            <div class="form-group">
              Укажите название мероприятия:
              <input required type="text" class="form-control" name="nameField">
            </div>
            <div class="form-group">
              Ваш комментарий:
              <input required type="text" class="form-control" name="commentField">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block" value="Отправить заявку">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="">
      <table>
        <?php
        foreach($data as $row)
        {

            echo '<tr><td>'.$row['class'].'</td>'.
                '<td>'.$row['day'].'</td>'.
                '<td>'.$row['time_start'].'</td>'.
                '<td>'.$row['time_stop'].'</td>';

        }
        ?>
      </table>

    </div>
