// chart.js
var tensileTest1BeforeChart;

//ajaxGetChartTensileTest($tracabilitySheet_id, $tensileTestNumber, $beforeOrAfterShrinkFit )

document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('myChartGeneral').getContext('2d');

    // AJAX request to get data
    fetch(url + "/tracabilitySheets/ajaxGetChartTensileTest/" + serialNumberSheet)
        .then(response => response.json())
        .then(data => {
            // Extraction des labels et des données
            const timeLogs = data.map(item => item.timeLog);
            const dancerArmPressureSetpoint = data.map(item => item.dancerArmPressureSetpoint);

            // Chart Settings
            const tensileTest1BeforeChart = new Chart(ctx, {
                type: 'line', 
                data: {
                    labels: timeLogs,  // Time in labels
                    datasets: [
                        {
                            label: 'Dancer Arm Pressure Setpoint',
                            data: dancerArmPressureSetpoint,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Dancer Arm Tension Actual',
                            data: dancerArmTensionActual,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Post Tension Actual',
                            data: postTensionActual,
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Pre Tension Setpoint',
                            data: preTensionSetpoint,
                            borderColor: 'rgba(153, 102, 255, 1)',
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Pre Tension Actual',
                            data: preTensionActual,
                            borderColor: 'rgba(255, 159, 64, 1)',
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Hot Air Blower Setpoint',
                            data: hotAirBlowerSetpoint,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Nozzle Heater Actual',
                            data: nozzleHeaterActual,
                            borderColor: 'rgba(201, 203, 207, 1)',
                            backgroundColor: 'rgba(201, 203, 207, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Nozzle Heater Setpoint',
                            data: nozzleHeaterSetpoint,
                            borderColor: 'rgba(255, 205, 86, 1)',
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Tape Heater Actual',
                            data: tapeHeaterActual,
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            fill: false
                        },
                        {
                            label: 'Tape Heater Setpoint',
                            data: tapeHeaterSetpoint,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true, // Rend le graphique responsive
                    maintainAspectRatio: false, // Permet d'adapter la hauteur en fonction de la largeur
                    scales: {
                        x: {
                            type: 'time', // Échelle temporelle
                            time: {
                                unit: 'minute', // Affichage par minute
                                tooltipFormat: 'YYYY-MM-DD HH:mm:ss', // Format des tooltips
                                displayFormats: {
                                    minute: 'HH:mm:ss' // Format affiché
                                }
                            },
                            title: {
                                display: true,
                                text: 'Temps'
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
