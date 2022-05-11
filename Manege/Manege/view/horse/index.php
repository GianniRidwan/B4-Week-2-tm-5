	<h1>Overzicht van paarden</h1>
		<ul>
			<?php foreach($horse as $horse){?>
				<li>
					<span><?php echo $horse['name']?></span>
					<span><?php echo $horse['breed']?></span>
					<span><?php echo $horse['age']?></span>
					<span><?php echo $horse['height']?></span>
					<a href="<?php echo URL?>horse/edit/<?php echo $horse['id']?>">Wijzigen</a> 
					<a href="<?php echo URL?>horse/delete/<?php echo $horse['id']?>">Verwijderen</a>
				</li>
			<?php }; ?>
		</ul>