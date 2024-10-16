<?php

class Model
{
    public $db;
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getPaginatedTracabilitySheets($limit, $offset)
    {
        $sql = "SELECT serialNumber, partNumber, workOrder, sheetCreationDate, lastTimeEdit, statusSheetOperator, statusSheetQuality FROM tracabilitySheets LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        /*$parameters = array(
            ':limit' => $limit,
            ':offset' => $offset
        );*/

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        //$query->execute($parameters);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Get all tracabilitySheets from database
     */
    public function getAllTracabilitySheets()
    {
        $sql = "SELECT * FROM tracabilitySheets";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabilitySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addTracabilitySheet($workOrder, $serialNumber, $partNumber, $refPlan, $refMachine)
    {

        $sql = "INSERT INTO tracabilitySheets (workOrder, serialNumber, partNumber, sheetCreationDate, refPlan, refMachine) 
        VALUES (:workOrder, :serialNumber, :partNumber, NOW(), :refPlan, :refMachine)";
        $query = $this->db->prepare($sql);

        $parameters = array(
            ':workOrder' => $workOrder,
            ':serialNumber' => $serialNumber,
            ':partNumber' => $partNumber,
            ':refPlan' => $refPlan,
            ':refMachine' => $refMachine
        );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }




    /**
     * Delete a tracabilitySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabilitySheet_id Id of tracabilitySheet
     */
    public function deleteTracabilitySheet($tracabilitySheet_id)
    {
        $sql = "DELETE FROM tracabilitySheets WHERE serialNumber = :tracabilitySheet_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':tracabilitySheet_id' => $tracabilitySheet_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabilitySheet from database
     */
    public function getTracabilitySheet($tracabilitySheet_id)
    {
        $sql = "SELECT * FROM tracabilitySheets WHERE serialNumber = :tracabilitySheet_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':tracabilitySheet_id' => $tracabilitySheet_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabilitySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabilitySheet_id Id
     */
    public function updateTracabilitySheet($parameters, $tracabilitySheet_id)
    {
        $sql = "UPDATE tracabilitySheets SET 
        serialNumber = :serialNumber,
        partNumber = :partNumber,
        workOrder = :workOrder,
        sheetCreationDate = :sheetCreationDate,
        refPlan = :refPlan,
        refMachine = :refMachine,
        material = :material,
        spoolBatch = :spoolBatch,
        spoolNumber = :spoolNumber,
        dateDimAfterCoating = :dateDimAfterCoating,
        operatorNameDimAfterCoating = :operatorNameDimAfterCoating,
        lengthL = :lengthL,
        diameterD = :diameterD,
        massM = :massM,
        aspectDimAfterCoating = :aspectDimAfterCoating,
        profileMassBeforeShrinkFit = :profileMassBeforeShrinkFit,
        linearMassBeforeShrinkFit = :linearMassBeforeShrinkFit,
        thickness1BeforeShrinkFit = :thickness1BeforeShrinkFit,
        thickness2BeforeShrinkFit = :thickness2BeforeShrinkFit,
        thickness3BeforeShrinkFit = :thickness3BeforeShrinkFit,
        thickness4BeforeShrinkFit = :thickness4BeforeShrinkFit,
        thickness5BeforeShrinkFit = :thickness5BeforeShrinkFit,
        force1BeforeShrinkFit = :force1BeforeShrinkFit,
        force2BeforeShrinkFit = :force2BeforeShrinkFit,
        force3BeforeShrinkFit = :force3BeforeShrinkFit,
        force4BeforeShrinkFit = :force4BeforeShrinkFit,
        force5BeforeShrinkFit = :force5BeforeShrinkFit,
        aspectFiber1BeforeShrinkFit = :aspectFiber1BeforeShrinkFit,
        aspectFiber2BeforeShrinkFit = :aspectFiber2BeforeShrinkFit,
        aspectFiber3BeforeShrinkFit = :aspectFiber3BeforeShrinkFit,
        aspectFiber4BeforeShrinkFit = :aspectFiber4BeforeShrinkFit,
        aspectFiber5BeforeShrinkFit = :aspectFiber5BeforeShrinkFit,
        averageBeforeShrinkFit = :averageBeforeShrinkFit,
        sigmaBeforeShrinkFit = :sigmaBeforeShrinkFit,
        profileMassAfterShrinkFit = :profileMassAfterShrinkFit,
        linearMassAfterShrinkFit = :linearMassAfterShrinkFit,
        thickness1AfterShrinkFit = :thickness1AfterShrinkFit,
        thickness2AfterShrinkFit = :thickness2AfterShrinkFit,
        thickness3AfterShrinkFit = :thickness3AfterShrinkFit,
        thickness4AfterShrinkFit = :thickness4AfterShrinkFit,
        thickness5AfterShrinkFit = :thickness5AfterShrinkFit,
        force1AfterShrinkFit = :force1AfterShrinkFit,
        force2AfterShrinkFit = :force2AfterShrinkFit,
        force3AfterShrinkFit = :force3AfterShrinkFit,
        force4AfterShrinkFit = :force4AfterShrinkFit,
        force5AfterShrinkFit = :force5AfterShrinkFit,
        aspectFiber1AfterShrinkFit = :aspectFiber1AfterShrinkFit,
        aspectFiber2AfterShrinkFit = :aspectFiber2AfterShrinkFit,
        aspectFiber3AfterShrinkFit = :aspectFiber3AfterShrinkFit,
        aspectFiber4AfterShrinkFit = :aspectFiber4AfterShrinkFit,
        aspectFiber5AfterShrinkFit = :aspectFiber5AfterShrinkFit,
        averageAfterShrinkFit = :averageAfterShrinkFit,
        sigmaAfterShrinkFit = :sigmaAfterShrinkFit,
        bf = :bf,
        vf = :vf,
        mt = :mt,
        mf = :mf,
        df1 = :df1,
        df2 = :df2,
        df3 = :df3,
        operatorConformityDeclaration = :operatorConformityDeclaration,
        operatorRemarks = :operatorRemarks,
        dateOperatorConformityDeclaration = :dateOperatorConformityDeclaration,
        operatorNameConformityDeclaration = :operatorNameConformityDeclaration,
        firstAccumulatorLot = :firstAccumulatorLot,
        qualityConformityDeclaration = :qualityConformityDeclaration,
        qualityControlDate = :qualityControlDate,
        qualityInspectorName = :qualityInspectorName,
        qualityInspectorRemarks = :qualityInspectorRemarks,
        status = :status
    WHERE serialNumber = :tracabilitySheet_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':tracabilitySheet_id'] = $tracabilitySheet_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabilitySheets.php for more)
     */
    public function getAmountOfTracabilitySheets()
    {
        $sql = "SELECT COUNT(serialNumber) AS amount_of_tracabilitySheets FROM tracabilitySheets";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_tracabilitySheets;
    }

    public function getWindindChart($tracabilitySheet_id)
    {
        $sql = "SELECT timeLog, dancerArmPressureSetpoint, dancerArmTensionActual, postTensionActual, preTensionSetpoint, preTensionActual, hotAirBlowerSetpoint, nozzleHeaterActual, nozzleHeaterSetpoint, tapeHeaterActual, tapeHeaterSetpoint FROM windingMachineReccords WHERE idTracabiltySheet = :tracabilitySheet_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':tracabilitySheet_id'] = $tracabilitySheet_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        return $results = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPaginatedFiberTypes($limit, $offset)
    {
        $sql = "SELECT id, partNumberParker, partNumberSuplier, remarks FROM fiberTypes LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        /*$parameters = array(
            ':limit' => $limit,
            ':offset' => $offset
        );*/

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        //$query->execute($parameters);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Get all tracabilitySheets from database
     */
    public function getAllFiberTypes()
    {
        $sql = "SELECT * FROM fiberTypes";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabilitySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addFiberType($partNumberParker, $partNumberSuplier, $remarks)
    {

        $sql = "INSERT INTO fiberTypes (partNumberParker, partNumberSuplier, remarks) 
        VALUES (:partNumberParker, :partNumberSuplier, :remarks)";
        $query = $this->db->prepare($sql);

        $parameters = array(
            ':partNumberParker' => $partNumberParker,
            ':partNumberSuplier' => $partNumberSuplier,
            ':remarks' => $remarks
        );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Delete a tracabilitySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabilitySheet_id Id of tracabilitySheet
     */
    public function deleteFiberType($fiberType_id)
    {
        $sql = "DELETE FROM fiberTypes WHERE id = :fiberType_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':fiberType_id' => $fiberType_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabilitySheet from database
     */
    public function getFiberType($fiberType_id)
    {
        $sql = "SELECT * FROM fiberTypes WHERE id = :fiberType_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':fiberType_id' => $fiberType_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabilitySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabilitySheet_id Id
     */
    public function updateFiberType($parameters, $fiberType_id)
    {
        $sql = "UPDATE fiberTypes SET 
        partNumberParker = :partNumberParker;
        partNumberSuplier = :partNumberSuplier;
        remarks = :remarks;
        WHERE id = :fiberType_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':fiberType_id'] = $fiberType_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabilitySheets.php for more)
     */
    public function getAmountOfFiberTypes()
    {
        $sql = "SELECT COUNT(id) AS amount_of_fiberTypes FROM fiberTypes";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_fiberTypes;
    }

    public function getPaginatedMachines($limit, $offset)
    {
        $sql = "SELECT id, machineName, machineRemarks FROM machines LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        /*$parameters = array(
            ':limit' => $limit,
            ':offset' => $offset
        );*/

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        //$query->execute($parameters);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Get all tracabilitySheets from database
     */
    public function getAllMachines()
    {
        $sql = "SELECT * FROM machines";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabilitySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addMachine($machineName, $machineRemarks)
    {

        $sql = "INSERT INTO machines (machineName, machineRemarks) 
        VALUES (:machineName, :machineRemarks)";
        $query = $this->db->prepare($sql);

        $parameters = array(
            ':machineName' => $machineName,
            ':machineRemarks' => $machineRemarks
        );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Delete a tracabilitySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabilitySheet_id Id of tracabilitySheet
     */
    public function deleteMachine($machine_id)
    {
        $sql = "DELETE FROM machines WHERE id = :machine_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':machine_id' => $machine_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabilitySheet from database
     */
    public function getMachine($machine_id)
    {
        $sql = "SELECT * FROM machines WHERE id = :machine_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':machine_id' => $machine_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabilitySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabilitySheet_id Id
     */
    public function updateMachine($parameters, $machine_id)
    {
        $sql = "UPDATE machines SET 
        machineName = :machineName;
        machineRemarks = :machineRemarks;
        WHERE id = :machine_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':machine_id'] = $machine_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }


    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabilitySheets.php for more)
     */
    public function getAmountOfMachines()
    {
        $sql = "SELECT COUNT(id) AS amount_of_machines FROM machines";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_machines;
    }

    public function getPaginatedOperators($limit, $offset)
    {
        $sql = "SELECT id, operatorFirstName, operatorLastName FROM certifiedOperators LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        /*$parameters = array(
            ':limit' => $limit,
            ':offset' => $offset
        );*/

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        //$query->execute($parameters);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Get all tracabilitySheets from database
     */
    public function getAllOperators()
    {
        $sql = "SELECT * FROM certifiedOperators";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabilitySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addOperator($operatorFirstName, $operatorLastName)
    {

        $sql = "INSERT INTO certifiedOperators (operatorFirstName, operatorLastName) 
        VALUES (:operatorFirstName, :operatorLastName)";
        $query = $this->db->prepare($sql);

        $parameters = array(
            ':operatorFirstName' => $operatorFirstName,
            ':operatorLastName' => $operatorLastName
        );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Delete a tracabilitySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabilitySheet_id Id of tracabilitySheet
     */
    public function deleteOperator($operator_id)
    {
        $sql = "DELETE FROM certifiedOperators WHERE id = :operator_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':operator_id' => $operator_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabilitySheet from database
     */
    public function getOperator($operator_id)
    {
        $sql = "SELECT * FROM certifiedOperators WHERE id = :operator_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':operator_id' => $operator_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabilitySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabilitySheet_id Id
     */
    public function updateOperator($parameters, $operator_id)
    {
        $sql = "UPDATE certifiedOperators SET 
        operatorFirstName = :operatorFirstName;
        operatorLastName = :operatorLastName;
        WHERE id = :operator_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':operator_id'] = $operator_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }


    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabilitySheets.php for more)
     */
    public function getAmountOfOperators()
    {
        $sql = "SELECT COUNT(id) AS amount_of_operators FROM certifiedOperators";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_operators;
    }

    public function getPaginatedControllers($limit, $offset)
    {
        $sql = "SELECT id, controllerFirstName, controllerLastName FROM certifiedControllers LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        /*$parameters = array(
            ':limit' => $limit,
            ':offset' => $offset
        );*/

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        //$query->execute($parameters);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Get all tracabilitySheets from database
     */
    public function getAllControllers()
    {
        $sql = "SELECT * FROM certifiedControllers";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabilitySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addController($controllerFirstName, $controllerLastName)
    {

        $sql = "INSERT INTO certifiedControllers (controllerFirstName, controllerLastName) 
        VALUES (:controllerFirstName, :controllerLastName)";
        $query = $this->db->prepare($sql);

        $parameters = array(
            ':controllerFirstName' => $controllerFirstName,
            ':controllerLastName' => $controllerLastName
        );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Delete a tracabilitySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabilitySheet_id Id of tracabilitySheet
     */
    public function deleteController($controller_id)
    {
        $sql = "DELETE FROM certifiedControllers WHERE id = :controller_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':controller_id' => $controller_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabilitySheet from database
     */
    public function getController($controller_id)
    {
        $sql = "SELECT * FROM certifiedControllers WHERE id = :controller_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':controller_id' => $controller_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabilitySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabilitySheet_id Id
     */
    public function updateController($parameters, $controller_id)
    {
        $sql = "UPDATE certifiedControllers SET 
        controllerFirstName = :controllerFirstName;
        controllerLastName = :controllerLastName;
        WHERE id = :controller_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':controller_id'] = $controller_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }
    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabilitySheets.php for more)
     */
    public function getAmountOfControllers()
    {
        $sql = "SELECT COUNT(id) AS amount_of_controllers FROM certifiedControllers";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_controllers;
    }

    public function getPaginatedPartNumbers($limit, $offset)
    {
        $sql = "SELECT id, partNumber, blueprintsReference, blueprintsRevision FROM partNumber LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        /*$parameters = array(
            ':limit' => $limit,
            ':offset' => $offset
        );*/

        // useful for debugging: you can see the SQL behind above construction by using:
        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        //$query->execute($parameters);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Get all tracabilitySheets from database
     */
    public function getAllPartNumbers()
    {
        $sql = "SELECT * FROM partNumber";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabilitySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addPartNumber($partNumber, $blueprintsReference, $blueprintsRevision)
    {

        $sql = "INSERT INTO partNumber (partNumber, blueprintsReference, blueprintsRevision) 
        VALUES (:partNumber, :blueprintsReference, :blueprintsRevision)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':partNumber' => $partNumber,
            ':blueprintsReference' => $blueprintsReference,
            ':blueprintsRevision' => $blueprintsRevision
        );

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Delete a tracabilitySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabilitySheet_id Id of tracabilitySheet
     */
    public function deletePartNumber($partNumber_id)
    {
        $sql = "DELETE FROM partNumber WHERE id = :partNumber_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':partNumber_id' => $partNumber_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabilitySheet from database
     */
    public function getPartNumber($partNumber_id)
    {
        $sql = "SELECT * FROM partNumber WHERE id = :partNumber_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':partNumber_id' => $partNumber_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabilitySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabilitySheet_id Id
     */
    public function updatePartNumber($parameters, $partNumber_id)
    {
        $sql = "UPDATE partNumber SET 
        partNumber = :partNumber;
        blueprintsReference = :blueprintsReference;
        blueprintsRevision = :blueprintsRevision;
        WHERE id = :partNumber_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':partNumber_id'] = $partNumber_id;
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }
    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabilitySheets.php for more)
     */
    public function getAmountOfPartNumbers()
    {
        $sql = "SELECT COUNT(id) AS amount_of_partNumbers FROM partNumber";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_partNumbers;
    }


}
