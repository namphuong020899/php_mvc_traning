<?php

class ProductController
{

    public function index()
    {
        echo __METHOD__;
    }

    public function show($id)
    {
        echo "Id : {$id}";
    }
}