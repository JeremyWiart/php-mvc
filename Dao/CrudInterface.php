<?php

interface CrudInterface{

    public function retrive($id);
    public function create($array);
    public function update($id);
    public function delete($id);

}