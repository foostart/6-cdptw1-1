/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart = new CanvasJS.Chart("chartReportContainer",
            {
                zoomEnabled: false,
                animationEnabled: true,

                data: [
                    {
                        type: "line",
                        lineThickness: 3,
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 0), y: 0},
                            {x: new Date(2002, 0), y: 0.001},
                            {x: new Date(2003, 0), y: 0.01},
                            {x: new Date(2004, 0), y: 0.05},
                            {x: new Date(2005, 0), y: 0.1},
                            {x: new Date(2006, 0), y: 0.15},
                            {x: new Date(2007, 0), y: 0.22},
                            {x: new Date(2008, 0), y: 0.38},
                            {x: new Date(2009, 0), y: 0.56},
                            {x: new Date(2010, 0), y: 0.77},
                            {x: new Date(2011, 0), y: 0.91},
                            {x: new Date(2012, 0), y: 0.94}


                        ]
                    },
                    {
                        type: "line",
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.18},
                            {x: new Date(2002, 00), y: 0.2},
                            {x: new Date(2003, 0), y: 0.25},
                            {x: new Date(2004, 0), y: 0.35},
                            {x: new Date(2005, 0), y: 0.42},
                            {x: new Date(2006, 0), y: 0.5},
                            {x: new Date(2007, 0), y: 0.58},
                            {x: new Date(2008, 0), y: 0.67},
                            {x: new Date(2009, 0), y: 0.78},
                            {x: new Date(2010, 0), y: 0.88},
                            {x: new Date(2011, 0), y: 0.98},
                            {x: new Date(2012, 0), y: 1.04}


                        ]
                    },
                    {
                        type: "line",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.16},
                            {x: new Date(2002, 0), y: 0.17},
                            {x: new Date(2003, 0), y: 0.18},
                            {x: new Date(2004, 0), y: 0.19},
                            {x: new Date(2005, 0), y: 0.20},
                            {x: new Date(2006, 0), y: 0.23},
                            {x: new Date(2007, 0), y: 0.261},
                            {x: new Date(2008, 0), y: 0.289},
                            {x: new Date(2009, 0), y: 0.3},
                            {x: new Date(2010, 0), y: 0.31},
                            {x: new Date(2011, 0), y: 0.32},
                            {x: new Date(2012, 0), y: 0.33}


                        ]
                    }



                ],
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    var chart1 = new CanvasJS.Chart("chartPieContainer1",
            {
                data: [
                    {
                        type: "pie",
                        showInLegend: false,
                        dataPoints: [
                            {y: 10, name: "Android", color: "red"},
                            {y: 30, name: "IOS", color: "blue"},
                            {y: 20, name: "Blackberry", color: "black"},
                            {y: 15, name: "Symbian", color: "gray"},
                            {y: 30, name: "Other", color: "orange"}
                        ]
                    }
                ]
            });
    var chart2 = new CanvasJS.Chart("chartPieContainer2",
            {
                data: [
                    {
                        type: "pie",
                        showInLegend: false,
                        dataPoints: [
                            {y: 10, name: "Android", color: "red"},
                            {y: 30, name: "IOS", color: "blue"},
                            {y: 20, name: "Blackberry", color: "black"},
                            {y: 15, name: "Symbian", color: "gray"},
                            {y: 30, name: "Other", color: "orange"}
                        ]
                    }
                ]
            });
    var chart3 = new CanvasJS.Chart("chartPieContainer3",
            {
                data: [
                    {
                        type: "pie",
                        showInLegend: false,
                        dataPoints: [
                            {y: 10, name: "Android", color: "red"},
                            {y: 30, name: "IOS", color: "blue"},
                            {y: 20, name: "Blackberry", color: "black"},
                            {y: 15, name: "Symbian", color: "gray"},
                            {y: 30, name: "Other", color: "orange"}
                        ]
                    }
                ]
            });

    chart.render();
    chart1.render();
    chart2.render();
    chart3.render();
}