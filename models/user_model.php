<?php

require_once 'base_model.php';

class User extends BaseModel
{
    function getTableName()
    {
        return 'users';
    }
}
