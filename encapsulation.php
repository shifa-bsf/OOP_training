<?php
class connection{
    public function on(){

    }
    public function off(){

    }
    private function connect(){

    }
    // can access inside sub classes that created by extensding this class
    protected function activate(){

    }
}

$connection = new connection();
$connection->connect();

?>