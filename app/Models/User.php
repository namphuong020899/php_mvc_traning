<?php

class User extends Model
{
    protected $table = "users";

    public function getAll()
    {
        return ['sp1', 'sp2', 'sp3'];
    }
}
