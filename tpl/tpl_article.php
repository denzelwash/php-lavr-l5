<div class="content">
	<? if($post): ?>
		<div class="article">
			<h1><?=$post['title']?></h1>
			<div><?=$post['text']?></div>
			<div><?=$catTitle?></div>
			<hr>
			<a href="delete.php?id=<?=$id?>">Remove</a> | 
			<a href="edit.php?id=<?=$id?>">Edit</a>
		</div>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>