	<h1>Overzicht van reserveringen</h1>
		<ul>
			<li><a href="<?=URL?>reservation/create"> Reserveer een paard</a></li>
			<?php foreach($reservation as $reservation){?>
				<li>
					<span><?php echo $reservation['name']?> is <?php echo $reservation['age']?> jaar</span>
					<a href="<?php echo URL?>reservation/edit/<?php echo $reservation['id']?>">Wijzigen</a> 
					<a href="<?php echo URL?>reservation/delete/<?php echo $reservation['id']?>">Verwijderen</a>
				</li>
			<?php }; ?>
		</ul>