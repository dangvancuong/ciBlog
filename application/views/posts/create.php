<h1><?=$title ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
	<div class="form-group">
		<label>title</label>
		<input name="title" type="text" class="form-control" placeholder="Add title">
	</div>
	<div class="form-group">
		<label>body</label>
		<textarea name="body" type="text" class="form-control" placeholder="Add body"></textarea>
	</div> 
	<button type="submit" class="btn btn-success">Submit</button>
</form>