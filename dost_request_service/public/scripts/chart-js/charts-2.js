// admin and tech request
// pie chart
Highcharts.chart('pie-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Intel 3',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Intel 5',
            y: 11.84
        }, {
            name: 'Intel 7',
            y: 10.85
        }, {
            name: 'Asus',
            y: 4.67
        }, {
            name: 'Acer',
            y: 4.18
        }]
    }]
});

// bar chart
Highcharts.chart('bar-chart-2', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
        name: "Brands",
        colorByPoint: true,
        data: [{
                name: "January",
                y: 62.74,
                drilldown: "1"
            },
            {
                name: "February",
                y: 10.57,
                drilldown: "2"
            },
            {
                name: "March",
                y: 7.23,
                drilldown: "3"
            },
            {
                name: "April",
                y: 5.58,
                drilldown: "4"
            },
            {
                name: "May",
                y: 4.02,
                drilldown: "5"
            },
            {
                name: "June",
                y: 1.92,
                drilldown: "6"
            }
        ]
    }],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: [{
                name: "January",
                id: "1",
                data: [
                    [
                        "Dell",
                        0.1
                    ],
                    [
                        "Lenovo",
                        1.3
                    ],
                    [
                        "Asus",
                        53.02
                    ],
                    [
                        "Acer",
                        1.4
                    ],
                    [
                        "Boston",
                        0.88
                    ]
                ]
            },
            {
                name: "February",
                id: "2",
                data: [
                    [
                        "Boston",
                        1.02
                    ],
                    [
                        "Acer",
                        7.36
                    ],
                    [
                        "Dell",
                        0.35
                    ],
                    [
                        "Asus",
                        0.11
                    ]
                ]
            },
            {
                name: "March",
                id: "3",
                data: [
                    [
                        "Dell",
                        6.2
                    ],
                    [
                        "Lenovo",
                        0.29
                    ],
                    [
                        "Asus",
                        0.27
                    ],
                    [
                        "Acer",
                        0.47
                    ]
                ]
            },
            {
                name: "April",
                id: "4",
                data: [
                    [
                        "Intel 7",
                        3.39
                    ],
                    [
                        "AMD Ryzen 9",
                        0.96
                    ],
                    [
                        "AMD Ryzen 7",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "Intel 5",
                        0.13
                    ],
                    [
                        "Intel 3",
                        0.2
                    ]
                ]
            },
            {
                name: "May",
                id: "5",
                data: [
                    [
                        "Intel 3",
                        2.6
                    ],
                    [
                        "Intel Pentium",
                        0.92
                    ],
                    [
                        "Intel 5",
                        0.4
                    ],
                    [
                        "Intel 7",
                        0.1
                    ]
                ]
            },
            {
                name: "June",
                id: "6",
                data: [
                    [
                        "Intel 3",
                        0.96
                    ],
                    [
                        "AMD Ryzen 7",
                        0.82
                    ],
                    [
                        "Asus",
                        0.14
                    ]
                ]
            }
        ]
    }
});