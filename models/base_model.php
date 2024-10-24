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

    abstract protected function getTableName();

    public function getAll()
    {
        return $this->pm->run("SELECT * FROM " . $this->getTableName());
    }
}
