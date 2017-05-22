<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DayPilot: AngularJS Event Calendar</title>

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>

        <!-- helper libraries -->
	<script src="js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>

	<!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

        <link type="text/css" rel="stylesheet" href="media/layout.css" />

    </head>
    <body>
        <div id="header">
			<div class="bg-help">
				<div class="inBox">
					<h1 id="logo"><a href='http://code.daypilot.org/63034/angularjs-event-calendar-open-source'>AngularJS Event Calendar (Open-Source)</a></h1>
					<p id="claim"><a href="http://javascript.daypilot.org/">DayPilot for JavaScript</a> - AJAX Calendar/Scheduling Controls for JavaScript</p>
					<hr class="hidden" />
				</div>
			</div>
        </div>
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">

            <div ng-app="main" ng-controller="DemoCtrl" >

                <div style="float:left; width: 160px">
                    <daypilot-navigator id="navi" daypilot-config="navigatorConfig" ></daypilot-navigator>
                </div>
                <div style="margin-left: 160px">
                    <div class="space">
                        <button ng-click="showDay()">Day</button>
                        <button ng-click="showWeek()">Week</button>
                    </div>
                    <daypilot-calendar id="day" daypilot-config="dayConfig" daypilot-events="events" ></daypilot-calendar>
                    <daypilot-calendar id="week" daypilot-config="weekConfig" daypilot-events="events" ></daypilot-calendar>
                </div>
            </div>

            <script>
                var app = angular.module('main', ['daypilot']).controller('DemoCtrl', function($scope, $timeout, $http) {
                    $scope.events = [];

                    $scope.navigatorConfig = {
                        selectMode: "day",
                        showMonths: 3,
                        skipMonths: 3,
                        onTimeRangeSelected: function(args) {
                            $scope.weekConfig.startDate = args.day;
                            $scope.dayConfig.startDate = args.day;
                            loadEvents();
                        }
                    };

                    $scope.dayConfig = {
                        viewType: "Day",
                        onTimeRangeSelected: function(args) {
                            var params = {
                                start: args.start.toString(),
                                end: args.end.toString(),
                                text: "New event"
                            };

                            $http.post("backend_create.php", params).success(function(data) {
                                $scope.events.push({
                                    start: args.start,
                                    end: args.end,
                                    text: "New event",
                                    id: data.id
                                });
                            });
                        },
                        onEventMove: function(args) {
                            var params = {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            };

                            $http.post("backend_move.php", params);
                        },
                        onEventResize: function(args) {
                            var params = {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            };

                            $http.post("backend_move.php", params);
                        },
                        onEventClick: function(args) {
                            var modal = new DayPilot.Modal({
                                onClosed: function(args) {
                                    if (args.result) {  // args.result is empty when modal is closed without submitting
                                        loadEvents();
                                    }
                                }
                            });

                            modal.showUrl("edit.php?id=" + args.e.id());
                        }
                    };

                    $scope.weekConfig = {
                        visible: false,
                        viewType: "Week",
                        onTimeRangeSelected: function(args) {
                            var params = {
                                start: args.start.toString(),
                                end: args.end.toString(),
                                text: "New event"
                            };

                            $http.post("backend_create.php", params).success(function(data) {
                                $scope.events.push({
                                    start: args.start,
                                    end: args.end,
                                    text: "New event",
                                    id: data.id
                                });
                            });
                        },
                        onEventMove: function(args) {
                            var params = {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            };

                            $http.post("backend_move.php", params);
                        },
                        onEventResize: function(args) {
                            var params = {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            };

                            $http.post("backend_move.php", params);
                        },
                        onEventClick: function(args) {
                            var modal = new DayPilot.Modal({
                                onClosed: function(args) {
                                    if (args.result) {  // args.result is empty when modal is closed without submitting
                                        loadEvents();
                                    }
                                }
                            });

                            modal.showUrl("edit.php?id=" + args.e.id());
                        }
                    };

                    $scope.showDay = function() {
                        $scope.dayConfig.visible = true;
                        $scope.weekConfig.visible = false;
                        $scope.navigatorConfig.selectMode = "day";
                    };

                    $scope.showWeek = function() {
                        $scope.dayConfig.visible = false;
                        $scope.weekConfig.visible = true;
                        $scope.navigatorConfig.selectMode = "week";
                    };

                    loadEvents();

                    function loadEvents() {
                        // using $timeout to make sure all changes are applied before reading visibleStart() and visibleEnd()
                        $timeout(function() {
                            var params = {
                                start: $scope.week.visibleStart().toString(),
                                end: $scope.week.visibleEnd().toString()
                            };
                            $http.post("backend_events.php", params).success(function(data) {
                                $scope.events = data;
                            });
                        });
                    }
                });
            </script>


        </div>
        <div class="clear">
        </div>
    </body>
</html>
