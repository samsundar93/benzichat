
(function () {
  'use strict';

  var app = angular.module('chartviewlists', ['chart.js', 'ui.bootstrap']);

  app.config(function (ChartJsProvider) {
    // Configure all charts
    ChartJsProvider.setOptions({
      colors: ['#97BBCD', '#cf2315', '#F7464A', '#46BFBD', '#FDB45C', '#949FB1', '#4D5360']
    });
    // Configure all doughnut charts
    ChartJsProvider.setOptions('doughnut', {
      cutoutPercentage: 60
    });
    ChartJsProvider.setOptions('bubble', {
      tooltips: { enabled: false }
    });
  });

  app.controller('MenuCtrl', ['$scope', function ($scope) {
    $scope.isCollapsed = true;
    $scope.charts = ['Line', 'Bar', 'Doughnut', 'Pie', 'Polar Area', 'Radar', 'Horizontal Bar', 'Bubble', 'Base'];
  }]);

  app.controller('LineCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $scope.series = ['Series A', 'Series B'];
    $scope.data = [
      [65, 59, 80, 81, 56, 55, 40],
      [28, 48, 40, 19, 86, 27, 90]
    ];
    $scope.onClick = function (points, evt) {
      console.log(points, evt);
    };
    $scope.onHover = function (points) {
      if (points.length > 0) {
       console.log('Point', points[0].value);
      } else {
        console.log('No point');
      }
    };
    $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];

    $scope.options = {
      scales: {
        yAxes: [
          {
            id: 'y-axis-1',
            type: 'linear',
            display: true,
            position: 'left'
          },
          {
            id: 'y-axis-2',
            type: 'linear',
            display: true,
            position: 'right'
          }
        ]
      }
    };
  }]);  
  
  
  
  app.controller('errorBarCtrl', ['$scope', function ($scope) { 
		$scope.options = { legend: { display: false }, 
			responsive: true, 
			maintainAspectRatio: false,
			scales: {
				xAxes: [{
					  scaleLabel: {
						display: true,
						labelString: 'Error Code'
					  }
				}],
				yAxes: [{
					scaleLabel: {
						display: true,
						labelString: 'Error Count'
					  },
					ticks: {
						beginAtZero: true,
						userCallback: function (label, index, labels) {
							// when the floored value is the same as the value we have a whole number
							if (Math.floor(label) === label) {
								return label;
							}

						},
					}
				}]
			}
		};
		$scope.labels = ['101','99','107'];
		$scope.series = ['Error Count'];
		$scope.data = [ 
		  [12, 7, 3]
		];
		$scope.width = 80;
		$scope.colors=[ 
		  { // dark grey
			backgroundColor: '#e44235',
			pointBackgroundColor: '#e44235',
			pointHoverBackgroundColor: '#e44235',
			borderColor: '#e44235',
			pointBorderColor: '#cf2315',
			pointHoverBorderColor: '#cf2315'
		  }
		];
	  }]);
  
  
  
  
  app.controller('menuBarCtrl', ['$scope', function ($scope) { 
    $scope.options = { legend: { display: true } };
    $scope.labels = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    $scope.data = [ 
      [700, 800, 680, 700, 650, 750, 800]
    ];
       $scope.colors=[ 
      { // dark grey
		backgroundColor: '#e44235',
		pointBackgroundColor: '#e44235',
		pointHoverBackgroundColor: '#e44235',
		borderColor: '#e44235',
        pointBorderColor: '#cf2315',
        pointHoverBorderColor: '#cf2315'
      }
    ];
  }]);
app.controller('menuBarMonthCtrl', ['$scope', function ($scope) { 
    $scope.options = { legend: { display: true } };
    $scope.labels = ['11', '12', '13', '14', '15', '16', '17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','01','02','03','04','05','06','07','08','09','10','11'];
    $scope.data = [ 
      [700, 800, 680, 700, 650, 750, 800,700, 800, 680, 700, 650, 750, 800,700, 800, 680, 700, 650, 750, 800,700, 800, 680, 700, 650, 750, 800, 650, 750, 800,800]
    ];
       $scope.colors=[ 
      { // dark grey
		backgroundColor: '#e44235',
		pointBackgroundColor: '#e44235',
		pointHoverBackgroundColor: '#e44235',
		borderColor: '#e44235',
        pointBorderColor: '#cf2315',
        pointHoverBorderColor: '#cf2315'
      }
    ];
  }]);
  app.controller('DoughnutCtrl', ['$scope', '$timeout', function ($scope, $timeout) {
    $scope.labels = ['Download Sales', 'In-Store Sales', 'Mail-Order Sales'];
    $scope.data = [0, 0, 0];

    $timeout(function () {
      $scope.data = [350, 450, 100];
    }, 500);
  }]);

  app.controller('PieCtrl', ['$scope', function ($scope) {
	$scope.colors = ['#fbd0d7', '#f7a1af', '#f47187', '#f0425f', '#ec1337', '#e44235', '#a50d27', '#760a1c', '#470611'];
    $scope.labels = ['APPLEWOOD BACON','BREADED CHICKEN X2','SPICY CHICKEN X6', 'BREAKFAST HAM x4', 'SAUSAGE MUFFIN x4','CROIS APL BACON x4'];
    $scope.data = [200, 100, 50, 100, 200,150];
    $scope.options = { legend: { display: true, position: 'right' } };
  }]);

  app.controller('PolarAreaCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Download Sales', 'In-Store Sales', 'Mail Sales', 'Telesales', 'Corporate Sales'];
    $scope.data = [300, 500, 100, 40, 120];
    $scope.options = { legend: { display: false } };
  }]);

  app.controller('BaseCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Download Sales', 'Store Sales', 'Mail Sales', 'Telesales', 'Corporate Sales'];
    $scope.data = [300, 500, 100, 40, 120];
    $scope.type = 'polarArea';

    $scope.toggle = function () {
      $scope.type = $scope.type === 'polarArea' ?  'pie' : 'polarArea';
    };
  }]);

  app.controller('RadarCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'];
    $scope.options = { legend: { display: false } };

    $scope.data = [
      [65, 59, 90, 81, 56, 55, 40],
      [28, 48, 40, 19, 96, 27, 100]
    ];

    $scope.onClick = function (points, evt) {
      console.log(points, evt);
    };
  }]);

  app.controller('StackedBarCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $scope.type = 'StackedBar';
    $scope.series = ['2015', '2016'];
    $scope.options = {
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    };

    $scope.data = [
      [65, 59, 90, 81, 56, 55, 40],
      [28, 48, 40, 19, 96, 27, 100]
    ];
  }]);

  app.controller('TabsCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $scope.active = true;
    $scope.data = [
      [65, 59, 90, 81, 56, 55, 40],
      [28, 48, 40, 19, 96, 27, 100]
    ];
  }]);

  app.controller('MixedChartCtrl', ['$scope', function ($scope) {
    $scope.colors = ['#45b7cd', '#ff6384', '#ff8e72'];

    $scope.labels = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    $scope.data = [
      [65, -59, 80, 81, -56, 55, -40],
      [28, 48, -40, 19, 86, 27, 90]
    ];
    $scope.datasetOverride = [
      {
        label: 'Bar chart',
        borderWidth: 1,
        type: 'bar'
      },
      {
        label: 'Line chart',
        borderWidth: 3,
        hoverBackgroundColor: 'rgba(255,99,132,0.4)',
        hoverBorderColor: 'rgba(255,99,132,1)',
        type: 'line'
      }
    ];
  }]);

  app.controller('DataTablesCtrl', ['$scope', function ($scope) {
    $scope.labels = ['Saturday','Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    $scope.data = [ 
      [28, 48, 40, 19, 86, 27, 90]
    ];
    $scope.colors = [
      { // grey
        backgroundColor: 'rgba(148,159,177,0.2)',
        pointBackgroundColor: 'rgba(148,159,177,1)',
        pointHoverBackgroundColor: 'rgba(148,159,177,1)',
        borderColor: 'rgba(148,159,177,1)',
        pointBorderColor: '#fff',
        pointHoverBorderColor: 'rgba(148,159,177,0.8)'
      },
      { // dark grey
        backgroundColor: 'rgba(77,83,96,0.2)',
        pointBackgroundColor: 'rgba(77,83,96,1)',
        pointHoverBackgroundColor: 'rgba(77,83,96,1)',
        borderColor: 'rgba(77,83,96,1)',
        pointBorderColor: '#fff',
        pointHoverBorderColor: 'rgba(77,83,96,0.8)'
      }
    ];
    $scope.options = { legend: { display: false } };
    $scope.randomize = function () {
      $scope.data = $scope.data.map(function (data) {
        return data.map(function (y) {
          y = y + Math.random() * 10 - 5;
          return parseInt(y < 0 ? 0 : y > 100 ? 100 : y);
        });
      });
    };
  }]);

  app.controller('BubbleCtrl', ['$scope', '$interval', function ($scope, $interval) {
       $scope.labels = ['Saturday','Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    $scope.data = [ 
      [28, 48, 40, 19, 86, 27, 90]
    ];
    $scope.options = {
      scales: {
        xAxes: [{
          display: false,
          ticks: {
            max: 125,
            min: -125,
            stepSize: 10
          }
        }],
        yAxes: [{
          display: false,
          ticks: {
            max: 125,
            min: -125,
            stepSize: 10
          }
        }]
      }
    };

    createChart();
    //$interval(createChart, 2000);

    function createChart () {
      $scope.data = [];
      for (var i = 0; i < 50; i++) {
        $scope.data.push([{
          x: randomScalingFactor(),
          y: randomScalingFactor(),
          r: randomRadius()
        }]);
      }
    }

    function randomScalingFactor () {
      return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
    }

    function randomRadius () {
      return Math.abs(randomScalingFactor()) / 4;
    }
  }]);

  app.controller('TicksCtrl', ['$scope', '$interval', function ($scope, $interval) {
    var maximum = document.getElementById('container').clientWidth / 2 || 300;
    $scope.data = [[]];
    $scope.labels = [];
    $scope.options = {
      animation: {
        duration: 0
      },
      elements: {
        line: {
          borderWidth: 0.5
        },
        point: {
          radius: 0
        }
      },
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }],
        gridLines: {
          display: false
        }
      },
      tooltips: {
        enabled: false
      }
    };

    // Update the dataset at 25FPS for a smoothly-animating chart
    $interval(function () {
      getLiveChartData();
    }, 40);

    function getLiveChartData () {
      if ($scope.data[0].length) {
        $scope.labels = $scope.labels.slice(1);
        $scope.data[0] = $scope.data[0].slice(1);
      }

      while ($scope.data[0].length < maximum) {
        $scope.labels.push('');
        $scope.data[0].push(getRandomValue($scope.data[0]));
      }
    }
  }]);

  function getRandomValue (data) {
    var l = data.length, previous = l ? data[l - 1] : 50;
    var y = previous + Math.random() * 10 - 5;
    return y < 0 ? 0 : y > 100 ? 100 : y;
  }
})(); 