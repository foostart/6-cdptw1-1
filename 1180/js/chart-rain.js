window.onload = function () {
    var chart = new CanvasJS.Chart("chartRainContainer",
            {
                animationEnabled: true,
                axisX: {
                    valueFormatString: "DD-MMM",
                    interval: 10,
                    intervalType: "day",
                    labelAngle: -50,
                    labelFontColor: "rgb(0,75,141)",
                    minimum: new Date(2012, 06, 10)
                },
                axisY: {
                    interlacedColor: "#F0FFFF",
                    tickColor: "azure",
                    titleFontColor: "rgb(0,75,141)",
                    valueFormatString: "#M,,.",
                    interval: 100000000
                },
                data: [
                    {
                        indexLabelFontColor: "darkSlateGray",
                        name: 'views',
                        type: "area",
                        color: "rgba(0,75,141,0.7)",
                        markerSize: 8,
                        dataPoints: [
                            {x: new Date(2012, 06, 15), y: 0, indexLabel: "Release", indexLabelOrientation: "vertical", indexLabelFontColor: "orangered", markerColor: "orangered"},
                            {x: new Date(2012, 06, 18), y: 2000000},
                            {x: new Date(2012, 06, 23), y: 6000000},
                            {x: new Date(2012, 07, 1), y: 10000000, indexLabel: "10m"},
                            {x: new Date(2012, 07, 11), y: 21000000},
                            {x: new Date(2012, 07, 23), y: 50000000},
                            {x: new Date(2012, 07, 31), y: 75000000},
                            {x: new Date(2012, 08, 04), y: 100000000, indexLabel: "100m"},
                            {x: new Date(2012, 08, 10), y: 125000000},
                            {x: new Date(2012, 08, 13), y: 150000000},
                            {x: new Date(2012, 08, 16), y: 175000000},
                            {x: new Date(2012, 08, 18), y: 200000000, indexLabel: "200m"},
                            {x: new Date(2012, 08, 21), y: 225000000},
                            {x: new Date(2012, 08, 24), y: 250000000},
                            {x: new Date(2012, 08, 26), y: 275000000},
                            {x: new Date(2012, 08, 28), y: 302000000, indexLabel: "300m"}
                        ]
                    }

                ]
            });

    

    var chart2 = new CanvasJS.Chart("chartCoalContainer2",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart2.render();
                    }
                }
            });

    var chart3 = new CanvasJS.Chart("chartCoalContainer3",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart3.render();
                    }
                }
            });
    var chart4 = new CanvasJS.Chart("chartCoalContainer4",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart4.render();
                    }
                }
            });


    chart.render();
    chart2.render();
    chart3.render();
    chart4.render();
}