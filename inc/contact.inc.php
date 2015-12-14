<h3>Адрес</h3>
<p> Таганрог, улица Чехова 21</p>
<h3>Задайте вопрос</h3>
<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
	<label>Тема письма: </label><br />
	<input name='subject' type='text' size="50"/><br />
	<label>Содержание: </label><br />
	<textarea name='body' cols="50" rows="10"></textarea><br /><br />
	<input type='submit' value='Отправить' />
</form>	
