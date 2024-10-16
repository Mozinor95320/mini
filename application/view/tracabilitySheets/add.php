<div class="container mt-3">
    <h3>Créer une fiche de tracabilité:</h3>
    <form action="<?php echo URL; ?>tracabilitySheets/addTracabilitySheet" method="POST">

        <div class="row mb-3">
            <label for="serialNumber" class="form-label">SN</label>
            <input type="text" class="form-control" id="serialNumber" name="serialNumber" placeholder="Entrez le SN"
                value="" required />
        </div>

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

            <div class="col-6 align-items-center">
                <label for="partNumber" class="form-label me-2">PN</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="partNumber" name="partNumber" placeholder="Entrez le PN"
                        value="" required />
                    <!-- Unit of measurement -->
                    <span class="input-group-text"><i class="bi bi-camera"></i></span>
                </div>
            </div>

        </div>

        <div class="row mb-3">
            <div class="col-6 align-items-center">

                <label for="refPlan" class="form-label me-2">Ref Plan</label>
                <input type="text" class="form-control" id="refPlan" name="refPlan"
                    placeholder="Entrez la référence du plan" value="" required />

            </div>

            <div class="col-6 align-items-center">


                <label for="refMachine" class="form-label me-2">Ref Machine</label>
                <input type="text" class="form-control" id="refMachine" name="refMachine"
                    placeholder="Entrez la référence de la machine" value="" required />
            </div>

        </div>


        <input class="btn btn-primary" type="submit" name="submit_add_tracabilitySheet" value="Créer" />
    </form>
</div>