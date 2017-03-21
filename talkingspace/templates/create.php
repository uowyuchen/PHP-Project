<?php include 'includes/header.php'; ?>

<form action="" role="form" method="post" action="create.php">
	<div class="form-group">
		<label>Topic Title</label>
		<input type="text" class="form-control" name="title" placeholder="Enter Post Title">
	</div>
	<div class="form-group">
		<label>Category</label>
		<select class="form-control" name="category">
			
			<?php foreach(getCategories() as $category) : ?>
				<option value="<?php echo $category->id ?>"><?php echo $category->name; ?></option>
			<?php endforeach; ?>

		</select>
	</div>
	<div class="form-group">
		<label>Topic Body</label>
		<textarea name="body" id="body" rows="10" cols="80"></textarea>
		<script>CKEDITOR.replace('body');</script>
	</div>
	<button type="submit" class="btn btn-default" name="do_create">Submit</button>
</form>


			<?php include 'includes/footer.php'; ?>