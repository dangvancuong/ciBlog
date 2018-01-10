<h2><?php echo $post['title']; ?></h2>
<div class="post-body">
	<small class='post-time'><?php echo $post['created_at']; ?></small> <br>
	<?php echo $post['body']; ?>
</div>
<p>
	<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<a href="<?php echo site_url('posts/edit/'.$post['slug']); ?>" class = "btn btn-success">update</a>
	<input type="submit" value="delete" class="btn btn-danger">
	</form>

	
</p>