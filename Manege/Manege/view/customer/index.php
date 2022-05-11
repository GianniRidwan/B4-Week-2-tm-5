	<h1>Overzicht van klanten</h1>
		<ul>
			<li><a href="<?=URL?>customer/create">Voeg een nieuwe klant toe</a></li>
			<li><span>Naam </span><span>Adres </span><span>Telefoonnummer</span></li>
			<?php foreach($customer as $customer){?>
				<li>
					<span><?php echo $customer['name']?></span>
					<span><?php echo $customer['adres']?></span>
					<span><?php echo $customer['phone']?></span>
					<a href="<?php echo URL?>customer/edit/<?php echo $customer['id']?>">Wijzigen</a> 
					<a href="<?php echo URL?>customer/delete/<?php echo $customer['id']?>">Verwijderen</a>
				</li>
			<?php }; ?>
		</ul>