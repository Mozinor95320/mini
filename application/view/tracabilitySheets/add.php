<div class="container">
    <h3>Ajouter une fiche de tracabilité</h3>
    <form action="<?php echo URL; ?>tracabilitySheets/addTracabilitySheet" method="POST">
        <label>N°OF</label>
        <input type="text" name="workOrder" value="" required />
        <label>SN</label>
        <input type="text" name="serialNumber" value="" required />
        <label>PN</label>
        <input type="text" name="partNumber" value="" />
        <label>Ref Plan</label>
        <input type="text" name="refPlan" value="" />
        <label>Ref Machine</label>
        <input type="text" name="refMachine" value="" />
        <input type="submit" name="submit_add_tracabilitySheet" value="Submit" />
    </form>
</div>