
var chartGeneral;
var chartPreTension;
var chartPostTension;
var chartPreTemperature;
var chartPostTemperature;

// Fonction pour construire et afficher le graphique
async function renderChart() {
    const dataFromDB = <?php echo json_encode($tracabilitySheet->dataGraph); ?>;

    // Extraire les données pour chaque colonne
    const timeLog = dataFromDB.map(item => item.timeLog); // Colonne 'temps'
    const dancerArmPressureSetpoint = dataFromDB.map(item => item.dancerArmPressureSetpoint);
    const dancerArmTensionActual = dataFromDB.map(item => item.dancerArmTensionActual);
    const postTensionActual = dataFromDB.map(item => item.postTensionActual);
    const preTensionSetpoint = dataFromDB.map(item => item.preTensionSetpoint);
    const preTensionActual = dataFromDB.map(item => item.preTensionActual);
    const hotAirBlowerSetpoint = dataFromDB.map(item => item.hotAirBlowerSetpoint);
    const nozzleHeaterActual = dataFromDB.map(item => item.nozzleHeaterActual);
    const nozzleHeaterSetpoint = dataFromDB.map(item => item.nozzleHeaterSetpoint);
    const tapeHeaterActual = dataFromDB.map(item => item.tapeHeaterActual);
    const tapeHeaterSetpoint = dataFromDB.map(item => item.tapeHeaterSetpoint);

    // Création du graphique General
    const ctx = document.getElementById('myChartGeneral').getContext('2d');
    chartGeneral = new Chart(ctx, {
        type: 'line',
        data: {
            labels: timeLog, // Utilisation de la colonne 'temps' sur l'axe X
            datasets: [{
                    label: 'Dancer Arm Pressure Setpoint',
                    data: dancerArmPressureSetpoint,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                },
                {
                    label: 'Dancer Arm Tension Actual',
                    data: dancerArmTensionActual,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: false
                },
                {
                    label: 'Post Tension Actual',
                    data: postTensionActual,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                },
                {
                    label: 'Pre Tension Setpoint',
                    data: preTensionSetpoint,
                    borderColor: 'rgba(153, 102, 255, 1)',
                    fill: false
                },
                {
                    label: 'Pre Tension Actual',
                    data: preTensionActual,
                    borderColor: 'rgba(255, 159, 64, 1)',
                    fill: false
                },
                {
                    label: 'Hot Air Blower Setpoint',
                    data: hotAirBlowerSetpoint,
                    borderColor: 'rgba(255, 206, 86, 1)',
                    fill: false
                },
                {
                    label: 'Nozzle Heater Actual',
                    data: nozzleHeaterActual,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                },
                {
                    label: 'Nozzle Heater Setpoint',
                    data: nozzleHeaterSetpoint,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: false
                },
                {
                    label: 'Tape Heater Actual',
                    data: tapeHeaterActual,
                    borderColor: 'rgba(153, 102, 255, 1)',
                    fill: false
                },
                {
                    label: 'Tape Heater Setpoint',
                    data: tapeHeaterSetpoint,
                    borderColor: 'rgba(255, 99, 132, 1)',
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

    // Création du graphique PRE TENSION
    const ctx2 = document.getElementById('myChartPreTension').getContext('2d');
    chartPreTension = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: timeLog, // Utilisation de la colonne 'temps' sur l'axe X
            datasets: [{
                    label: 'Pre Tension Setpoint',
                    data: preTensionSetpoint,
                    borderColor: 'rgba(153, 102, 255, 1)',
                    fill: false
                },
                {
                    label: 'Pre Tension Actual',
                    data: preTensionActual,
                    borderColor: 'rgba(255, 159, 64, 1)',
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

    // Création du graphique POST TENSION
    const ctx3 = document.getElementById('myChartPostTension').getContext('2d');
    chartPostTension = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: timeLog, // Utilisation de la colonne 'temps' sur l'axe X
            datasets: [{
                    label: 'dancer Arm Pressure Setpoint',
                    data: dancerArmPressureSetpoint,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                },
                {
                    label: 'dancer Arm Tension Actual',
                    data: dancerArmTensionActual,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: false
                },
                {
                    label: 'post Tension Actual',
                    data: postTensionActual,
                    borderColor: 'rgba(75, 192, 192, 1)',
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

    // Création du graphique POST TENSION
    const ctx4 = document.getElementById('myChartTemperature').getContext('2d');
    chartTemperature = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: timeLog, // Utilisation de la colonne 'temps' sur l'axe X
            datasets: [{
                    label: 'Nozzle Heater Actual',
                    data: nozzleHeaterActual,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                },
                {
                    label: 'Nozzle Heater Setpoint',
                    data: nozzleHeaterSetpoint,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: false
                },
                {
                    label: 'Hot Air Blower Setpoint',
                    data: hotAirBlowerSetpoint,
                    borderColor: 'rgba(75, 192, 192, 1)',
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
}

function resetZoomChartGeneral() {
    chartGeneral.resetZoom();
}

function resetZoomChartPreTension() {
    chartPreTension.resetZoom();
}

function resetZoomChartPostTension() {
    chartPostTension.resetZoom();
}

function resetZoomChartTemperature() {
    chartTemperature.resetZoom();
}

// Appel à la fonction pour afficher le graphique
renderChart();