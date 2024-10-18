<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL . 'tracabilitySheets'; ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL . 'tracabilitySheets'; ?>">Bliblothèque de fiches</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Fiche
                n°<?php echo htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?></li>
        </ol>
    </nav>
    <form action="<?php echo URL; ?>tracabilitySheets/updatetracabilitySheet" method="POST">
        <!-- SECTION 1 - Generic DATA -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading1" class="mb-3">Informations générales</h4>
            <div class="row align-items-center mb-3">

                <!-- Work Order Field -->
                <div class="col-md-6">
                    <label for="workOrder" class="form-label">N°OF</label>
                    <input type="text" class="form-control" id="workOrder" name="workOrder"
                        value="<?php echo htmlspecialchars($tracabilitySheet->workOrder, ENT_QUOTES, 'UTF-8'); ?>"
                        disabled>

                </div>

                <!-- Serial Number Field -->
                <div class="col-md-6">
                    <label for="serialNumber" class="form-label">SN</label>
                    <input type="text" class="form-control" id="serialNumber" name="serialNumber"
                        value="<?php echo htmlspecialchars($tracabilitySheet->serialNumber, ENT_QUOTES, 'UTF-8'); ?>"
                        disabled>
                </div>
            </div>
            <div class="row align-items-center mb-3">

                <!-- Part Number Field -->
                <div class="col-md-6">
                    <label for="partNumber" class="form-label">PN</label>
                    <input type="text" class="form-control" id="partNumber" name="partNumber"
                        value="<?php echo htmlspecialchars($tracabilitySheet->partNumber, ENT_QUOTES, 'UTF-8'); ?>"
                        disabled>

                </div>

                <!-- Sheet Creation Date -->
                <div class="col-md-6">
                    <label for="sheetCreationDate" class="form-label">Date de création de la fiche</label>
                    <input type="datetime-local" class="form-control" id="sheetCreationDate" name="sheetCreationDate"
                        value="<?php echo htmlspecialchars($tracabilitySheet->sheetCreationDate, ENT_QUOTES, 'UTF-8'); ?>"
                        disabled>
                </div>
            </div>
            <div class="row align-items-center">

                <!-- Plan Reference Field -->
                <div class="col-md-6">
                    <label for="refPlan" class="form-label">Référence plan</label>
                    <input type="text" class="form-control" id="refPlan" name="refPlan"
                        value="<?php echo htmlspecialchars($tracabilitySheet->refPlan, ENT_QUOTES, 'UTF-8'); ?>"
                        disabled>

                </div>

                <!-- Machine Reference Field -->
                <div class="col-md-6">
                    <label for="refMachine" class="form-label">Machine</label>
                    <input type="text" class="form-control" id="refMachine" name="refMachine"
                        value="<?php echo htmlspecialchars($tracabilitySheet->refMachine, ENT_QUOTES, 'UTF-8'); ?>"
                        disabled>
                </div>
            </div>
        </section>


        <!-- SECTION 2 - FIBER DATA -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading2">Données Fibre</h4>
            <!-- Material Reference Field -->
            <div class="mb-3">
                <label for="material" class="form-label">Matière</label>
                <select class="form-select" id="material" name="material">
                    <option selected disabled>Sélectionner la matière</option>
                    <?php foreach ($materials as $material) { ?>
                    <option value="<?php echo $material->partNumberParker . " - " . $material->partNumberSuplier;?>"
                        <?php if ($tracabilitySheet->material == $material->partNumberSuplier) echo ' selected';?>>
                        <?php echo $material->partNumberParker . " - " . $material->partNumberSuplier ;  ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="row mb-3">
                <!-- Sppol Batch Reference Field -->
                <div class="col-md-6">
                    <label for="spoolBatch" class="form-label">Bobine</label>
                    <input type="text" class="form-control" id="spoolBatch" name="spoolBatch"
                        value="<?php echo isset($tracabilitySheet->spoolBatch) && !empty($tracabilitySheet->spoolBatch) ? htmlspecialchars($tracabilitySheet->spoolBatch, ENT_QUOTES, 'UTF-8') : ""; ?>">
                </div>

                <!-- Spool Number Field -->
                <div class="col-md-6">
                    <label for="spoolNumber" class="form-label">Lot</label>
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
        </section>








        <!-- SECTION 3 - DIMENSIONS AFTER COATING -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading3">Dimensions après enduction</h4>
            <!-- Date Dimension After Coating -->
            <div class="mb-3">
                <label for="dateDimAfterCoating" class="form-label">Date</label>
                <input type="datetime-local" class="form-control" id="dateDimAfterCoating" name="dateDimAfterCoating"
                    value="<?php echo isset($tracabilitySheet->dateDimAfterCoating) && !empty($tracabilitySheet->dateDimAfterCoating) ? htmlspecialchars($tracabilitySheet->dateDimAfterCoating, ENT_QUOTES, 'UTF-8') : ""; ?>">
            </div>


            <div class="row align-items-center mb-3">

                <!-- Dimensions length L -->
                <div class="col-md-4">
                    <label for="lengthL" class="form-label">Longueur L</label>
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
                <div class="col-md-4">
                    <label for="diameterD" class="form-label">Diamètre D</label>
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
                <div class="col-md-4">
                    <label for="massM" class="form-label">Masse M</label>
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
                <h6 class="d-block">Aspect</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="aspectDimAfterCoatingOk"
                        name="aspectDimAfterCoatingOk" value="1"
                        <?php if ((bool)$tracabilitySheet->aspectDimAfterCoating === true) echo 'checked'; ?>>

                    <label class="form-check-label" for="aspectDimAfterCoatingOk">OK</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="aspectDimAfterCoatingNok"
                        name="aspectDimAfterCoatingNok" value="0"
                        <?php if ((bool)$tracabilitySheet->aspectDimAfterCoating === false) echo 'checked'; ?>>
                    <label class="form-check-label" for="aspectDimAfterCoatingNok">NOK</label>
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
        </section>








        <!-- SECTION 4 - TENSILE TEST BEFIRE SHRINK FIT -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading4">Essais de traction avant frettage</h4>
            <div class="row mb-3">

                <!--  Label - Profile Mass Before Shrink Fit-->
                <div class="col-md-3">
                    <div class="d-flex justify-content-end">
                        <label for="profileMassBeforeShrinkFit" class="form-label">Masse du profilé (48±0,5 cm)</label>
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
                        <label for="linearMassBeforeShrinkFit" class="form-label">Masse linéique du
                            profilé</label>
                    </div>
                </div>

                <!--  Input disabled - Linear Mass Before Shrink Fit-->
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="number" class="form-control" id="linearMassBeforeShrinkFit"
                            name="linearMassBeforeShrinkFit" placeholder="Calculée automatiquement" disabled
                            value="<?php echo isset($tracabilitySheet->linearMassBeforeShrinkFit) && !empty($tracabilitySheet->linearMassBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->linearMassBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceLinearMassBeforeShrinkFit">2,107-2,407</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">g/m</span>
                    </div>
                </div>
            </div>

            <!--  Tensile Test Sample 1 Before Shrink Fit -->

            <h6>Mèche 1</h6>
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

            <h6>Mèche 2</h6>
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

            <h6>Mèche 3</h6>
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

            <h6>Mèche 4</h6>
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

            <h6>Mèche 5</h6>
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
                    <label for="averageBeforeShrinkFit" class="form-label">Moyenne</label>
                </div>

                <!--  Value - Mean Force Tensile test Before Shrink Fit -->
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="averageBeforeShrinkFit"
                            name="averageBeforeShrinkFit" placeholder="Calculée automatiquement" disabled
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
                    <label for="sigmaBeforeShrinkFit" class="form-label">Écart type</label>
                </div>

                <!--  Value - Standart deviation Force Tensile test Before Shrink Fit -->
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="sigmaBeforeShrinkFit" name="sigmaBeforeShrinkFit"
                            placeholder="Calculée automatiquement" disabled
                            value="<?php echo isset($tracabilitySheet->sigmaBeforeShrinkFit) && !empty($tracabilitySheet->sigmaBeforeShrinkFit) ? htmlspecialchars($tracabilitySheet->sigmaBeforeShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Unit of measurement -->
                        <span class="input-group-text">N</span>
                    </div>
                </div>
            </div>
        </section>








        <!-- SECTION 5 - TENSILE TEST AFTER SHRINK FIT -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading5">Essais de traction après frettage</h4>
            <div class="row mb-3">

                <!--  Label - Profile Mass After Shrink Fit-->
                <div class="col-md-3">
                    <div class="d-flex justify-content-end">
                        <label for="profileMassAfterShrinkFit" class="form-label">Masse du profilé (48±0,5 cm)</label>
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
                        <label for="linearMassAfterShrinkFit" class="form-label">Masse linéique du
                            profilé</label>
                    </div>
                </div>

                <!--  Input disabled - Linear Mass After Shrink Fit-->
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="number" class="form-control" id="linearMassAfterShrinkFit"
                            name="linearMassAfterShrinkFit" placeholder="Calculée automatiquement" disabled
                            value="<?php echo isset($tracabilitySheet->linearMassAfterShrinkFit) && !empty($tracabilitySheet->linearMassAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->linearMassAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Tolerance with dynamic color -->
                        <span class="input-group-text" id="toleranceLinearMassAfterShrinkFit">2,107-2,407</span>

                        <!-- Unit of measurement -->
                        <span class="input-group-text">g/m</span>
                    </div>
                </div>
            </div>


            <!--  Tensile Test Sample 1 After Shrink Fit -->

            <h6>Mèche 1</h6>
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
            <h6>Mèche 2</h6>
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

            <h6>Mèche 3</h6>
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

            <h6>Mèche 4</h6>
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

            <h6>Mèche 5</h6>
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
                    <label for="averageAfterShrinkFit" class="form-label">Moyenne</label>
                </div>

                <!--  Value - Mean Force Tensile test After Shrink Fit -->
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="averageAfterShrinkFit"
                            name="averageAfterShrinkFit" placeholder="Calculée automatiquement" disabled
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
                    <label for="sigmaAfterShrinkFit" class="form-label">Écart type</label>
                </div>

                <!--  Value - Standart deviation Force Tensile test After Shrink Fit -->
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="number" class="form-control" id="sigmaAfterShrinkFit" name="sigmaAfterShrinkFit"
                            placeholder="Calculée automatiquement" disabled
                            value="<?php echo isset($tracabilitySheet->sigmaAfterShrinkFit) && !empty($tracabilitySheet->sigmaAfterShrinkFit) ? htmlspecialchars($tracabilitySheet->sigmaAfterShrinkFit, ENT_QUOTES, 'UTF-8') : ""; ?>">


                        <!-- Unit of measurement -->
                        <span class="input-group-text">N</span>
                    </div>
                </div>
            </div>
        </section>





        <!-- SECTION 6 - DIMENSION AFTER SHRINK FIT -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading6">Dimension après frettage</h4>
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
                        <input type="text" class="form-control" id="mf" name="mf" disabled
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
                    <h6 class="d-block">BF</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="bfOk" name="bfOk" value="1"
                            <?php if ((bool)$tracabilitySheet->bf === true) echo 'checked'; ?>>
                        <label class="form-check-label" for="bfOk">OK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="bfNok" name="bfNok" value="0"
                            <?php if ((bool)$tracabilitySheet->bf === false) echo 'checked'; ?>>
                        <label class="form-check-label" for="bfNok">NOK</label>
                    </div>
                </div>

                <!--  Shrink Fit OK Gaz Side VF-->
                <div class="col-md-6">
                    <h6 class="d-block">VF</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="vfOk" name="vfOk" value="1"
                            <?php if ((bool)$tracabilitySheet->vf === true) echo 'checked'; ?>>
                        <label class="form-check-label" for="vfOk">OK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="vfNok" name="vfNok" value="0"
                            <?php if ((bool)$tracabilitySheet->vf === false) echo 'checked'; ?>>
                        <label class="form-check-label" for="vfNok">NOK</label>
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
        </section>





        <!-- SECTION 7 - OPERATOR VALIDATION -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">

            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading7">Déclaration de conformité opérateur</h4>

            <!-- Operator Date Conformity Declaration -->
            <div class="mb-3">
                <label for="operatorDateConformityDeclaration" class="form-label">Date validation par
                    l'opérateur</label>
                <input type="datetime-local" class="form-control" id="operatorDateConformityDeclaration"
                    name="operatorDateConformityDeclaration"
                    value="<?php echo isset($tracabilitySheet->operatorDateConformityDeclaration) && !empty($tracabilitySheet->operatorDateConformityDeclaration) ? htmlspecialchars($tracabilitySheet->operatorDateConformityDeclaration, ENT_QUOTES, 'UTF-8') : ""; ?>">
            </div>



            <div class="row mb-3">
                <!-- Operator ID Conformity Declaration -->
                <div class="col-md-4">
                    <label for="operatorIdConformityDeclaration" class="form-label">Matière</label>
                    <select class="form-select" id="operatorIdConformityDeclaration"
                        name="operatorIdConformityDeclaration">
                        <option selected disabled>Sélectionner le nom de l'opérateur</option>
                        <?php foreach ($operators as $operator) { ?>
                        <option value="<?php echo $operator->operatorFirstName . " - " . $operator->operatorLastName;?>"
                            <?php if ($tracabilitySheet->operatorIdConformityDeclaration == $operator->id) echo ' selected';?>>
                            <?php echo $operator->operatorFirstName . " " . $operator->operatorLastName ;  ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Operator Conformity Declaration -->
                <div class="col-md-4">
                    <h6>Conformité</h6>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="operatorConformityDeclarationOk"
                                name="operatorConformityDeclarationOk" value="1"
                                <?php if ((bool)$tracabilitySheet->operatorConformityDeclaration === true) echo 'checked'; ?>>
                            <label class="form-check-label" for="operatorConformityDeclarationOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="operatorConformityDeclarationNok"
                                name="operatorConformityDeclarationNok" value="0"
                                <?php if ((bool)$tracabilitySheet->operatorConformityDeclaration === false) echo 'checked'; ?>>
                            <label class="form-check-label" for="operatorConformityDeclarationNok">Non</label>
                        </div>
                    </div>
                </div>

                <!-- First Accumulator Lot -->
                <div class="col-md-4">
                    <h6>Premier du Lot</h6>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="firstAccumulatorLotYes"
                                name="firstAccumulatorLotYes" value="1"
                                <?php if ((bool)$tracabilitySheet->firstAccumulatorLot === true) echo 'checked'; ?>>
                            <label class="form-check-label" for="firstAccumulatorLotYes">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="firstAccumulatorLotNo"
                                name="firstAccumulatorLotNo" value="0"
                                <?php if ((bool)$tracabilitySheet->firstAccumulatorLot === false) echo 'checked'; ?>>
                            <label class="form-check-label" for="firstAccumulatorLotNo">Non</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operator Remarks -->
            <div class="mb-3">
                <label for="operatorRemarks" class="form-label">Remarque</label>
                <textarea class="form-control" id="operatorRemarks" name="operatorRemarks" rows="4"
                    placeholder="Entrez votre commentaire..." maxlength="255"><?php echo isset($tracabilitySheet->operatorRemarks) && !empty($tracabilitySheet->operatorRemarks) ? htmlspecialchars($tracabilitySheet->operatorRemarks, ENT_QUOTES, 'UTF-8') : ""; ?>
                        </textarea>
                <div id="charCount" class="form-text">0/255 caractères</div>

            </div>
        </section>






        <!-- SECTION 8 - QUALITY CONTROL -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">

            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading8">Déclaration de conformité controlleur</h4>

            <!-- Controller Date Conformity Declaration -->
            <div class="mb-3">
                <label for="controllerDateConformityDeclaration" class="form-label">Date de validation par le
                    contrôle</label>
                <input type="datetime-local" class="form-control" id="controllerDateConformityDeclaration"
                    name="controllerDateConformityDeclaration"
                    value="<?php echo isset($tracabilitySheet->controllerDateConformityDeclaration) && !empty($tracabilitySheet->controllerDateConformityDeclaration) ? htmlspecialchars($tracabilitySheet->controllerDateConformityDeclaration, ENT_QUOTES, 'UTF-8') : ""; ?>">

            </div>

            <div class="row mb-3">

                <!-- Controller ID Conformity Declaration -->
                <div class="col-md-6">
                    <label for="controllerIdConformityDeclaration" class="form-label">Matière</label>
                    <select class="form-select" id="controllerIdConformityDeclaration"
                        name="controllerIdConformityDeclaration">
                        <option selected disabled>Sélectionner la nom du controlleur</option>
                        <?php foreach ($controllers as $controller) { ?>
                        <option
                            value="<?php echo $controller->controllerFirstName . " - " . $controller->controllerLastName;?>"
                            <?php if ($tracabilitySheet->controllerIdConformityDeclaration == $controller->id) echo ' selected';?>>
                            <?php echo $controller->controllerFirstName . " " . $controller->controllerLastName ;  ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Controller Conformity Declaration -->

                <!-- Controller Conformity Declaration - Label-->
                <div class="col-md-6">
                    <h6>Conformité</h6>

                    <!-- Controller Conformity Declaration - CheckBox-->
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="controllerConformityDeclarationOk"
                                name="controllerConformityDeclarationOk" value="1"
                                <?php if ((bool)$tracabilitySheet->controllerConformityDeclaration === true) echo 'checked'; ?>>
                            <label class="form-check-label" for="controllerConformityDeclarationOk">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="controllerConformityDeclarationNok"
                                name="controllerConformityDeclarationNok" value="0"
                                <?php if ((bool)$tracabilitySheet->controllerConformityDeclaration === false) echo 'checked'; ?>>
                            <label class="form-check-label" for="controllerConformityDeclarationNok">Non</label>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Controller Remarks -->
            <div class="mb-3">
                <label for="controllerRemarks" class="form-label">Remarque</label>
                <textarea class="form-control" id="controllerRemarks" name="controllerRemarks" rows="4"
                    placeholder="Entrez votre commentaire..."
                    maxlength="255"><?php echo isset($tracabilitySheet->controllerRemarks) && !empty($tracabilitySheet->controllerRemarks) ? htmlspecialchars($tracabilitySheet->controllerRemarks, ENT_QUOTES, 'UTF-8') : ""; ?></textarea>
                <div id="charCount2" class="form-text">0/255 caractères</div>
            </div>
        </section>





        <!-- SECTION 9 - WINDIND CHARTS -->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading9">Graphique frettage</h4>
            <!-- Chart GENERAL-->
            <div class="chart-container" style="height: 100vh;">
                <canvas id="myChartGeneral" style="display: block; width: 100%; height:100%;"></canvas>
            </div>
            <button onclick="resetZoomChartGeneral()" class="btn btn-danger"><i
                    class="bi bi-arrow-counterclockwise"></i></button>
        </section>





        <!-- SECTION 10 - TENSILE TEST CHARTS-->
        <section class="sectionEditTraca px-2 py-2 mb-3 rounded shadow-sm bg-light">
            <h4 class="bg-primary px-2 py-2 rounded" id="scrollspyHeading10">Graphiques essais de traction</h4>
                <!-- Chart Tensile Tests 1 before shrink fit-->
                <div class="chart-container" style="height: 100vh;">
                    <canvas id="chart1BeforeShrinkFit" style="display: block; width: 100%; height:100%;"></canvas>
                </div>
                <button onclick="resetZoomChartGeneral()" class="btn btn-danger"><i
                        class="bi bi-arrow-counterclockwise"></i></button>
        </section>


    </form>
</div>
<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
var url = "<?php echo URL; ?>";
var serialNumberSheet = "<?php echo $tracabilitySheet->serialNumber; ?>";
</script>
<script src="<?php echo URL; ?>js/tolerances.js"></script>
<script src="<?php echo URL; ?>js/windingCharts.js"></script>
<script src="<?php echo URL; ?>js/tensilleTest1BeforeChart.js"></script>