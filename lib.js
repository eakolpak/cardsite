// Модуль lib


let element, canvas, ctx, grd, draw, line, text, polygon, clock;

export function InitCanvas(){
	
	canvas = document.getElementById('draw');
	ctx = canvas.getContext('2d');
	textGradient();   	
}
//Градиент для текста
function textGradient () {
		
	grd = ctx.createLinearGradient(0, 0, 0, 40);
	grd.addColorStop(0.6, "#FF0000");
	grd.addColorStop(0.9, "#000000");		
	ctx.fillStyle = grd;
	ctx.font = 'bold 25px Courier';
	ctx.fillText("Евгений Колпак", 20, 35);	
	ctx.font = 'bold 16px Courier';
	ctx.fillText("Веб-разработчик", 55, 55);
	ctx.fill();
		
//~ //Линия
	ctx.beginPath();
	ctx.moveTo(0, 25);
	ctx.lineTo(10, 25);	
	ctx.moveTo(240, 25);
	ctx.lineTo(250, 25);
	ctx.lineWidth = 1.5;
	ctx.lineCap = 'round';
	ctx.strokeStyle = '#000000';	
	ctx.stroke();
	
	ctx.beginPath();
	ctx.moveTo(0, 30);
	ctx.lineTo(15, 30);	
	ctx.moveTo(235, 30);
	ctx.lineTo(250, 30);
	ctx.lineWidth = 1.5;
	ctx.strokeStyle = '#FF0000';
	ctx.stroke();
}

export function InitSVG() {
		
	$('#about').one('mouseenter', function() {
		line1();
	});
	$('#portfolio').one('mouseenter', function() {
		line2();
	});
	$('#services').one('mouseenter', function() {
		line3();
	});
}

//~ function star(){
		
	//~ draw = SVG("drawing5").size(100, 20);
	//~ polygon = draw.polygon('6.25,0 7.5,5 12.5,6.25 7.5,7.5 6.25,12.5 5,7.5 0,6.25 5,5');
	//~ polygon.fill('#FFFFFF').move(0, 0);
	//~ polygon.stroke({ color: '#FF0000', width: 1.5, linecap: 'round', linejoin: 'round' });
	//~ polygon.animate(5000).rotate(365).loop();
//~ }

function line1() {
	 	
	draw = SVG('drawing1').size(150, 20);	
	line = draw.line(10, 0, 10, 0);
	line.stroke({ color: 'red', width: 3, linecap: 'round' });
	line.animate(3000).plot([[130, 0], [10, 0]]);
}

function line2() {
	 	
	draw = SVG('drawing2').size(160, 20);	
	line = draw.line(10, 0, 10, 0);
	line.stroke({ color: 'red', width: 3, linecap: 'round' });
	line.animate(3000).plot([[155, 0], [10, 0]]);
}

function line3() {
	 	
	draw = SVG('drawing3').size(150, 20);	
	line = draw.line(10, 0, 10, 0);
	line.stroke({ color: 'red', width: 3, linecap: 'round' });
	line.animate(3000).plot([[120, 0], [10, 0]]);
}

//Анимация страниц
export function animationPage() {

//Анимация стартовой страницы		
	element = document.querySelector('.show1');
	element.classList.add('animate__animated', 'animate__backInDown');
	element.style.setProperty('--animate-duration', '1s');	
	element = document.querySelector('.show2');
	element.classList.add('animate__animated', 'animate__backInDown',);
	element.style.setProperty('--animate-duration', '1s');	
	element = document.querySelector('.show3');
	element.classList.add('animate__animated', 'animate__backInDown');
	element.style.setProperty('--animate-duration', '1s');	
	element = document.querySelector('.button1');
	element.classList.add('animate__animated', 'animate__bounceIn', 'animate__delay-2s');
	element.style.setProperty('--animate-duration', '1s');
	
	function start() {	
		$('.click1').css('color', 'red');	
		$('.click2,.click3,.click4').css('color', '');
	}
	$('.click1').click(start);
	$('#page-top').mouseenter(start);
	
//Анимация страницы 'Обо мне'	
	function about() {		
		element = document.querySelector('.about');
		element.classList.add('animate__animated', 'animate__zoomIn');
		element.style.setProperty('--animate-duration', '2s');
		$('.click2').css('color', 'red');
		$('.click1,.click3,.click4').css('color', '');
	}
	
	$('.click2').click(about);
	$('#about').mouseenter(about);
	
//Анимация страницы 'Портфолио'	
	function portfolio() {				
		element = document.querySelector('.site1');
		element.classList.add('animate__animated', 'animate__fadeInLeft');
		element.style.setProperty('--animate-duration', '2s');		
		element = document.querySelector('.site2');
		element.classList.add('animate__animated', 'animate__fadeInLeft',);
		element.style.setProperty('--animate-duration', '1s');		
		element = document.querySelector('.site3');
		element.classList.add('animate__animated', 'animate__fadeInRight');
		element.style.setProperty('--animate-duration', '1s');		
		element = document.querySelector('.site4');
		element.classList.add('animate__animated', 'animate__fadeInRight');
		element.style.setProperty('--animate-duration', '2s');		
		$('.click3').css('color', 'red');
		$('.click1,.click2,.click4').css('color', '');
	}		
	$('.click3').click(portfolio);
	$('#portfolio').mouseenter(portfolio);
	
	$('.site1, .site2, .site3, .site4').mouseenter(function () { 
		$(this).css({color: 'red',});		
	});
	$('.site1, .site2, .site3, .site4').mouseleave(function () {
		$(this).css({color: ''});
	});
	
//Анимация страницы 'Услуги'	
	function services() {				
		element = document.querySelector('.services');
		element.classList.add('animate__animated', 'animate__fadeInUp');
		element.style.setProperty('--animate-duration', '2s');		
		$('.click4').css('color', 'red');
		$('.click1,.click2,.click3').css('color', '');
	}		
	$('.click4').click(services);
	$('#services').mouseenter(services);
	$('.card1, .card2, .card3, .card4').mouseenter(function () {
		$(this).css({boxShadow: '0 0 25px #7F7F7F', color: 'red', transition: '0.7s'});
	});
	$('.card1, .card2, .card3, .card4').mouseleave(function () {
		$(this).css({boxShadow: '', color: ''});
	});
	
//Анимация модального окна 'Контакты'	
	function contact() {				
		element = document.querySelector('#form');
		element.classList.add('animate__animated', 'animate__fadeInDown');
		element.style.setProperty('--animate-duration', '3s');				
	
	}	
	$('.button1').click(contact);
		$('.click4').click(services);
	//~ $('.tel, .mail').mouseenter(function () {
		//~ $(this).css({color: 'red', fontWeight: 'bold'});
	//~ });
	//~ $('.tel, .mail').mouseleave(function () {
		//~ $(this).css({color: '', fontWeight: ''});
	//~ });
	//~ $('.link1, .link2, .link3').mouseenter(function () {
		//~ $(this).css({filter: 'invert(1)'});
	//~ });
	//~ $('.link1, .link2, .link3').mouseleave(function () {
		//~ $(this).css({filter: ''});
	//~ });	
}

//Google-диаграмма 
export function googleChart (){
	 google.charts.load('upcoming', {'packages': ['vegachart']}).then(drawChart);
}
      function drawChart() {
        const dataTable = new google.visualization.DataTable();
        dataTable.addColumn({type: 'string', 'id': 'category'});
        dataTable.addColumn({type: 'number', 'id': 'amount'});
        dataTable.addRows([
          ['HTML',91 ],
          ['CSS', 75],
          ['JavaScript', 65],
          ['PHP', 56],
          ['MY-SQL', 76],
        ]);

        const options = {
			
          "vega": {
			//~ "title": 'Мои навыки',
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "width": 300,
            "height": 200,
            "padding": 0,

            'data': [{'name': 'table', 'source': 'datatable'}],

            "signals": [
              {
                "name": "tooltip",
                "value": {},
                "on": [
                  {"events": "rect:mouseover", "update": "datum"},
                  {"events": "rect:mouseout",  "update": "{}"}
                ]
              }
            ],

            "scales": [
              {
                "name": "xscale",
                "type": "band",
                "domain": {"data": "table", "field": "category"},
                "range": "width",
                "padding": 0.15,
                "round": true
              },
              {
                "name": "yscale",
                "domain": {"data": "table", "field": "amount"},
                "nice": true,
                "range": "height"
              }
            ],

            "axes": [
              { "orient": "bottom", "scale": "xscale"},
              { "orient": "left", "scale": "yscale" }
            ],

            "marks": [
              {
                "type": "rect",
                "from": {"data":"table"},
                "encode": {
                  "enter": {
                    "x": {"scale": "xscale", "field": "category"},
                    "width": {"scale": "xscale", "band": 1},
                    "y": {"scale": "yscale", "field": "amount"},
                    "y2": {"scale": "yscale", "value": 0}
                  },
                  "update": {
                    "fill": {"value": "steelblue"}
                  },
                  "hover": {
                    "fill": {"value": "red"}
                  }
                }
              },
              {
                "type": "text",
                "encode": {
                  "enter": {
                    "align": {"value": "center"},
                    "baseline": {"value": "bottom"},
                    "fill": {"value": "#000000"}
                  },
                  "update": {
                    "x": {"scale": "xscale", "signal": "tooltip.category", "band": 0.5},
                    "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                    "text": {"signal": "tooltip.amount"},
                    "fillOpacity": [
                      {"test": "datum === tooltip", "value": 0},
                      {"value": 1}
                    ]
                  }
                }
              }
            ]
          }
        };

        const chart = new google.visualization.VegaChart(document.getElementById('chart'));
        chart.draw(dataTable, options);
}

// Диалоговое окно контактов
export function InitForm() {
	let dialog1 = document.querySelector('#dialog1');
	let dialog2 = document.querySelector('#dialog2');
	setTimeout(function() {
		dialog1.showModal();
	}, 3000);	
	
	$('.btn').click(function () {
		dialog2.showModal();
	});
		
	$('#closeDialog1').click(function () {
		dialog1.close();
	});
	
	$('#closeDialog2').click(function () {
		dialog2.close();
	});
}

//Таймер обратного отчета акции

export function InitFlipClock() { 
	 
	clock = $('.clock').FlipClock(
	{
		clockFace: 'HoursCounter',
		autoStart: false,			
		countdown: true , 			
		language:'ru-ru',				
    });
	dialogAction();
}

	function dialogAction() {

		let timerDate = new Date("2021-01-02 00:00:01 pm"); 
		let currentDate = new Date("2021-01-01 00:00:00 pm"); 
		let diff = timerDate.getTime() - currentDate.getTime();
		clock.setTime(diff/1000); 
		clock.start(); 				
	}

