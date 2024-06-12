<?php

if(isset($_REQUEST['caixaCheck'])){
   echo 'O valor é '. $_REQUEST['caixaCheck'];
}
else
{
   echo 'A caixa não foi verificada.';
}