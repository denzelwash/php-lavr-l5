<div class="form">
	<form method="post">
		Login:<br>
		<input type="text" name="login">
		<br>
		Password:<br>
		<input type="password" name="password">
		<br>
		<label>
			<input type="checkbox" name="remember">
			<span>Запомнить</span>	
		</label>	
		<br>
		<button>Send</button>
		<p><?= $err ?></p>
	</form>
</div>
<hr>
<a href="<?= BASE_URL ?>">Move to main page</a>