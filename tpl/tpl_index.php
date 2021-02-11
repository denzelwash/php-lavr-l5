<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($articles as $article): 
		$articleCat = getCategory($article['id_category']);
		?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<? if($articleCat['title']) : ?>
				<span><?=$articleCat['title']?></span>
			<? else : ?>
				<span>Без категории</span>
			<? endif; ?>
			<a href="article.php?id=<?=$article['id_article']?>">Read more</a>
		</div>
	<? endforeach; ?>
</div>