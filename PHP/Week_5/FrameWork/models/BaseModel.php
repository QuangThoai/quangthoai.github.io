<?php
include 'config/connection.php';

class BaseModel
{
    protected $table;
    protected $primaryKey = 'id';
    protected $foreignKey = [];
    protected $attributes = [];
    private $database;

    /**
     * Method initialization of Class
     * @param string $table is the name of table.
     * @param string $primaryKey is the field key of table.
     * @return void.
     */
    public function __construct($table)
    {
        $this->table = $table;
        $this->database = Database::getInstance();
        $this->getAttributes();
    }

    /**
     * Method to get all field in table
     * @return void.
     */
    private function getAttributes()
    {
        $stmt = $this->database->prepare("DESCRIBE $this->table");
        $stmt->execute();
        $result = $stmt->fetchAll();

        // Run loop foreach to get all fields of table
        foreach ($result as $row) {
            /* Check this field are the primary key with constraint 'auto increment' or not
                - if true: this primary key = this field.
                - else: Check with not constraint 'auto_increment'
                - if true: this primary key = this field and add this field to list attributes.
                - else: Check this field are the foreign key or not
                - if true: add this field to list foreign key and add this field to list attributes.
                - else: add this field to list attributes.
            */
            if ($row['Key'] == 'PRI' && $row['Extra'] == 'auto_increment') {
                $this->primaryKey = $row['Field'];
            } else if ($row['Key'] == 'PRI' && $row['Extra'] != 'auto_increment') {
                $this->primaryKey = $row['Field'];
                $this->attributes[] = $row['Field'];
            } else if ($row['Key'] == 'MUL') {
                $this->foreignKey[] = $row['Field'];
                $this->attributes[] = $row['Field'];
            } else $this->attributes[] = $row['Field'];
        }
    }

    /**
     * Method to get all record in table
     * @return array.
     */
    public function all()
    {
        $stmt = $this->database->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return ($result == false) ? null : $result;
    }

    /**
     * Method to find a record in table
     * @param string $id is the value of field key in table.
     * @return array.
     */
    public function find($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM $this->table WHERE $this->primaryKey='$id'");
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();
        return ($result == false) ? null : $result;
    }

    /**
     * Method to find a record in table
     * @param array $data is the value of field key in table.
     * @return array.
     */
    public function insert($data = [])
    {
        $lengthData = count($data);
        $lengthAttr = count($this->attributes);
        // Check amount of input data with amount of list attributes
        if ($lengthData > $lengthAttr || $lengthData == 0) {
            return false;
        } else {
            $lengthParam = $this->getNumOfParam($lengthData);
            $attributes = implode(',',$this->attributes);
            $stmt = $this->database->prepare("INSERT INTO $this->table($attributes) VALUES($lengthParam)");
            return $stmt->execute($data);
        }
    }

    /**
     * Method to get num of input parameter
     * @param int $length is the amount of input parameters.
     * @return string.
     */
    private function getNumOfParam($length)
    {
        $param = '';
        // Run loop for to create a string param with value = '?'
        for ($i = 0; $i < $length; $i++) {
            // Check position in the last or not
            if ($i != $length - 1) {
                $param .= '?, ';
            } else $param .= '?';
        }

        return $param;
    }

    /**
     * Method to update a exist record in table
     * @param string $id is the primary key for decision to get record.
     * @param array $data the field and value.
     * @return boolean.
     */
    public function update($id ,$data = ['key' => 'value'])
    {
        $lengthData = count($data);
        $lengthAttr = count($this->attributes);
        // Check amount of input data with amount of list attributes
        if ($lengthData > $lengthAttr || $lengthData == 0) {
            return false;
        } else {
            $getKeys = array_keys($data);
            $getValues = array_values($data);
            $setValueForField = $this->setValueOfField($getKeys, $getValues);
            $stmt = "UPDATE $this->table SET $setValueForField WHERE $this->primaryKey='$id'";
            return $this->database->exec($stmt);
        }
    }

    /**
     * Method find fields exist in table to update
     * @param array $keys is the field in table.
     * @param array $values is the value to set for field.
     * @return string.
     */
    private function setValueOfField($keys = [], $values = [])
    {
        $result = '';
        $length = count($this->attributes);
        //Run loop for to set value of field in list attributes
        for ($i = 0; $i < $length; $i++) {
            // Check the input field are exist in list attributes or not
            if ($this->attributes[$i] == $keys[$i]) {
                // Check position in the last or not
                if ($i != $length - 1) {
                    $result .= "{$this->attributes[$i]}='{$values[$i]}', ";
                } else $result .= "{$this->attributes[$i]}='{$values[$i]}'";
            }
        }
        return $result;
    }

    /**
     * Method to delete a exist record in table
     * @param string $id is the primary key for decision to get record.
     * @return boolean.
     */
    public function delete($id)
    {
        $stmt = "DELETE FROM $this->table WHERE $this->primaryKey='$id'";
        return $this->database->exec($stmt);
    }
}