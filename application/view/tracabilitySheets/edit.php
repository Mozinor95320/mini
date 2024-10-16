<div class="container mt-4">
    <form action="<?php echo URL; ?>tracabilitySheets/updatetracabilitySheet" method="POST">

        <div class="row mb-3">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary" name="submit_update_tracabilitySheet" value="Update">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z" />
                            <path
                                d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
                        </svg>
                    </button>

                    <!-- Exporter en PDF avec logo -->
                    <button class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                            <path
                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                            <path
                                d="M4.603 14.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.7 11.7 0 0 0-1.997.406 11.3 11.3 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.245.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 7.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
                        </svg> PDF
                    </button>

                    <!-- Toggle Button -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="button" aria-pressed="false">
                        <i class="bi bi-lock"></i> Verrouillage
                    </button>
                </div>
            </div>
        </div>

        <hr>

        <div class="mb-3">

            <!-- Nav Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Données de production</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Frettage</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Essais de traction</a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <!-- TAB 1 - TRACABILITY SHEET -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <!-- Generic Data-->
                <div class="card-body">
                    <div class="mb-3 ml-3">
                        <h2>Informations générales</h2>
                        <h3>Description de la fiche de tracabilité</h3>
                    </div>
                    <div class="row align-items-center mb-3">

                        <!-- Work Order Field -->
                        <div class="col-md-6">
                            <label for="numeroOF" class="form-label">N°OF</label>
                            <input type="text" class="form-control" id="workOrder" name="workOrder"
                                value="<?php echo htmlspecialchars($tracabilitySheet->workOrder, ENT_QUOTES, 'UTF-8'); ?>"
                                readonly>

                        </div>

                        <!-- Serial Number Field -->
                        <div class="col-md-6">
                            <label for="numeroOF" class="form-label">SN</label>
                            <input type="text" class="form-control" id="serialNumber" name="serialNumber"
                                value="<?php echo htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">

                        <!-- Part Number Field -->
                        <div class="col-md-6">
                            <label for="numeroOF" class="form-label">PN</label>
                            <input type="text" class="form-control" id="partNumber" name="partNumber"
                                value="<?php echo htmlspecialchars($tracabilitySheet->partNumber, ENT_QUOTES, 'UTF-8'); ?>"
                                readonly>

                        </div>

                        <!-- Sheet Creation Date -->
                        <div class="col-md-6">
                            <label for="date" class="form-label">Date de création de la fiche</label>
                            <input type="datetime-local" class="form-control" id="sheetCreationDate"
                                name="sheetCreationDate"
                                value="<?php echo htmlspecialchars(date("Y-m-d\TH:i:s", strtotime($tracabilitySheet->sheetCreationDate)), ENT_QUOTES, 'UTF-8'); ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">

                        <!-- Plan Reference Field -->
                        <div class="col-md-6">
                            <label for="referencePlan" class="form-label">Référence plan</label>
                            <input type="text" class="form-control" id="refPlan" name="refPlan"
                                value="<?php echo htmlspecialchars($tracabilitySheet->refPlan, ENT_QUOTES, 'UTF-8'); ?>"
                                readonly>

                        </div>

                        <!-- Machine Reference Field -->
                        <div class="col-md-6">
                            <label for="machine" class="form-label">Machine</label>
                            <input type="text" class="form-control" id="refMachine" name="refMachine"
                                value="<?php echo htmlspecialchars($tracabilitySheet->refMachine, ENT_QUOTES, 'UTF-8'); ?>"
                                readonly>
                        </div>
                    </div>
                </div>
                <h2 class="mb-3">Catégories</h2>

                <!-- Section 1: Fiber Data -->

                <input type="hidden" name="tracabilitySheet_id"
                    value="<?php echo htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>" />
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Données Matière
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <!-- Material Reference Field -->
                                <div class="mb-3">
                                    <label for="matiere" class="form-label">Matière</label>
                                    <select class="form-select" id="material" name="material">
                                        <option selected disabled>Sélectionner la matière</option>
                                        <option <?php if ($tracabilitySheet->material == 'TWARON 2200 / PA12-2159 0.24 x 8')
                                                    echo 'selected'; ?>>TWARON 2200 / PA12-2159 0.24 x 8</option>
                                        <option <?php if ($tracabilitySheet->material == 'TWARON 2200 / PA12-2159 0.16 x 8')
                                                    echo 'selected'; ?>>TWARON 2200 / PA12-2159 0.16 x 8</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <!-- Sppol Batch Reference Field -->
                                    <div class="col-md-6">
                                        <label for="bobine" class="form-label">Bobine</label>
                                        <input type="text" class="form-control" id="spoolBatch" name="spoolBatch"
                                            value="<?php echo isset($tracabilitySheet->spoolBatch) && !empty($tracabilitySheet->spoolBatch) ? htmlspecialchars($tracabilitySheet->spoolBatch, ENT_QUOTES, 'UTF-8') : ""; ?>">
                                    </div>

                                    <!-- Spool Number Field -->
                                    <div class="col-md-6">
                                        <label for="lot" class="form-label">Lot</label>
                                        <input type="number" class="form-control" id="spoolNumber" name="spoolNumber"
                                            value="<?php echo isset($tracabilitySheet->spoolNumber) && !empty($tracabilitySheet->spoolNumber) ? htmlspecialchars($tracabilitySheet->spoolNumber, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                    </div>
                                </div>
                                <!-- Button - Modal - Help Spool Data -->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#tuto1">
                                        <i class="bi bi-question-circle"></i>
                                    </button>
                                </div>
                                <!-- Content - Modal - Help Spool Data -->
                                <div class="modal fade" id="tuto1" tabindex="-1" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Comment saisir des données de
                                                    la bobine</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Fermer"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://via.placeholder.com/600x300"
                                                    alt="Description de l'image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Dimensions After Coating -->

                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Dimensions après enduction
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <!-- Date Dimension After Coating -->
                                <div class="mb-3">
                                    <label for="dateEnduction" class="form-label">Date</label>
                                    <input type="datetime-local" class="form-control" id="dateDimAfterCoating"
                                        name="dateDimAfterCoating"
                                        value="<?php echo htmlspecialchars(date("Y-m-d\TH:i:s", strtotime($tracabilitySheet->sheetCreationDate)), ENT_QUOTES, 'UTF-8'); ?>"
                                        readonly>
                                        value="<?php echo isset($tracabilitySheet->dateDimAfterCoating) && !empty($tracabilitySheet->dateDimAfterCoating) ? htmlspecialchars(date("Y-m-d\TH:i:s", strtotime($tracabilitySheet->dateDimAfterCoating)), ENT_QUOTES, 'UTF-8') : ""; ?>">
                                </div>


                                <div class="row align-items-center mb-3">

                                    <!-- Dimensions length L -->
                                    <div class="col-md-4">
                                        <label for="longueur" class="form-label">Longueur L</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="lengthL" name="lengthL"
                                                placeholder="Entrez la longueur"
                                                value="<?php echo isset($tracabilitySheet->lengthL) && !empty($tracabilitySheet->lengthL) ? htmlspecialchars($tracabilitySheet->lengthL, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceLengthL">413,5 (-6/+0)</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!-- Dimension diameter D -->
                                    <div class="col-md-4 mb-3">
                                        <label for="diametre" class="form-label">Diamètre D</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="diameterD" name="diameterD"
                                                placeholder="Entrez le diamètre"
                                                value="<?php echo isset($tracabilitySheet->diameterD) && !empty($tracabilitySheet->diameterD) ? htmlspecialchars($tracabilitySheet->diameterD, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceDiameterD">163(-0/+0,9)</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!-- Mass M -->
                                    <div class="col-md-4 mb-3">
                                        <label for="masseM" class="form-label">Masse M</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="massM" name="massM"
                                                placeholder="Entrez la masse"
                                                value="<?php echo isset($tracabilitySheet->massM) && !empty($tracabilitySheet->massM) ? htmlspecialchars($tracabilitySheet->massM, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceMassM">Max 7650</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Aspect Dimension After Coating -->
                                <div class="mb-3">
                                    <label class="form-label d-block">Aspect</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="aspectDimAfterCoating"
                                            value="1"
                                            <?php if ($tracabilitySheet->aspectDimAfterCoating === true)
                                                                                                                                echo 'checked'; ?>>

                                        <label class="form-check-label" for="aspectOk">OK</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="aspectDimAfterCoating"
                                            value="0"
                                            <?php if ($tracabilitySheet->aspectDimAfterCoating === false)
                                                                                                                                echo 'checked'; ?>>
                                        <label class="form-check-label" for="aspectNok">NOK</label>
                                    </div>
                                </div>

                                <!-- Button - Modal - Help Dimension After Coating -->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#tuto2">
                                        <i class="bi bi-question-circle"></i>
                                    </button>
                                </div>

                                <!-- Content - Modal - Help Dimension After Coating -->
                                <div class="modal fade" id="tuto2" tabindex="-1" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabe2">Schéma du corps</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Fermer"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://via.placeholder.com/900x900"
                                                    alt="Description de l'image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Tensile Test before Shrink Fit -->
                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Essais traction avant frettage
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="row mb-3">

                                    <!--  Label - Profile Mass Before Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-end">
                                            <label for="masseM" class="form-label">Masse du profilé (48±0,5 cm)</label>
                                        </div>
                                    </div>

                                    <!--  Input - Profile Mass Before Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="profileMassBeforeShrinkFit"
                                                name="profileMassBeforeShrinkFit"
                                                placeholder="Entrez la masse du profilé"
                                                oninput="calculateMasseLineiqueAvant()"
                                                value="<?= htmlspecialchars($tracabilitySheet->profileMassBeforeShrinkFit) ?>">

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">g</span>
                                        </div>
                                    </div>

                                    <!--  Label - Linear Mass Before Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-end">
                                            <label for="masseLineiqueProfil" class="form-label">Masse linéique du
                                                profilé</label>
                                        </div>
                                    </div>

                                    <!--  Input readonly - Linear Mass Before Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="linearMassBeforeShrinkFit"
                                                name="linearMassBeforeShrinkFit" placeholder="Calculée automatiquement"
                                                readonly
                                                value="<?php echo isset($tracabilitySheet->linearMassBeforeShrinkFit) && !empty($tracabilitySheet->linearMassBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->linearMassBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceLinearMassBeforeShrinkFit">2,107-2,407</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">g/m</span>
                                        </div>
                                    </div>
                                </div>

                                <!--  Tensile Test Sample 1 Before Shrink Fit -->

                                <label for="meche1" class="form-label">Mèche 1</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 1 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness1BeforeShrinkFit"
                                                name="thickness1BeforeShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness1BeforeShrinkFit) && !empty($tracabilitySheet->thickness1BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness1BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness1BeforeShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 1 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force1BeforeShrinkFit"
                                                name="force1BeforeShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force1BeforeShrinkFit) && !empty($tracabilitySheet->force1BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->force1BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce1BeforeShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 1 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber1BeforeShrinkFit"
                                            name="aspectFiber1BeforeShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber1BeforeShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber1BeforeShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber1BeforeShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 2 Before Shrink Fit -->

                                <label for="meche2" class="form-label">Mèche 2</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 2 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness2BeforeShrinkFit"
                                                name="thickness2BeforeShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness2BeforeShrinkFit) && !empty($tracabilitySheet->thickness2BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness2BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness2BeforeShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 2 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force2BeforeShrinkFit"
                                                name="force2BeforeShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force2BeforeShrinkFit) && !empty($tracabilitySheet->force2BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->force2BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce2BeforeShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 2 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber2BeforeShrinkFit"
                                            name="aspectFiber2BeforeShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber2BeforeShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber2BeforeShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber2BeforeShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 3 Before Shrink Fit -->

                                <label for="meche3" class="form-label">Mèche 3</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 3 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness3BeforeShrinkFit"
                                                name="thickness3BeforeShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness3BeforeShrinkFit) && !empty($tracabilitySheet->thickness3BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness3BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">



                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness3BeforeShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 3 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force3BeforeShrinkFit"
                                                name="force3BeforeShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force3BeforeShrinkFit) && !empty($tracabilitySheet->force3BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->force3BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce3BeforeShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 3 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber3BeforeShrinkFit"
                                            name="aspectFiber3BeforeShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber3BeforeShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber3BeforeShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber3BeforeShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 4 Before Shrink Fit -->

                                <label for="meche4" class="form-label">Mèche 4</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 4 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness4BeforeShrinkFit"
                                                name="thickness4BeforeShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness4BeforeShrinkFit) && !empty($tracabilitySheet->thickness4BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness4BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness4BeforeShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 4 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force4BeforeShrinkFit"
                                                name="force4BeforeShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force4BeforeShrinkFit) && !empty($tracabilitySheet->force4BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->force4BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce4BeforeShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 4 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber4BeforeShrinkFit"
                                            name="aspectFiber4BeforeShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber4BeforeShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber4BeforeShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber4BeforeShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 5 Before Shrink Fit -->

                                <label for="meche5" class="form-label">Mèche 5</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 5 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness5BeforeShrinkFit"
                                                name="thickness5BeforeShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness5BeforeShrinkFit) && !empty($tracabilitySheet->thickness5BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness5BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness5BeforeShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 5 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force5BeforeShrinkFit"
                                                name="force5BeforeShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force5BeforeShrinkFit) && !empty($tracabilitySheet->force5BeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->force5BeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce5BeforeShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 5 Before Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber5BeforeShrinkFit"
                                            name="aspectFiber5BeforeShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber5BeforeShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber5BeforeShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber5BeforeShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Mean - Tensile Test Before Shrink Fit -->

                                <div class="row mb-3">

                                    <!--  label - Mean Force Tensile test Before Shrink Fit -->
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="mean" class="form-label">Moyenne</label>
                                    </div>

                                    <!--  Value - Mean Force Tensile test Before Shrink Fit -->
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="averageBeforeShrinkFit"
                                                name="averageBeforeShrinkFit" placeholder="Calculée automatiquement"
                                                readonly
                                                value="<?php echo isset($tracabilitySheet->averageBeforeShrinkFit) && !empty($tracabilitySheet->averageBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->averageBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceAverageBeforeShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>
                                </div>


                                <!--  Standart deviation - Tensile Test Before Shrink Fit -->

                                <div class="row mb-3">

                                    <!--  label - Standart deviation Force Tensile test Before Shrink Fit -->
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="standartDeviation" class="form-label">Écart type</label>
                                    </div>

                                    <!--  Value - Standart deviation Force Tensile test Before Shrink Fit -->
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="sigmaBeforeShrinkFit"
                                                name="sigmaBeforeShrinkFit" placeholder="Calculée automatiquement"
                                                readonly
                                                value="<?php echo isset($tracabilitySheet->sigmaBeforeShrinkFit) && !empty($tracabilitySheet->sigmaBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->sigmaBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4: Tensile Test before Shrink Fit -->
                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Essais traction avant frettage
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row mb-3">

                                    <!--  Label - Profile Mass After Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-end">
                                            <label for="masseM" class="form-label">Masse du profilé (48±0,5 cm)</label>
                                        </div>
                                    </div>

                                    <!--  Input - Profile Mass After Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="profileMassAfterShrinkFit"
                                                name="profileMassAfterShrinkFit"
                                                placeholder="Entrez la masse du profilé"
                                                oninput="calculateMasseLineiqueAvant()"
                                                value="<?php echo isset($tracabilitySheet->profileMassAfterShrinkFit) && !empty($tracabilitySheet->profileMassAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->profileMassAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">g</span>
                                        </div>
                                    </div>

                                    <!--  Label - Linear Mass After Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="d-flex justify-content-end">
                                            <label for="masseLineiqueProfil" class="form-label">Masse linéique du
                                                profilé</label>
                                        </div>
                                    </div>

                                    <!--  Input readonly - Linear Mass After Shrink Fit-->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="linearMassAfterShrinkFit"
                                                name="linearMassAfterShrinkFit" placeholder="Calculée automatiquement"
                                                readonly
                                                value="<?php echo isset($tracabilitySheet->linearMassAfterShrinkFit) && !empty($tracabilitySheet->linearMassAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->linearMassAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceLinearMassAfterShrinkFit">2,107-2,407</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">g/m</span>
                                        </div>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 1 After Shrink Fit -->

                                <label for="meche1" class="form-label">Mèche 1</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 1 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness1AfterShrinkFit"
                                                name="thickness1AfterShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness1AfterShrinkFit) && !empty($tracabilitySheet->thickness1AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness1AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness1AfterShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 1 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force1AfterShrinkFit"
                                                name="force1AfterShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force1AfterShrinkFit) && !empty($tracabilitySheet->force1AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->force1AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce1AfterShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 1 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber1AfterShrinkFit"
                                            name="aspectFiber1AfterShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber1AfterShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber1AfterShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber1AfterShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 2 After Shrink Fit -->
                                <label for="meche2" class="form-label">Mèche 2</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 2 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness2AfterShrinkFit"
                                                name="thickness2AfterShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness2AfterShrinkFit) && !empty($tracabilitySheet->thickness2AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness2AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness2AfterShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 2 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force2AfterShrinkFit"
                                                name="force2AfterShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force2AfterShrinkFit) && !empty($tracabilitySheet->force2AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->force2AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce2AfterShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 2 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber2AfterShrinkFit"
                                            name="aspectFiber2AfterShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber2AfterShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber2AfterShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber2AfterShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 3 After Shrink Fit -->

                                <label for="meche3" class="form-label">Mèche 3</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 3 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness3AfterShrinkFit"
                                                name="thickness3AfterShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness3AfterShrinkFit) && !empty($tracabilitySheet->thickness3AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness3AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness3AfterShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 3 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force3AfterShrinkFit"
                                                name="force3AfterShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force3AfterShrinkFit) && !empty($tracabilitySheet->force3AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->force3AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce3AfterShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 3 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber3AfterShrinkFit"
                                            name="aspectFiber3AfterShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber3AfterShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber3AfterShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber3AfterShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 4 After Shrink Fit -->

                                <label for="meche4" class="form-label">Mèche 4</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 4 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness4AfterShrinkFit"
                                                name="thickness4AfterShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness4AfterShrinkFit) && !empty($tracabilitySheet->thickness4AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness4AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness4AfterShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 4 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force4AfterShrinkFit"
                                                name="force4AfterShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force4AfterShrinkFit) && !empty($tracabilitySheet->force4AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->force4AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce4AfterShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 4 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber4AfterShrinkFit"
                                            name="aspectFiber4AfterShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber4AfterShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber4AfterShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber4AfterShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Tensile Test Sample 5 After Shrink Fit -->

                                <label for="meche5" class="form-label">Mèche 5</label>
                                <div class="row mb-3">

                                    <!--  Thickness Sample 5 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="thickness5AfterShrinkFit"
                                                name="thickness5AfterShrinkFit" placeholder="Entrez l'épaisseur"
                                                value="<?php echo isset($tracabilitySheet->thickness5AfterShrinkFit) && !empty($tracabilitySheet->thickness5AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->thickness5AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text"
                                                id="toleranceThickness5AfterShrinkFit">0,23-0,30</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Force Sample 5 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="force5AfterShrinkFit"
                                                name="force5AfterShrinkFit" placeholder="Entrez la force"
                                                oninput="calculateMoyenneEcartTypeAvant()"
                                                value="<?php echo isset($tracabilitySheet->force5AfterShrinkFit) && !empty($tracabilitySheet->force5AfterShrinkFit) ? htmlspecialchars($tracabilitySheet->force5AfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceForce5AfterShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>

                                    <!--  Aspect Sample 5 After Shrink Fit -->
                                    <div class="col-md-4">
                                        <select class="form-select" id="aspectFiber5AfterShrinkFit"
                                            name="aspectFiber5AfterShrinkFit">
                                            <option selected disabled>Selectionnez le cas de rupture</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber5AfterShrinkFit == 1)
                                                        echo 'selected'; ?>>Cas 1 - Trop sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber5AfterShrinkFit == 2)
                                                        echo 'selected'; ?>>Cas 2 - Pas assez sérré</option>
                                            <option <?php if ($tracabilitySheet->aspectFiber5AfterShrinkFit == 3)
                                                        echo 'selected'; ?>>Cas 3 - Rupture parfaite</option>
                                        </select>
                                    </div>
                                </div>


                                <!--  Mean - Tensile Test After Shrink Fit -->

                                <div class="row mb-3">

                                    <!--  label - Mean Force Tensile test After Shrink Fit -->
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="mean" class="form-label">Moyenne</label>
                                    </div>

                                    <!--  Value - Mean Force Tensile test After Shrink Fit -->
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="averageAfterShrinkFit"
                                                name="averageAfterShrinkFit" placeholder="Calculée automatiquement"
                                                readonly
                                                value="<?php echo isset($tracabilitySheet->averageAfterShrinkFit) && !empty($tracabilitySheet->averageAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->averageAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceAverageAfterShrinkFit">Min
                                                1820</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>
                                </div>


                                <!--  Standart deviation - Tensile Test After Shrink Fit -->

                                <div class="row mb-3">

                                    <!--  label - Standart deviation Force Tensile test After Shrink Fit -->
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="standartDeviation" class="form-label">Écart type</label>
                                    </div>

                                    <!--  Value - Standart deviation Force Tensile test After Shrink Fit -->
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="sigmaAfterShrinkFit"
                                                name="sigmaAfterShrinkFit" placeholder="Calculée automatiquement"
                                                readonly
                                                value="<?php echo isset($tracabilitySheet->sigmaAfterShrinkFit) && !empty($tracabilitySheet->sigmaAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->sigmaAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">N</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Section 5: Dimensions After Shrink Fit -->

                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Dimensions après frettage
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">


                                <div class="row mb-3">

                                    <!--  Diameter DF1 -->
                                    <div class="col-md-4">
                                        <label for="df1" class="form-label">DF1</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="df1" name="df1"
                                                value="<?php echo isset($tracabilitySheet->df1) && !empty($tracabilitySheet->df1) ? htmlspecialchars($tracabilitySheet->df1, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceDf1">174 +0/+2</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Diameter DF2 -->
                                    <div class="col-md-4">
                                        <label for="df2" class="form-label">DF2</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="df2" name="df2"
                                                value="<?php echo isset($tracabilitySheet->df2) && !empty($tracabilitySheet->df2) ? htmlspecialchars($tracabilitySheet->df2, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceDf2">174 +0/+2</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>

                                    <!--  Diameter DF3 -->
                                    <div class="col-md-4">
                                        <label for="df3" class="form-label">DF3</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="df3" name="df3"
                                                value="<?php echo isset($tracabilitySheet->df3) && !empty($tracabilitySheet->df3) ? htmlspecialchars($tracabilitySheet->df3, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceDf3">174 +0/+2</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">mm</span>
                                        </div>
                                    </div>
                                </div>



                                <div class="row mb-3">

                                    <!--  Total Mass MT -->
                                    <div class="col-md-6">
                                        <label for="mt" class="form-label">MT</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="mt" name="mt"
                                                value="<?php echo isset($tracabilitySheet->mt) && !empty($tracabilitySheet->mt) ? htmlspecialchars($tracabilitySheet->mt, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceMt">Max 8700</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">g</span>
                                        </div>
                                    </div>

                                    <!--  Shrink Fit Mass MF-->
                                    <div class="col-md-6">
                                        <label for="mf" class="form-label">MF</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="mf" name="mf" readonly
                                                value="<?php echo isset($tracabilitySheet->mf) && !empty($tracabilitySheet->mf) ? htmlspecialchars($tracabilitySheet->mf, ENT_QUOTES, 'UTF-8') : ""; ?>">


                                            <!-- Tolerance with dynamic color -->
                                            <span class="input-group-text" id="toleranceMf">Max 1050</span>

                                            <!-- Unit of measurement -->
                                            <span class="input-group-text">g</span>
                                        </div>
                                    </div>
                                </div>




                                <div class="row mb-3">

                                    <!--  Shrink Fit OK Oil Side BF-->
                                    <div class="col-md-6">
                                        <label class="form-label d-block">BF</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bf" value="1"
                                                <?php if ($tracabilitySheet->bf === true)
                                                                                                                    echo 'checked'; ?>>
                                            <label class="form-check-label" for="aspectOk">OK</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bf" value="0"
                                                <?php if ($tracabilitySheet->bf === false)
                                                                                                                    echo 'checked'; ?>>
                                            <label class="form-check-label" for="aspectNok">NOK</label>
                                        </div>
                                    </div>

                                    <!--  Shrink Fit OK Gaz Side VF-->
                                    <div class="col-md-6">
                                        <label class="form-label d-block">VF</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="vf" value="1"
                                                <?php if ($tracabilitySheet->vf === true)
                                                                                                                    echo 'checked'; ?>>
                                            <label class="form-check-label" for="aspectOk">OK</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="vf" value="0"
                                                <?php if ($tracabilitySheet->vf === false)
                                                                                                                    echo 'checked'; ?>>
                                            <label class="form-check-label" for="aspectNok">NOK</label>
                                        </div>
                                    </div>
                                </div>


                                <!-- Button - Modal - Help Spool Data -->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#tuto3">
                                        <i class="bi bi-question-circle"></i>
                                    </button>
                                </div>

                                <!-- Content - Modal - Help Spool Data -->
                                <div class="modal fade" id="tuto3" tabindex="-1" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabe3">Schéma du corps 2</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Fermer"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://via.placeholder.com/1000x900"
                                                    alt="Description de l'image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Section 6: Validation Operator -->
                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Validation par l'opérateur
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">


                                <!-- Date Operator Conformity Declaration -->
                                <div class="mb-3">
                                    <label for="dateOperatorValidation" class="form-label">Date validation par
                                        l'opérateur</label>
                                    <input type="datetime-local" class="form-control"
                                        id="dateOperatorConformityDeclaration" name="dateOperatorConformityDeclaration"
                                        value="<?php echo isset($tracabilitySheet->dateOperatorConformityDeclaration) && !empty($tracabilitySheet->dateOperatorConformityDeclaration) ? htmlspecialchars($tracabilitySheet->dateOperatorConformityDeclaration, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                </div>


                                <div class="row mb-3">

                                    <!-- Operator Name Conformity Declaration -->
                                    <div class="col-md-4">
                                        <label for="operatorValidation" class="form-label">Opérateur</label>
                                        <input type="text" class="form-control" id="operatorNameConformityDeclaration"
                                            name="operatorNameConformityDeclaration"
                                            value="<?php echo isset($tracabilitySheet->operatorNameConformityDeclaration) && !empty($tracabilitySheet->operatorNameConformityDeclaration) ? htmlspecialchars($tracabilitySheet->operatorNameConformityDeclaration, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                    </div>

                                    <!-- Operator Conformity Declaration -->
                                    <div class="col-md-4">
                                        <label for="conformiteValidation" class="form-label">Conformité</label>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="operatorConformityDeclaration" value="1"
                                                    <?php if ($tracabilitySheet->operatorConformityDeclaration === true)
                                                                                                                                                echo 'checked'; ?>>
                                                <label class="form-check-label" for="aspectOk">Oui</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="operatorConformityDeclaration" value="0"
                                                    <?php if ($tracabilitySheet->operatorConformityDeclaration === false)
                                                                                                                                                echo 'checked'; ?>>
                                                <label class="form-check-label" for="aspectNok">Non</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- First Accumulator Lot -->
                                    <div class="col-md-4">
                                        <label for="firstAccumulator" class="form-label">Premier du Lot</label>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="firstAccumulatorLot"
                                                    value="1"
                                                    <?php if ($tracabilitySheet->firstAccumulatorLot === true)
                                                                                                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="aspectOk">Oui</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="firstAccumulatorLot"
                                                    value="0"
                                                    <?php if ($tracabilitySheet->firstAccumulatorLot === false)
                                                                                                                                        echo 'checked'; ?>>
                                                <label class="form-check-label" for="aspectNok">Non</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Operator Remarks -->
                                <div class="mb-3">
                                    <label for="remarqueValidation" class="form-label">Remarque</label>
                                    <textarea class="form-control" id="operatorRemarks" name="operatorRemarks" rows="4"
                                        placeholder="Entrez votre commentaire..." maxlength="255"><?php echo isset($tracabilitySheet->operatorRemarks) && !empty($tracabilitySheet->operatorRemarks) ? htmlspecialchars($tracabilitySheet->operatorRemarks, ENT_QUOTES, 'UTF-8') : ""; ?>
                                </textarea>
                                    <div id="charCount" class="form-text">0/255 caractères</div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 7: Quality Control -->
                    <div class="accordion-item form-section">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Validation par le contrôle
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">


                                <!-- Date Quality Control Conformity Declaration -->
                                <div class="mb-3">
                                    <label for="dateValidation" class="form-label">Date de validation par le
                                        contrôle</label>
                                    <input type="datetime-local" class="form-control" id="qualityControlDate"
                                        name="qualityControlDate"
                                        value="<?php echo isset($tracabilitySheet->qualityControlDate) && !empty($tracabilitySheet->qualityControlDate) ? htmlspecialchars($tracabilitySheet->qualityControlDate, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                </div>

                                <div class="row mb-3">

                                    <!-- Quality Inspector Name -->
                                    <div class="col-md-6">
                                        <label for="operateurValidation" class="form-label">Contrôleur</label>
                                        <input type="text" class="form-control" id="qualityInspectorName"
                                            name="qualityInspectorName"
                                            value="<?php echo isset($tracabilitySheet->qualityInspectorName) && !empty($tracabilitySheet->qualityInspectorName) ? htmlspecialchars($tracabilitySheet->qualityInspectorName, ENT_QUOTES, 'UTF-8') : ""; ?>">

                                    </div>

                                    <!-- Quality Control Conformity Declaration -->

                                    <!-- Quality Control Conformity Declaration - Label-->
                                    <div class="col-md-6">
                                        <label for="conformiteValidation" class="form-label">Conformité</label>

                                        <!-- Quality Control Conformity Declaration - CheckBox-->
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="qualityConformityDeclaration" value="1"
                                                    <?php if ($tracabilitySheet->qualityConformityDeclaration === true)
                                                                                                                                                echo 'checked'; ?>>
                                                <label class="form-check-label" for="aspectOk">Oui</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="qualityConformityDeclaration" value="0"
                                                    <?php if ($tracabilitySheet->qualityConformityDeclaration === false)
                                                                                                                                                echo 'checked'; ?>>
                                                <label class="form-check-label" for="aspectNok">Non</label>
                                            </div>
                                            <label>
                                        </div>
                                    </div>
                                </div>


                                <!-- Quality Inspector Remarks -->
                                <div class="mb-3">
                                    <label for="remarqueValidation" class="form-label">Remarque</label>
                                    <textarea class="form-control" id="qualityInspectorRemarks"
                                        name="qualityInspectorRemarks" rows="4"
                                        placeholder="Entrez votre commentaire..."
                                        maxlength="255"><?php echo isset($tracabilitySheet->qualityInspectorRemarks) && !empty($tracabilitySheet->qualityInspectorRemarks) ? htmlspecialchars($tracabilitySheet->qualityInspectorRemarks, ENT_QUOTES, 'UTF-8') : ""; ?></textarea>
                                    <div id="charCount2" class="form-text">0/255 caractères</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2 - WINDIND CHARTS -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <!-- Chart GENERAL-->
                <button onclick="resetZoomChartGeneral()" class="btn btn-danger">Réinitialiser le Zoom</button>
                <div class="mb-3">
                    <div class="chart-container">
                        <canvas id="myChartGeneral"></canvas>
                    </div>
                </div>
            </div>

            <!-- TAB 3 - TENSILE TEST CHARTS-->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p>Contenu de l'onglet 3.</p>
            </div>
        </div>
    </form>
</div>
<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
var url = "<?php echo URL; ?>";
var serialNumberSheet = "<?php echo $tracabilitySheet->serialNumber; ?>";
</script>
<!-- Chart.js -->
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Moment.js -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
<!-- Adapter pour Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@1.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="<?php echo URL; ?>js/tolerances.js"></script>
<script src="<?php echo URL; ?>js/windingCharts.js"></script>