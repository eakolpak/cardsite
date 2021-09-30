<?php

function InitСookie()
{
	$string = "<dialog class = 'text-center' id = 'dialog1'>";
    $string .= "<h3 class = 'mt-4'>Скидка для новых клиентов!</h3>";
    $string .= "<div style = 'background-color: #f50707; color: white;'><h1><b>15%</b></h1></div>";
    $string .= "<h3 >Успей заказать!</h3>";
    $string .= "<div class = 'm-3'><i class='clock'></i></div>";
    $string .= "<a class='btn button1 mb-3'>Заказать</a>";
    $string .= "<p class='close' id = 'closeDialog1'></p>";
    $string .= "</dialog>";
	
setcookie("dialog", "$string" , time() + 5);

	if (isset($_COOKIE["dialog"]))
	{
		setcookie("dialog");
	}
	
}		
?>
