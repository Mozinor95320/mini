<div class="container mt-3">
    <h3 class="mb-3">Créer une fiche de tracabilité:</h3>
    <form action="<?php echo URL; ?>tracabilitySheets/addTracabilitySheet" method="POST">
        <!-- Serial Number -->
        <div class="row mb-3">
            <div class="col-12 align-items-center">
                <label for="serialNumber" class="form-label">SN</label>
                <input type="text" class="form-control" id="serialNumber" name="serialNumber" placeholder="Entrez le SN"
                    value="" required>
                <div class="invalid-feedback">
                    Une fiche de tracabilité est déjà associée à ce numéro de série.
                </div>

            </div>
        </div>
        <!-- Work Order -->
        <div class="row mb-3">
            <div class="col-md-6 align-items-center">
                <label for="WorkOrder" class="form-label me-2">N°OF</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="workOrder" name="workOrder"
                        placeholder="Entrez le numéro d'OF" value="" required />
                    <!-- Unit of measurement -->
                    <span class="input-group-text"><i class="bi bi-camera"></i></span>
                    <div class="invalid-feedback">
                        Une fiche de tracabilité est déjà associée à ce numéro de série.
                    </div>
                </div>

            </div>
            <!-- Part Number -->
            <div class="col-md-6 align-items-center">
                <label for="partNumber" class="form-label me-2">PN</label>
                <div class="input-group">
                    <select class="form-select" id="partNumber" name="partNumber" required>
                        <!-- Unit of measurement -->
                        <option selected disabled>Sélectionner le PN</option>
                        <?php foreach ($partNumbers as $partNumber) { ?>
                        <option value="<?php echo $partNumber->partNumber; ?>">
                            <?php echo $partNumber->partNumber; ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        Merci de sélectionner un PN dans la liste.
                    </div>
                </div>
            </div>

        </div>
        <!-- Plan's Reference -->
        <div class="row mb-3">
            <div class="col-md-6 align-items-center">

                <label for="refPlan" class="form-label me-2">Ref Plan</label>

                <select class="form-select" id="refPlan" name="refPlan" required>
                    <option selected disabled>Sélectionner le plan</option>
                    <?php foreach ($partNumbers as $partNumber) { ?>
                    <option
                        value="<?php echo $partNumber->blueprintsReference . " rev: " . $partNumber->blueprintsRevision ;  ?>">
                        <?php echo $partNumber->blueprintsReference . " rev: " . $partNumber->blueprintsRevision ;  ?>
                    </option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    Merci de sélectionner un plan dans la liste.
                </div>
            </div>

            <!-- Machine Reference -->
            <div class="col-md-6 align-items-center">


                <label for="refMachine" class="form-label me-2">Ref Machine</label>
                <select class="form-select" id="refMachine" name="refMachine" required>
                    <option selected disabled>Sélectionner la machine</option>
                    <?php foreach ($machines as $machine) { ?>
                    <option value="<?php echo $machine->machineName;  ?>">
                        <?php echo $machine->machineName;  ?>
                    </option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    Merci de sélectionner une machine dans la liste.
                </div>
            </div>

        </div>

        <input class="btn btn-primary" type="submit" name="submit_add_tracabilitySheet" value="Créer" />
    </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const submitButton = document.querySelector('input[type="submit"]');

    // Disable the submit button on load
    submitButton.disabled = true;

    // Get form fields
    const serialNumberInput = document.getElementById('serialNumber');
    const workOrderInput = document.getElementById('workOrder');
    const partNumberSelect = document.getElementById('partNumber');
    const refPlanSelect = document.getElementById('refPlan');
    const refMachineSelect = document.getElementById('refMachine');



    let serialNumbers = <?php echo json_encode($serialNumbers); ?>; // To store serial numbers from the database
    /*
    // Fetch all serial numbers via AJAX when the page loads
    function fetchSerialNumbers() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '<?php echo URL; ?>tracabilitySheets/getAllSerialNumberTracabilitySheets', true);
        xhr.onload = function() {
            if (this.status === 200) {
                serialNumbers = JSON.parse(this.responseText); // Assuming the PHP returns JSON
            }
        };
        xhr.send();
    }
*/

    // Function to validate Serial Number (SN) and check uniqueness
    function validateSerialNumber() {
        const value = serialNumberInput.value.trim();
        const tooltip = bootstrap.Tooltip.getInstance(serialNumberInput);
        if (value === "") {
            serialNumberInput.classList.remove('is-valid');
            serialNumberInput.classList.add('is-invalid');
            return false;
        } else if (serialNumbers.includes(value)) {
            // If the serial number already exists in the database
            serialNumberInput.classList.remove('is-valid');
            serialNumberInput.classList.add('is-invalid');
            return false;
        } else {
            serialNumberInput.classList.remove('is-invalid');
            serialNumberInput.classList.add('is-valid');
            return true;
        }
    }

    // Function to validate Work Order (OF)
    function validateWorkOrder() {
        const value = workOrderInput.value.trim();
        if (value === "") {
            workOrderInput.classList.remove('is-valid');
            workOrderInput.classList.add('is-invalid');
            return false;
        } else {
            workOrderInput.classList.remove('is-invalid');
            workOrderInput.classList.add('is-valid');
            return true;
        }
    }

    // Function to validate Part Number (PN)
    function validatePartNumber() {
        const value = partNumberSelect.value;
        if (value === "Sélectionner le PN" || value === "") {
            partNumberSelect.classList.remove('is-valid');
            partNumberSelect.classList.add('is-invalid');
            return false;
        } else {
            partNumberSelect.classList.remove('is-invalid');
            partNumberSelect.classList.add('is-valid');
            return true;
        }
    }

    // Function to validate Ref Plan
    function validateRefPlan() {
        const value = refPlanSelect.value;
        if (value === "Sélectionner le plan" || value === "") {
            refPlanSelect.classList.remove('is-valid');
            refPlanSelect.classList.add('is-invalid');
            return false;
        } else {
            refPlanSelect.classList.remove('is-invalid');
            refPlanSelect.classList.add('is-valid');
            return true;
        }
    }

    // Function to validate Ref Machine
    function validateRefMachine() {
        const value = refMachineSelect.value;
        if (value === "Sélectionner la machine" || value === "") {
            refMachineSelect.classList.remove('is-valid');
            refMachineSelect.classList.add('is-invalid');
            return false;
        } else {
            refMachineSelect.classList.remove('is-invalid');
            refMachineSelect.classList.add('is-valid');
            return true;
        }
    }

    // Function to check the validity of all fields
    function checkFormValidity() {
        const isSerialNumberValid = validateSerialNumber();
        const isWorkOrderValid = validateWorkOrder();
        const isPartNumberValid = validatePartNumber();
        const isRefPlanValid = validateRefPlan();
        const isRefMachineValid = validateRefMachine();

        // If all fields are valid, enable the submit button
        submitButton.disabled = !(isSerialNumberValid && isWorkOrderValid && isPartNumberValid &&
            isRefPlanValid && isRefMachineValid);
    }

    // Add event listeners to each field to validate on input change
    serialNumberInput.addEventListener('input', checkFormValidity);
    workOrderInput.addEventListener('input', checkFormValidity);
    partNumberSelect.addEventListener('change', checkFormValidity);
    refPlanSelect.addEventListener('change', checkFormValidity);
    refMachineSelect.addEventListener('change', checkFormValidity);

    // Fetch serial numbers from the database when the page loads
    fetchSerialNumbers();

    // Check fields once on load
    checkFormValidity();
});
</script>