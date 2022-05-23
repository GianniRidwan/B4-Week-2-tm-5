	<h1>Overzicht van paarden</h1>
		<ul>
			<li><a href="<?=URL?>horse/create"> Voeg een nieuw paard toe</a></li>
			<li><span>Naam </span><span>Ras </span><span>Leeftijd </span><span>Hoogte </span><span>Springsport</span></li>
			<?php foreach($horse as $horse){?>
				<li>
					<span><?php echo $horse['horsename']?></span>
					<span><?php echo $horse['breed']?></span>
					<span><?php echo $horse['age']?></span>
					<span><?php echo $horse['height']?></span>
					<span><?php if ($horse['height'] <= 147.5){
						echo "Nee";
					} else {
						echo "Ja";
					} ?></span>
					<a href="<?php echo URL?>horse/edit/<?php echo $horse['id']?>">Wijzigen</a> 
					<a href="<?php echo URL?>horse/delete/<?php echo $horse['id']?>">Verwijderen</a>
				</li>
			<?php }; ?>
		</ul>