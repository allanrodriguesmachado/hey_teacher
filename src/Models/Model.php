<?php

namespace Src\Models;

abstract class Model
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

    protected function read()
    {
        
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