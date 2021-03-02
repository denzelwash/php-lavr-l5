<div class="form">
	<? if($isSend): ?>
	<p>Your article is done!</p>
	<? else: ?>
	<form method="post">
		Category<br>
		<select name="cat">
			<? if($cat['id_category'] === 0) : ?>
			<option value="0" selected>Без категории</option>
			<? else : ?>
			<option value="0">Без категории</option>
			<? endif;?>
			<? foreach($cats as $c) : ?>
			<? if($c['id_category'] === $cat['id_category']) : ?>
			<option value="<?= $c['id_category'] ?>" selected><?= $cat['title'] ?></option>
			<? else : ?>
			<option value="<?= $c['id_category'] ?>"><?= $c['title'] ?></option>
			<? endif;?>
			<? endforeach; ?>
		</select>
		<br>
		Name:<br>
		<input type="text" name="title" value="<?= $title ?>">
		<br>
		Text:<br>
		<textarea name="content"><?= $content ?></textarea>
		<br>
		<button>Send</button>
		<p><?= $err ?></p>
	</form>
	<? endif; ?>
</div>
<hr>
<a href="<?= BASE_URL ?>">Move to main page</a>