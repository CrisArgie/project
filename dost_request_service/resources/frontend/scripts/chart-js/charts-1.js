// start admin_users.php
window.chart = new Highcharts.chart({
    chart: {
        renderTo: 'admin-bar-per-users',
        type: 'column'
    },
    title: {
        text: 'Total number of each type of user'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (Users)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Population in 2022: <b>{point.y:.1f} user(s)</b>'
    },
    series: [{
        name: 'Users',
        data: [
            ['Employee', 24.2],
            ['Technician', 20.8],
            ['Admin', 14.9]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

// end admin_users.php