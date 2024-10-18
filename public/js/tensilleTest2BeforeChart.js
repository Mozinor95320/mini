// chart.js
var tensileTest2BeforeChart;

//ajaxGetChartTensileTest($tracabilitySheet_id, $tensileTestNumber, $beforeOrAfterShrinkFit )

document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('chart2BeforeShrinkFit').getContext('2d');

    // AJAX request to get data
    fetch(url + "/tracabilitySheets/ajaxGetChartTensileTest2/" + serialNumberSheet)
        .then(response => response.json())
        .then(data => {
            // Extraction des labels et des données
            const timeLogs = data.map(item => item.timeLog);
            const forceN = data.map(item => item.forceN);

            // Chart Settings
            const tensileTest2BeforeChart = new Chart(ctx, {
                type: 'line', 
                data: {
                    labels: timeLogs,  // Time in labels
                    datasets: 
                        {
                            label: 'Force (N)',
                            data: forceN,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: false
                        }
                    
                },
                options: {
                    responsive: true, // Rend le graphique responsive
                    maintainAspectRatio: false, // Permet d'adapter la hauteur en fonction de la largeur
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Temps (s)'
                            }
                        },
                        y: {
                            beginAtZero: true, // Début de l'axe Y à zéro
                            title: {
                                display: true,
                                text: 'Valeurs'
                            }
                        }
                    },
                    plugins: {
                        zoom: {
                            zoom: {
                                wheel: {
                                    enabled: true,
                                },
                                pinch: {
                                    enabled: true
                                },
                                mode: 'xy',
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des données:', error));
});
