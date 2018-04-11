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
<div class="container" style="margin-top: 50px;">
  <div class="row justify-content-center" style="padding: 15px;">
    <b>Мой профиль:</b>
  </div>
  <div class="row justify-content-center">
      <div class="col-6">
        <table class="table borderless" >
						<?php
						foreach($data as $row)
						{
							echo '<tr><td><p>'.$row['surname'].' '.$row['name'].' '.$row['patron'].
									 	'<p>'.$row['division'].', '.$row['position'].'</p></td>'.
									 	'<td><p>'.$row['email'].'</p>'.
									 	'<p>'.$row['phone'].'</p></tr></td>';
						}
						?>
					</table>
    		</div>
    </div>
</div>
<div class="container" style="margin-top: 50px; margin-bottom: 100px;">
		<div class="row justify-content-center" style="padding: 15px;">
			<b>Мои заявки:</b>
		</div>
		<div class="row justify-content-center">
    		<div class="col-12">
          <table class="table table-bordered" style="text-align: center;">
						<tr style="background: #CCC;">
      				<th style="width: 10%">День</th>
      				<th style="width: 10%">Аудитория</th>
      				<th style="width: 20%">Время проведения</th>
							<th style="width: 50%">Название мероприятия</th>
              <th style="width: 10%">Подтверждено</th>
    				</tr>
						<?php
						foreach($data2 as $row)
						{

								echo '<tr><td>'. date('d.m.Y', strtotime($row['day'])).'</td>'.
									 	'<td>'.$row['class'].'</td>'.
									 	'<td>'.substr($row['time_start'], 0, 5).' - '.substr($row['time_stop'], 0, 5).'</td>'.
                    '<td>'.$row['name'].'</td>';
                  if ($row['confirm'] == 0) {
										echo '<td> - </td></tr>';
									}  else {
										echo '<td><img src="img/ok.png" class="ok_picture" width="20" alt="Подтверждено"></td></tr>';
									}
						}
						?>
					</table>
    		</div>
    </div>
</div>
