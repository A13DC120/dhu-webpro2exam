<?php
class RoomsController {
    public function index() {
        // 何かの処理...

        $model_data = array('部屋1', '部屋2', '部屋3');
        include('views/rooms/index.php');
    }
}

$controller = new RoomsController();
$controller->index();