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

    public function getPaginatedTracabiltySheets($limit, $offset)
    {
        $sql = "SELECT serialNumber, partNumber, workOrder, sheetCreationDate, lastTimeEdit, statusSheetOperator, statusSheetQuality FROM tracabilitySheets LIMIT :limit OFFSET :offset";
        $query = $this->db->prepare($sql);
        $query->bindValue(':limit', $limit, PDO::PARAM_INT);
        $query->bindValue(':offset', $offset, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }


    /**
     * Get all tracabiltySheets from database
     */
    public function getAlltracabiltySheets()
    {
        $sql = "SELECT serialNumber, partNumber, workOrder, sheetCreationDate, lastTimeEdit, statusSheetOperator, statusSheetQuality FROM tracabilitySheets";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a tracabiltySheet to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addTracabiltySheet($workOrder, $serialNumber, $partNumber, $refPlan, $refMachine)
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
     * Delete a tracabiltySheet in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $tracabiltySheet_id Id of tracabiltySheet
     */
    public function deleteTracabiltySheet($tracabiltySheet_id)
    {
        $sql = "DELETE FROM tracabilitySheets WHERE id = :tracabiltySheet_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':tracabiltySheet_id' => $tracabiltySheet_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a tracabiltySheet from database
     */
    public function getTracabiltySheet($tracabiltySheet_id)
    {
        $sql = "SELECT * FROM tracabilitySheets WHERE serialNumber = :tracabiltySheet_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':tracabiltySheet_id' => $tracabiltySheet_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a tracabiltySheet in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $tracabiltySheet_id Id
     */
    public function updateTracabiltySheet($parameters, $tracabiltySheet_id)
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
    WHERE serialNumber = :tracabiltySheet_id";
        $query = $this->db->prepare($sql);
        //add the parameter below in the arrway
        $parameters[':tracabiltySheet_id'] = $tracabiltySheet_id;

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }


    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/tracabiltySheets.php for more)
     */
    public function getAmountOfTracabiltySheets()
    {
        $sql = "SELECT COUNT(serialNumber) AS amount_of_tracabiltySheets FROM tracabilitySheets";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_tracabiltySheets;
    }
}
