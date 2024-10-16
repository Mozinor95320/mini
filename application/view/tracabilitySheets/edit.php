<div class="container mt-4">
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3 fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>

        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">Tracabilité</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#scrollspyHeading1">Informations générales</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading2">Données Fibre</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading3">Dimensions après enduction</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading4">Essais de traction avant frettage</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading5">Essais de traction après frettage</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading6">Dimension après frettage</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading7">Déclaration de conformité opérateur</a></li>
                    <li><a class="dropdown-item" href="#scrollspyHeading8">Déclaration de conformité controlleur</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#scrollspyHeading9">Graphique frettage</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#scrollspyHeading10">Graphiques essais de traction</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading0">Fiche traca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading9">Frettage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading10">Essais de traction</a>
            </li>

        </ul>

        <!-- Boutons dans la navbar -->
        <div class="d-flex ms-auto">
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary me-3" name="submit_update_tracabilitySheet" value="Update">
                <i class="bi bi-floppy2-fill"></i>
            </button>

            <!-- Exporter en PDF avec logo -->
            <button class="btn btn-secondary me-3">
                <i class="bi bi-file-earmark-arrow-down"></i>
            </button>

            <!-- Toggle Button -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Activer/Désactiver</label>
            </div>
        </div>
    </nav>

    <form action="<?php echo URL; ?>tracabilitySheets/updatetracabilitySheet" method="POST">

        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">




            <!-- SECTION 1 - Generic DATA -->
            <h3 id="scrollspyHeading0" class="mb-3">Fiche traca:</h3>
            <h4 id="scrollspyHeading1" class="mb-3">Informations générales</h4>
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
                    <input type="datetime-local" class="form-control" id="sheetCreationDate" name="sheetCreationDate"
                        value="<?php echo htmlspecialchars($tracabilitySheet->sheetCreationDate, ENT_QUOTES, 'UTF-8'); ?>"
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







            <!-- SECTION 2 - FIBER DATA -->
            <h4 id="scrollspyHeading2">Données Fibre</h4>
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
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto1">
                    <i class="bi bi-question-circle"></i>
                </button>
            </div>
            <!-- Content - Modal - Help Spool Data -->
            <div class="modal fade" id="tuto1" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Comment saisir des données de
                                la bobine</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://via.placeholder.com/600x300" alt="Description de l'image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>







            <!-- SECTION 3 - DIMENSIONS AFTER COATING -->
            <h4 id="scrollspyHeading3">Dimensions après enduction</h4>
            <!-- Date Dimension After Coating -->
            <div class="mb-3">
                <label for="dateEnduction" class="form-label">Date</label>
                <input type="datetime-local" class="form-control" id="dateDimAfterCoating" name="dateDimAfterCoating"
                    value="<?php echo isset($tracabilitySheet->dateDimAfterCoating) && !empty($tracabilitySheet->dateDimAfterCoating) ? htmlspecialchars($tracabilitySheet->dateDimAfterCoating, ENT_QUOTES, 'UTF-8') : ""; ?>">
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
                        <input type="number" class="form-control" id="massM" name="massM" placeholder="Entrez la masse"
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
                    <input class="form-check-input" type="radio" name="aspectDimAfterCoating" value="1"
                        <?php if ((bool)$tracabilitySheet->aspectDimAfterCoating === true) echo 'checked'; ?>>

                    <label class="form-check-label" for="aspectOk">OK</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="aspectDimAfterCoating" value="0"
                        <?php if ((bool)$tracabilitySheet->aspectDimAfterCoating === false) echo 'checked'; ?>>
                    <label class="form-check-label" for="aspectNok">NOK</label>
                </div>
            </div>

            <!-- Button - Modal - Help Dimension After Coating -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto2">
                    <i class="bi bi-question-circle"></i>
                </button>
            </div>

            <!-- Content - Modal - Help Dimension After Coating -->
            <div class="modal fade" id="tuto2" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabe2">Schéma du corps</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://via.placeholder.com/900x900" alt="Description de l'image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>







            <!-- SECTION 4 - TENSILE TEST BEFIRE SHRINK FIT -->
            <h4 id="scrollspyHeading4">Essais de traction avant frettage</h4>
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
                            name="profileMassBeforeShrinkFit" placeholder="Entrez la masse du profilé"
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
                            name="linearMassBeforeShrinkFit" placeholder="Calculée automatiquement" readonly
                            value="<?php echo isset($tracabilitySheet->linearMassBeforeShrinkFit) && !empty($tracabilitySheet->linearMassBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->linearMassBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceLinearMassBeforeShrinkFit">2,107-2,407</span>

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
                        <span class="input-group-text" id="toleranceThickness1BeforeShrinkFit">0,23-0,30</span>

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
                    <select class="form-select" id="aspectFiber1BeforeShrinkFit" name="aspectFiber1BeforeShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness2BeforeShrinkFit">0,23-0,30</span>

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
                    <select class="form-select" id="aspectFiber2BeforeShrinkFit" name="aspectFiber2BeforeShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness3BeforeShrinkFit">0,23-0,30</span>

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
                    <select class="form-select" id="aspectFiber3BeforeShrinkFit" name="aspectFiber3BeforeShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness4BeforeShrinkFit">0,23-0,30</span>

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
                    <select class="form-select" id="aspectFiber4BeforeShrinkFit" name="aspectFiber4BeforeShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness5BeforeShrinkFit">0,23-0,30</span>

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
                    <select class="form-select" id="aspectFiber5BeforeShrinkFit" name="aspectFiber5BeforeShrinkFit">
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
                            name="averageBeforeShrinkFit" placeholder="Calculée automatiquement" readonly
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
                        <input type="number" class="form-control" id="sigmaBeforeShrinkFit" name="sigmaBeforeShrinkFit"
                            placeholder="Calculée automatiquement" readonly
                            value="<?php echo isset($tracabilitySheet->sigmaBeforeShrinkFit) && !empty($tracabilitySheet->sigmaBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->sigmaBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Unit of measurement -->
                        <span class="input-group-text">N</span>
                    </div>
                </div>
            </div>







            <!-- SECTION 5 - TENSILE TEST AFTER SHRINK FIT -->
            <h4 id="scrollspyHeading5">Essais de traction après frettage</h4>
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
                            name="profileMassAfterShrinkFit" placeholder="Entrez la masse du profilé"
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
                            name="linearMassAfterShrinkFit" placeholder="Calculée automatiquement" readonly
                            value="<?php echo isset($tracabilitySheet->linearMassAfterShrinkFit) && !empty($tracabilitySheet->linearMassAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->linearMassAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceLinearMassAfterShrinkFit">2,107-2,407</span>

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
                        <span class="input-group-text" id="toleranceThickness1AfterShrinkFit">0,23-0,30</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                    </div>
                </div>

                <!--  Force Sample 1 After Shrink Fit -->
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="force1AfterShrinkFit" name="force1AfterShrinkFit"
                            placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()"
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
                    <select class="form-select" id="aspectFiber1AfterShrinkFit" name="aspectFiber1AfterShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness2AfterShrinkFit">0,23-0,30</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                    </div>
                </div>

                <!--  Force Sample 2 After Shrink Fit -->
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="force2AfterShrinkFit" name="force2AfterShrinkFit"
                            placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()"
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
                    <select class="form-select" id="aspectFiber2AfterShrinkFit" name="aspectFiber2AfterShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness3AfterShrinkFit">0,23-0,30</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                    </div>
                </div>

                <!--  Force Sample 3 After Shrink Fit -->
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="force3AfterShrinkFit" name="force3AfterShrinkFit"
                            placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()"
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
                    <select class="form-select" id="aspectFiber3AfterShrinkFit" name="aspectFiber3AfterShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness4AfterShrinkFit">0,23-0,30</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                    </div>
                </div>

                <!--  Force Sample 4 After Shrink Fit -->
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="force4AfterShrinkFit" name="force4AfterShrinkFit"
                            placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()"
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
                    <select class="form-select" id="aspectFiber4AfterShrinkFit" name="aspectFiber4AfterShrinkFit">
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
                        <span class="input-group-text" id="toleranceThickness5AfterShrinkFit">0,23-0,30</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">mm</span>
                    </div>
                </div>

                <!--  Force Sample 5 After Shrink Fit -->
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="number" class="form-control" id="force5AfterShrinkFit" name="force5AfterShrinkFit"
                            placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()"
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
                    <select class="form-select" id="aspectFiber5AfterShrinkFit" name="aspectFiber5AfterShrinkFit">
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
                            name="averageAfterShrinkFit" placeholder="Calculée automatiquement" readonly
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
                        <input type="number" class="form-control" id="sigmaAfterShrinkFit" name="sigmaAfterShrinkFit"
                            placeholder="Calculée automatiquement" readonly
                            value="<?php echo isset($tracabilitySheet->sigmaAfterShrinkFit) && !empty($tracabilitySheet->sigmaAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->sigmaAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Unit of measurement -->
                        <span class="input-group-text">N</span>
                    </div>
                </div>
            </div>





            <!-- SECTION 6 - DIMENSION AFTER SHRINK FIT -->
            <h4 id="scrollspyHeading6">Dimension après frettage</h4>
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
                            <?php if ((bool)$tracabilitySheet->bf === true) echo 'checked'; ?>>
                        <label class="form-check-label" for="aspectOk">OK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bf" value="0"
                            <?php if ((bool)$tracabilitySheet->bf === false) echo 'checked'; ?>>
                        <label class="form-check-label" for="aspectNok">NOK</label>
                    </div>
                </div>

                <!--  Shrink Fit OK Gaz Side VF-->
                <div class="col-md-6">
                    <label class="form-label d-block">VF</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="vf" value="1"
                            <?php if ((bool)$tracabilitySheet->vf === true) echo 'checked'; ?>>
                        <label class="form-check-label" for="aspectOk">OK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="vf" value="0"
                            <?php if ((bool)$tracabilitySheet->vf === false) echo 'checked'; ?>>
                        <label class="form-check-label" for="aspectNok">NOK</label>
                    </div>
                </div>
            </div>


            <!-- Button - Modal - Help Spool Data -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto3">
                    <i class="bi bi-question-circle"></i>
                </button>
            </div>

            <!-- Content - Modal - Help Spool Data -->
            <div class="modal fade" id="tuto3" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabe3">Schéma du corps 2</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://via.placeholder.com/1000x900" alt="Description de l'image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>




            <!-- SECTION 7 - OPERATOR VALIDATION -->
            <h4 id="scrollspyHeading7">Déclaration de conformité opérateur</h4>

            <!-- Date Operator Conformity Declaration -->
            <div class="mb-3">
                <label for="dateOperatorValidation" class="form-label">Date validation par
                    l'opérateur</label>
                <input type="datetime-local" class="form-control" id="dateOperatorConformityDeclaration"
                    name="dateOperatorConformityDeclaration"
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
                            <input class="form-check-input" type="radio" name="operatorConformityDeclaration" value="1"
                                <?php if ((bool)$tracabilitySheet->operatorConformityDeclaration === true) echo 'checked'; ?>>
                            <label class="form-check-label" for="aspectOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="operatorConformityDeclaration" value="0"
                                <?php if ((bool)$tracabilitySheet->operatorConformityDeclaration === false) echo 'checked'; ?>>
                            <label class="form-check-label" for="aspectNok">Non</label>
                        </div>
                    </div>
                </div>

                <!-- First Accumulator Lot -->
                <div class="col-md-4">
                    <label for="firstAccumulator" class="form-label">Premier du Lot</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="firstAccumulatorLot" value="1"
                                <?php if ((bool)$tracabilitySheet->firstAccumulatorLot === true) echo 'checked'; ?>>
                            <label class="form-check-label" for="aspectOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="firstAccumulatorLot" value="0"
                                <?php if ((bool)$tracabilitySheet->firstAccumulatorLot === false) echo 'checked'; ?>>
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





            <!-- SECTION 8 - QUALITY CONTROL -->
            <h4 id="scrollspyHeading8">Déclaration de conformité controlleur</h4>

            <!-- Date Quality Control Conformity Declaration -->
            <div class="mb-3">
                <label for="dateValidation" class="form-label">Date de validation par le
                    contrôle</label>
                <input type="datetime-local" class="form-control" id="qualityControlDate" name="qualityControlDate"
                    value="<?php echo isset($tracabilitySheet->qualityControlDate) && !empty($tracabilitySheet->qualityControlDate) ? htmlspecialchars($tracabilitySheet->qualityControlDate, ENT_QUOTES, 'UTF-8') : ""; ?>">

            </div>

            <div class="row mb-3">

                <!-- Quality Inspector Name -->
                <div class="col-md-6">
                    <label for="operateurValidation" class="form-label">Contrôleur</label>
                    <input type="text" class="form-control" id="qualityInspectorName" name="qualityInspectorName"
                        value="<?php echo isset($tracabilitySheet->qualityInspectorName) && !empty($tracabilitySheet->qualityInspectorName) ? htmlspecialchars($tracabilitySheet->qualityInspectorName, ENT_QUOTES, 'UTF-8') : ""; ?>">

                </div>

                <!-- Quality Control Conformity Declaration -->

                <!-- Quality Control Conformity Declaration - Label-->
                <div class="col-md-6">
                    <label for="conformiteValidation" class="form-label">Conformité</label>

                    <!-- Quality Control Conformity Declaration - CheckBox-->
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="qualityConformityDeclaration" value="1"
                                <?php if ((bool)$tracabilitySheet->qualityConformityDeclaration === true) echo 'checked'; ?>>
                            <label class="form-check-label" for="aspectOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="qualityConformityDeclaration" value="0"
                                <?php if ((bool)$tracabilitySheet->qualityConformityDeclaration === false) echo 'checked'; ?>>
                            <label class="form-check-label" for="aspectNok">Non</label>
                        </div>
                        <label>
                    </div>
                </div>
            </div>


            <!-- Quality Inspector Remarks -->
            <div class="mb-3">
                <label for="remarqueValidation" class="form-label">Remarque</label>
                <textarea class="form-control" id="qualityInspectorRemarks" name="qualityInspectorRemarks" rows="4"
                    placeholder="Entrez votre commentaire..."
                    maxlength="255"><?php echo isset($tracabilitySheet->qualityInspectorRemarks) && !empty($tracabilitySheet->qualityInspectorRemarks) ? htmlspecialchars($tracabilitySheet->qualityInspectorRemarks, ENT_QUOTES, 'UTF-8') : ""; ?></textarea>
                <div id="charCount2" class="form-text">0/255 caractères</div>
            </div>




            <!-- SECTION 9 - WINDIND CHARTS -->
            <h3 id="scrollspyHeading9">Graphique frettage</h3>
            <!-- Chart GENERAL-->
            <button onclick="resetZoomChartGeneral()" class="btn btn-danger">Réinitialiser le Zoom</button>
            <div class="mb-3">
                <div class="chart-container">
                    <canvas id="myChartGeneral"></canvas>
                </div>
            </div>




            <!-- SECTION 10 - TENSILE TEST CHARTS-->
            <h3 id="scrollspyHeading10">Graphiques essais de traction</h3>
            <p>Future graphique de frettage</p>

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