
import * as lib from './lib.js';

// Выполнить скрипт после загрузки документа
$(document).ready(function()
 {	
	lib.InitFlipClock();
	lib.InitCanvas();
	lib.InitSVG();
	lib.googleChart();
	lib.animationPage();
	lib.InitForm(); 
});



