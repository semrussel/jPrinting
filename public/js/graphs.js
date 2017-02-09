$(function() {
  $("#bars li .bar").each( function( key, bar ) {
    var percentage = $(this).data('percentage');
    
    $(this).animate({
      'height' : percentage + '%'
    }, 1000);
  });
});

// PIES PIES PIES PIES

/* Pie chart based on the pen by aaronlsilber (http://codepen.io/aaronlsilber/pen/IqrkL) which is based on an article by James Litten (http://html5.litten.com/graphing-data-in-the-html5-canvas-element-part-iv-simple-pie-charts/) */

/* Pie Chart Javascript
=====================================================================*/
var pieColors = [
	'rgba(236, 208, 120, 0.7)', 'rgba(217, 91, 67, 0.7)', 'rgba(192, 41, 66, 0.7)', 
	'rgba(84, 36, 55, 0.7)', 'rgba(83, 119, 122, 0.7)', 'rgba(119, 146, 174, 0.7)',
	'rgba(244, 67, 54, 0.7)', 'rgba(233, 30, 99, 0.7)', 'rgba(156, 39, 176, 0.7)',
	'rgba(96, 125, 139, 0.7)', 'rgba(255, 87, 34, 0.7)', 'rgba(255, 152, 0, 0.7)',
	'rgba(255, 235, 59, 0.7)', 'rgba(205, 220, 57, 0.7)', 'rgba(0, 150, 136, 0.7)',
	'rgba(0, 188, 212, 0.7)', 'rgba(121, 85, 72, 0.7)', 'rgba(59, 255, 94, 0.7)',
	'rgba(205, 220, 57, 0.7)', 'rgba(244, 59, 255, 0.7)', 'rgba(255, 133, 59, 0.7)',
	'rgba(63, 81, 181, 0.7)', 'rgba(84, 153, 68, 0.7)', 'rgba(150, 152, 68, 0.7)',
	'rgba(152, 68, 90, 0.7)'
	];

function getTotal( arr ){
    var j,
        myTotal = 0;
    
    for( j = 0; j < arr.length; j++) {
        myTotal += ( typeof arr[j] === 'number' ) ? arr[j] : 0;
    }
    
    return myTotal;
}

function drawPieChart( canvasId ) {
    var i,
        canvas = document.getElementById( canvasId ),
        pieData = canvas.dataset.values.split(',').map( function(x){ return parseInt( x, 10 )}),
        halfWidth = canvas.width * .5,
        halfHeight = canvas.height * .5,
        ctx = canvas.getContext( '2d' ),
        lastend = 0,
        myTotal = getTotal(pieData);

    ctx.clearRect( 0, 0, canvas.width, canvas.height );

    for( i = 0; i < pieData.length; i++) {
        ctx.fillStyle = pieColors[i];
        ctx.beginPath();
        ctx.moveTo( halfWidth, halfHeight );
        ctx.arc( halfWidth, halfHeight, halfHeight, lastend, lastend + ( Math.PI * 2 * ( pieData[i] / myTotal )), false );
        ctx.lineTo( halfWidth, halfHeight );
        ctx.fill();
        lastend += Math.PI * 2 * ( pieData[i] / myTotal );
    }
}

drawPieChart('canPie-Jan');
drawPieChart('canPie-Feb');
drawPieChart('canPie-Mar');
drawPieChart('canPie-Apr');
drawPieChart('canPie-May');
drawPieChart('canPie-Jun');
drawPieChart('canPie-Jul');
drawPieChart('canPie-Aug');
drawPieChart('canPie-Sep');
drawPieChart('canPie-Oct');
drawPieChart('canPie-Nov');
drawPieChart('canPie-Dec');
drawPieChart('canPie-Year');

/* Peak Chart Javascript
=====================================================================*/
var peakColors = ['rgb(236, 208, 120)', 'rgba(217, 91, 67, 0.7)', 'rgba(192, 41, 66, 0.7)', 'rgba(84, 36, 55, 0.7)', 'rgba(83, 119, 122, 0.7)', 'rgba(119, 146, 174, 0.7)'];

function drawPeakChart( canvasId ) {
    var i, start, peakPoint,
        canvas = document.getElementById( canvasId ),
        peakData = canvas.dataset.values.split(',').map( function(x){ return parseInt( x, 10 )}),
        ctx = canvas.getContext( '2d' ),
        max = Math.max.apply( Math, peakData ),
        plotBase = canvas.width / peakData.length,
        overlap = plotBase * .4;
        plotBase += canvas.width * .05;
    
    ctx.clearRect( 0, 0, canvas.width, canvas.height );
    
    for( i = 0; i < peakData.length; i++) {
        start = i === 0 ? 0 : i * plotBase - i * overlap;
        peakPoint = canvas.height - Math.round( canvas.height * ( peakData[i] / max ) );
        ctx.fillStyle = peakColors[i];
        ctx.beginPath();
        ctx.moveTo( start, canvas.height );
        ctx.lineTo( start + plotBase * .5, peakPoint );
        ctx.lineTo( start + plotBase, canvas.height );
        ctx.lineTo( start, canvas.height );
        ctx.fill();
    }
}

drawPeakChart('canPeak');

/* Bar Chart Javascript
=====================================================================*/
var barColors = ['rgb(236, 208, 120)', 'rgba(217, 91, 67, 0.7)', 'rgba(192, 41, 66, 0.7)', 'rgba(84, 36, 55, 0.7)', 'rgba(83, 119, 122, 0.7)', 'rgba(119, 146, 174, 0.7)'];

function drawBarChart( canvasId ) {
    var i, start, top,
        canvas = document.getElementById( canvasId ),
        barData = canvas.dataset.values.split(',').map( function(x){ return parseInt( x, 10 )}),
        ctx = canvas.getContext( '2d' ),
        max = Math.max.apply( Math, barData ),
        padding = 20,
        plotWidth = canvas.width / barData.length - padding;
    
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    for( i = 0; i < barData.length; i++) {
        start = i === 0 ? 0 : i * ( plotWidth + padding );
        top = canvas.height - Math.round( canvas.height * ( barData[i] / max ) );
        ctx.fillStyle = peakColors[i];
        ctx.fillRect( start, top, plotWidth, canvas.height - top);
    }
}

drawBarChart('canBar');