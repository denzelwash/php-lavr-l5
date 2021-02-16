<div class="form">
	<? if($isSend): ?>
		<p>Your article is done!</p><br>
		<a href="index.php?c=article&id=<?=$addedId;?>">Move to article</a>
	<? else: ?>
		<form method="post">
			Category<br>
			<select name="cat">
				<option value="0" selected>Без категории</option>
				<? foreach($cats as $cat) : ?>
					<option value="<?=$cat['id_category']?>"><?=$cat['title']?></option>
				<? endforeach; ?>
			</select>
			<br>
			Name:<br>
			<input type="text" name="title" value="<?=$title?>">
			<br>
			Text:<br>
			<textarea name="text"><?=$text?></textarea>
			<br>
			<button>Send</button>
			<p><?=$err?></p>
		</form>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>