
<?php foreach ($data['info'] as $person) { ?>

	<ul>
		<li>Name: <?php echo $person->name; ?></li>
		<li>Address: <?php echo $person->address; ?></li>
	</ul>

<? } ?>
<ul class="pagination pull-right">
	<?php echo $this->pagination->create_links(); ?>
</ul>