<?php
include 'BaseModel.php';

class User extends BaseModel
{
    protected $table = 'user';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
