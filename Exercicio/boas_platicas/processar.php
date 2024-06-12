<!-- PROCESSAR AS INFORMAÇÕES DO FORMULÁRIO -->
<?php

$nome ='';
$senha ='';
$teste = '';

// if(isset( $_POST['text_userName'])){$nome =  $_POST['text_userName'];};
// if(isset( $_POST['text_password'])){$senha =  $_POST['text_password'];};
if(isset( $_REQUEST['text_userName'])){$nome =  $_REQUEST['text_userName'];}; //pode se usar o get ou post
if(isset( $_REQUEST['text_password'])){$senha =  $_REQUEST['text_password'];};

echo "$nome || $senha";

unset($teste);

echo "<p>$teste</p>";
