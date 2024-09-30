<?php 
    class HomeController {
        public $action;
        public function __construct($action)
        {
            $this->action = $action;
        }

        public function index(){
            switch ($this->action) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
?>