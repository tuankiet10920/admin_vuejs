<?php
    class ConnectModel{
        public $servername = "localhost";
        public $username = "root";
        public $password = "123456";
        public $conn;
        
        public function ketnoi(){
            try{
                $this->conn = new PDO(
                    "mysql:host=".$this->servername.";dbname=movie;charset=utf8"
                    ,$this->username
                    ,$this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->conn;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        // lấy thông tin với không biến truyền vào
        public function selectall($sql){
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql); 
            // bindParam
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
            $this->conn = null; // đóng kết nối database
            return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
        }

        // lấy thông tin với 1 biến truyền vào
        public function selectWithOneParam($sql, $key){
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql); 
            // bindParam
            $stmt->bindParam(":param", $key);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC : chuyển dl mãng lk
            $this->conn = null; // đóng kết nối database
            return $kq; // biến này chứa mãng các dòng dữ liệu trả về.
        }

        public function addUser($sql){
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql); 
            // bindParam
            $stmt->execute();
            $this->conn = null; // đóng kết nối database
        }
    }
?>