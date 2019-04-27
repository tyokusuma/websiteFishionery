var labels = [
    "revenues",
    "production",
];
var data = [
    12000,
    1064,
];
var pie = document.getElementById("pieChart").getContext('2d');
var myChart = new Chart(pie, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [
            {
                data: data,
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(192, 0, 0, 1)'],
                backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(192, 0, 0, 0.2)'],
            }
        ]
    },
    options: {
        title: {
            display: true,
            text: "total income"
        }
    }
});
