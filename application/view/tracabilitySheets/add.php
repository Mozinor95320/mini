<div class="container">
    <h3>Ajouter une fiche de tracabilité</h3>
    <form action="<?php echo URL; ?>tracabilitySheets/addTracabilitySheet" method="POST">

        <label for="serialNumber" class="form-label">SN</label>
        <input type="text" class="form-control" id="serialNumber" name="serialNumber" placeholder="Entrez le SN"
            value="" required />

        <div class="input-group">
            <label for="WorkOrder" class="form-label">N°OF</label>
            <input type="text" class="form-control" id="workOrder" name="workOrder" placeholder="Entrez le numéro d'OF"
                value="" required />
                <!-- Unit of measurement -->
        <span class="input-group-text"><i class="bi bi-camera"></i></span>
        </div>

        <div class="input-group">
            <label for="partNumber" class="form-label">PN</label>
            <input type="text" class="form-control" id="partNumber" name="partNumber" placeholder="Entrez le PN"
                value="" required />
                <!-- Unit of measurement -->
        <span class="input-group-text"><i class="bi bi-camera"></i></span>
        </div>

        <label for="refPlan" class="form-label">Ref Plan</label>
        <input type="text" class="form-control" id="refPlan" name="refPlan" placeholder="Entrez la référence du plan"
            value="" required />

        <label for="refMachine" class="form-label">Ref Machine</label>
        <input type="text" class="form-control" id="refMachine" name="refMachine"
            placeholder="Entrez la référence de la machine" value="" required />

        <input type="submit" name="submit_add_tracabilitySheet" value="Submit" />
    </form>
</div>