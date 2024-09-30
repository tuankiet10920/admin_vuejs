<?php
class HomeModel {
    public function getList($table){
        include_once 'models/connectModel.php';
        $data = new ConnectModel();
        $sql = 'select * from film;';
        return $data->selectall(sql);
    }
}