<h2><?=$title?></h2>

<?php foreach ($posts as $post) { ?>
	<div class="post-body">
		<h4><?php echo $post['title']; ?></h4>
		<small class='post-time'><?php echo $post['created_at']; ?></small> <br>
		<p><?php echo $post['body']; ?></p>
		<a class="btn btn-success" href="<?php echo site_url('/posts/'.$post['slug']); ?>"> Read>></a>
	</div>
	
<?php } ?>
