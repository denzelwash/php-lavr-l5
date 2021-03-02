<div class="content">
	<? if($post): ?>
		<div class="article">
			<h1><?=$post['title']?></h1>
			<div><?=$post['text']?></div>
			<div><strong>Категория</strong>
				<a href="<?=BASE_URL?>category/<?=$post['id_category']?>"><?=$cat['title']?></a>
			</div>
			<hr>
			<a href="<?=BASE_URL?>delete/<?=$id?>">Remove</a> | 
			<a href="<?=BASE_URL?>edit/<?=$id?>">Edit</a>
		</div>
	<? endif; ?>
</div>
<hr>
<a href="<?=BASE_URL?>">Move to main page</a>