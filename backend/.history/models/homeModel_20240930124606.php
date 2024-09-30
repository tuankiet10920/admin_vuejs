<?php
class HomeModel {
    public function getList($table){
        include_once 'models/connectModel.php';
        $data = new ConnectModel();
        $sql = "select * from $table;";
        return $data->selectall($sql);
    }
}