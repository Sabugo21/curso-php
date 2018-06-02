<?php

echo '<pre>';

//print_r($_SERVER);

//$_ENV['bd'] 'dev';

//print_r($_ENV);

// .php?nome=Bruno&email=brossif21@gmail.com

//print_r($_GET);

//if(isset($_GET['nome'])){
//	echo $_GET['nome'];
//}

//?>

<form method="POST">
<input type="text" name="nome">
<button type="submit"> OK</button>
</form>
<?php

print_r($_POST); 