<?php

namespace Src\Models;

use Src\db\Connect;

abstract class Model extends Connect
{
    protected ?object $data;
    protected \PDOException $fail;
    protected ?string $message;

    protected function data(): ?object
    {
        return $this->data;
    }

    protected function fail(): \PDOException
    {
        return $this->fail;
    }

    protected function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {
        
    }

    protected function read(string $select, string|array $params)
    {
        try {
            $stmt = Connect::getInstance();
            parse_str($params, $params);
            foreach ($params AS $key => $value) {
                dd(is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
//                $type = (is_numeric($value))
            }

//            $stmt->prepare();
        }catch (\PDOException $exception) {
            return $this->fail($exception);
        }
    }

    protected function update()
    {
        
    }

    protected function delete()
    {
        
    }

    protected function safe()
    {

    }

    private function filter()
    {

    }
}