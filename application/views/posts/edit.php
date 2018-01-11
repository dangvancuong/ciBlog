<h1><?=$title ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
	<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
		<label>title</label>
		<input name="title" type="text" class="form-control" placeholder="Add title" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label>body</label>
		<textarea name="body" type="text" class="form-control" placeholder="Add body" id="editor1"><?php echo $post['body']; ?></textarea>
	</div> 
	<button type="submit" class="btn btn-success">update</button>
</form>