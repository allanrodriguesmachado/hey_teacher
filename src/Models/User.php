<?php

namespace Src\Models;

class User extends Model
{
    private static array $safe = [];
    private static string $entity = 'users';

    public function boostrap()
    {
        
    }

    public function load(int $id, string $columns = "*")
    {
        $load = $this->read("SELECT {$columns} FROM ". self::$entity ." WHERE :id" , "id=$id");
    }

    public function find(string $email)
    {

    }

    public function all()
    {

    }

    public function save()
    {

    }

    public function destroy()
    {

    }

    private function required()
    {

    }
}