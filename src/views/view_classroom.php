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
			<b>Мероприятия текущей недели:</b>
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
						foreach($data as $row)
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
<div class="container">
		<div class="row justify-content-center">
			<b>Мероприятия следующей недели:</b>
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
