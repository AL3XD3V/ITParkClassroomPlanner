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
			<b>Пользователи, ожидающие подтверждения:</b>
		</div>
		<div class="row justify-content-center">
    		<div class="col-10">
          <table class="table table-bordered">
						<tr>
      				<th>Фамилия</th>
      				<th>Имя</th>
      				<th>Отчество</th>
      				<th>Отдел</th>
							<th>Должность</th>
							<th>Почта</th>
							<th>Телефон</th>
							<th>Подтверждение:</th>
    				</tr>
						<?php
						foreach($data as $row)
						{
							if ($row['verified'] == 0)
							{
								echo '<tr><td>'.$row['surname'].'</td>'.
									 	'<td>'.$row['name'].'</td>'.
									 	'<td>'.$row['patron'].'</td>'.
									 	'<td>'.$row['division'].'</td>'.
									 	'<td>'.$row['position'].'</td>'.
									 	'<td>'.$row['email'].'</td>'.
									 	'<td>'.$row['phone'].'</td>'.
									 	'<td>'.'<form method="post">'.
									 					'<input type="hidden" name="confirmedEmail" value="'.$row['email'].'">'.
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
			<div class="row justify-content-center">
				<b>Зарегистрированные пользователи:</b>
			</div>
    		<div class="col-10">
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
							if ($row['verified'] == 1)
							{
								echo '<tr><td>'.$row['surname'].'</td>'.
									 	'<td>'.$row['name'].'</td>'.
									 	'<td>'.$row['patron'].'</td>'.
									 	'<td>'.$row['division'].'</td>'.
									 	'<td>'.$row['position'].'</td>'.
									 	'<td>'.$row['email'].'</td>'.
									 	'<td>'.$row['phone'].'</td></tr>';
							}
						}
						?>
					</table>
    		</div>
    </div>
</div>
