const graph = document.getElementById('graph').getContext('2d');

new Chart(graph, {
    type: 'line',
    data:{
        labels:['January', 'Feburary', 'March', 'April', 'May'],
        datasets: [{
            label:'Income',
            data:[1200, 2000, 1800, 2200, 2100],
            backgroundColor: 'rgba(0, 180, 250, 0.45)',
            borderColor:'rgba(0, 150, 250, 0.9)',
            borderWidth:1,
            fill:true
        },
        {
            label:'s',
            data:[1000, 1500, 2100, 1200, 1800],
            backgroundColor: 'rgba(250, 0, 0, 0.45)',
            borderColor:'red',
            borderWidth:1,
            fill:true
        }]
    }
});