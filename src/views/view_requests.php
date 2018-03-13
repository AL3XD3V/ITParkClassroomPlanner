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
			<b>Заявки, ожидающие подтверждения:</b>
		</div>
		<div class="row justify-content-center">
    		<div class="col-12">
          <table class="table table-bordered">
            <tr>
      				<th>День</th>
      				<th>Аудитория</th>
      				<th>Начало</th>
      				<th>Окончание</th>
							<th>Мероприятие</th>
              <th>Ответственный</th>
              <th>Время подачи заявки</th>
              <th>Комментарий</th>
              <th>Подтверждение:</th>
    				</tr>
						<?php
						foreach($data as $row)
						{
							if ($row['confirm'] == 0)
							{
								echo '<tr><td>'.$row['class'].'</td>'.
									 	'<td>'.$row['day'].'</td>'.
									 	'<td>'.$row['time_start'].'</td>'.
									 	'<td>'.$row['time_stop'].'</td>'.
									 	'<td>'.$row['name'].'</td>'.
									 	'<td>'.$row['user'].'</td>'.
                    '<td>'.$row['reg'].'</td>'.
									 	'<td>'.$row['comment'].'</td>'.
									 	'<td>'.'<form method="post">'.
									 					'<input type="hidden" name="regField" value="'.$row['reg'].'">'.
                            '<input type="hidden" name="userField" value="'.$row['user'].'">'.
									 					'<input type="submit" class="btn btn-success btn-block" value="Подтвердить">'.
														'</form>'.
									 				'</td></tr>';
							}
						}
						?>
					</table>
    		</div>
    </div>
</div>
<div class="container">
		<div class="row justify-content-center">
			<b>Грядущие мероприятия :</b>
		</div>
		<div class="row justify-content-center">
    		<div class="col-12">
          <table class="table table-bordered">
            <tr>
      				<th>День</th>
      				<th>Аудитория</th>
      				<th>Начало</th>
      				<th>Окончание</th>
							<th>Мероприятие</th>
              <th>Ответственный</th>
              <th>Время подачи заявки</th>
              <th>Комментарий</th>
    				</tr>
						<?php
						foreach($data as $row)
						{
							if ($row['confirm'] == 1 && (date('W', strtotime($row[day])) >= date('W')))
							{
								echo '<tr><td>'.$row['class'].'</td>'.
									 	'<td>'.$row['day'].'</td>'.
									 	'<td>'.$row['time_start'].'</td>'.
									 	'<td>'.$row['time_stop'].'</td>'.
									 	'<td>'.$row['name'].'</td>'.
									 	'<td>'.$row['user'].'</td>'.
                    '<td>'.$row['reg'].'</td>'.
									 	'<td>'.$row['comment'].'</td></tr>';
							}
						}
						?>
					</table>
    		</div>
    </div>
</div>
