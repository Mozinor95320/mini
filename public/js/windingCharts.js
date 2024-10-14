$(function() {


    // if #javascript-ajax-button exists
    if ($('#javascript-ajax-button').length !== 0) {

        $('#javascript-ajax-button').on('click', function(){

            // send an ajax-request to this URL: current-server.com/songs/ajaxGetStats
            // "url" is defined in views/_templates/footer.php
            $.ajax(url + "/tracabilitySheets/ajaxGetWindingChart/" + serialNumberSheet)
                .done(function(result) {
                    // this will be executed if the ajax-call was successful
                    // here we get the feedback from the ajax-call (result) and show it in #javascript-ajax-result-box
                    $('#javascript-ajax-result-box').html(result);
                })
                .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
                .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
        });
    }

});



var chartGeneral;
var chartPreTension;
var chartPostTension;
var chartPreTemperature;
var chartPostTemperature;

// Fonction pour construire et afficher le graphique
async function renderChart(result) {
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