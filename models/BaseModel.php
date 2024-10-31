<?php

abstract class BaseModel
{

    protected $pm;

    public $id;
    public $created_at;
    public $updated_at;

    public function __construct()
    {
        $this->pm = AppManager::getPM();
    }

    // Abstract method to get the table name associated with the model (to be implemented by child classes)
    abstract protected function getTableName();

    // Abstract method to add a new record to the database (to be implemented by child classes)
    abstract protected function addNewRec();

    // Abstract method to update an existing record in the database (to be implemented by child classes)
    abstract protected function updateRec();

    public function save()
    {
        if (isset($this->id) && $this->id > 0) {
            return $this->updateRec();
        } else {
            return $this->addNewRec();
        }
    }

    public function getAll()
    {
        return $this->pm->run("SELECT * FROM " . $this->getTableName());
    }

    // Method to retrieve a record by its ID from the associated table
    public function getById($id)
    {
        $param = array(':id' => $id);
        return $this->pm->run("SELECT * FROM " . $this->getTableName() . " WHERE id = :id", $param, true);
    }

    // Method to delete a record by its ID from the associated table
    public function deleteRec($id)
    {
        $param = array(':id' => $id);
        return $this->pm->run("DELETE FROM " . $this->getTableName() . " WHERE id = :id", $param);
    }
}
