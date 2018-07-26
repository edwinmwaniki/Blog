<h2><?= $title ?></h2>

<?php foreach ($posts as $post) : ?>
	<br><br><h3><?php echo $post['title']; ?></h3>
	<small class="badge badge-info">Posted on: <?php echo $post['created_at']; ?></small><br>
	<?php echo $post['body']; ?>

<?php endforeach; ?>