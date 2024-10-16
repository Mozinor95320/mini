<div class="container mt-3">
    <h3 class="mb-3">Créer une fiche de tracabilité:</h3>
    <form action="<?php echo URL; ?>tracabilitySheets/addTracabilitySheet" method="POST">
        <!-- Serial Number -->
        <div class="row mb-3">
            <div class="col-12 align-items-center">
                <label for="serialNumber" class="form-label">SN</label>
                <input type="text" class="form-control" id="serialNumber" name="serialNumber" placeholder="Entrez le SN"
                    value="" required />
            </div>
        </div>
        <!-- Work Order -->
        <div class="row mb-3">
            <div class="col-6 align-items-center">
                <label for="WorkOrder" class="form-label me-2">N°OF</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="workOrder" name="workOrder"
                        placeholder="Entrez le numéro d'OF" value="" required />
                    <!-- Unit of measurement -->
                    <span class="input-group-text"><i class="bi bi-camera"></i></span>
                </div>

            </div>
            <!-- Part Number -->
            <div class="col-6 align-items-center">
                <label for="partNumber" class="form-label me-2">PN</label>
                <div class="input-group">
                    <select class="form-select" id="partNumber" name="partNumber" required>
                        <!-- Unit of measurement -->
                        <option selected disabled>Sélectionner le PN</option>
                        <?php foreach ($partNumbers as $partNumber) { ?>
                        <option <?php echo $partNumber->partNumber; ?>></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

        </div>
        <!-- Plan's Reference -->
        <div class="row mb-3">
            <div class="col-6 align-items-center">

                <label for="refPlan" class="form-label me-2">Ref Plan</label>

                <select class="form-select" id="refPlan" name="refPlan" required>
                    <option selected disabled>Sélectionner le plan</option>
                    <?php foreach ($partNumbers as $partNumber) { ?>
                    <option
                        <?php echo $partNumber->blueprintsReference . " rev: " . $partNumber->blueprintsRevision ;  ?>>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <!-- Machine Reference -->
            <div class="col-6 align-items-center">


                <label for="refMachine" class="form-label me-2">Ref Machine</label>
                <select class="form-select" id="refMachine" name="refMachine" required>
                    <option selected disabled>Sélectionner la machine</option>
                    <?php foreach ($machines as $machine) { ?>
                    <option
                        <?php echo $machine->machineName;  ?>>
                    </option>
                    <?php } ?>
                </select>
            </div>

        </div>

        <input class="btn btn-primary" type="submit" name="submit_add_tracabilitySheet" value="Créer" />
    </form>
</div>