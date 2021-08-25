/*=========================================================================================
[Custom Morris Javascript]

Project	     : Finves
Vendor       : Evrothemes
Vendor URL   : https://www.templatemonster.com/vendors/Evrothemes/
Version      : 1.0

Only Use For Demo Purposes.

==========================================================================================*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {


		/* 
		=================================================================
		Morris Line Chart JS
		=================================================================	
		*/

		var area = new Morris.Line({
			element: 'morris_line_chart',
			data: [{
					period: '2013',
					balance: 50,
					principal: 80,
					interest: 20
				}, {
					period: '2014',
					balance: 80,
					principal: 100,
					interest: 50
				}, {
					period: '2015',
					balance: 130,
					principal: 140,
					interest: 80
				}, {
					period: '2016',
					balance: 170,
					principal: 200,
					interest: 120
				}, {
					period: '2017',
					balance: 210,
					principal: 250,
					interest: 140
				}, {
					period: '2018',
					balance: 250,
					principal: 300,
					interest: 160
				},
				{
					period: '2019',
					balance: 280,
					principal: 350,
					interest: 200
				}
			],
			xkey: 'period',
			ykeys: ['balance', 'principal', 'interest'],
			labels: ['balance', 'principal', 'interest'],
			pointSize: 3,
			fillOpacity: 0,
			pointStrokeColors: ['#1cc100', '#fdc006', '#1db4bd'],
			behaveLikeLine: true,
			gridLineColor: '#e0e0e0',
			lineWidth: 1,
			hideHover: 'auto',
			lineColors: ['#1cc100', '#fdc006', '#1db4bd'],
			resize: true
		});



	});


}(jQuery));