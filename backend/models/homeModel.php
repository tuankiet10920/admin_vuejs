<?php
class HomeModel {
    public function getList($table){
        include_once 'models/connectModel.php';
        $data = new ConnectModel();
        $sql = "select id_film,name,describ from $table;";
        return $data->selectall($sql);
    }
}