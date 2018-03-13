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
    <b>Это вы:</b>
  </div>
  <div class="row justify-content-center">
      <div class="col-12">
        <table class="table table-bordered">
						<tr>
      				<th>Фамилия</th>
      				<th>Имя</th>
      				<th>Отчество</th>
      				<th>Отдел</th>
							<th>Должность</th>
							<th>Почта</th>
							<th>Телефон</th>
    				</tr>
						<?php
						foreach($data as $row)
						{
							echo '<tr><td>'.$row['surname'].'</td>'.
									 	'<td>'.$row['name'].'</td>'.
									 	'<td>'.$row['patron'].'</td>'.
									 	'<td>'.$row['division'].'</td>'.
									 	'<td>'.$row['position'].'</td>'.
									 	'<td>'.$row['email'].'</td>'.
									 	'<td>'.$row['phone'].'</td></tr>';
						}
						?>
					</table>
    		</div>
    </div>
</div>
<div class="container">
		<div class="row justify-content-center">
			<b>Это ваши заявки:</b>
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
              <th>Подтверждено</th>
    				</tr>
						<?php
						foreach($data2 as $row)
						{

								echo '<tr><td>'.$row['day'].'</td>'.
									 	'<td>'.$row['class'].'</td>'.
									 	'<td>'.substr($row['time_start'], 0, 5).'</td>'.
									 	'<td>'.substr($row['time_stop'], 0, 5).'</td>'.
                    '<td>'.$row['name'].'</td>'.
                    '<td>'.$row['confirm'].'</td></tr>';
						}
						?>
					</table>
    		</div>
    </div>
</div>
