<?php
include_once "base.php";
dd($_POST);
foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $Title->del($id);
    } else {
        $row = $Title->find($id);
        $row['text'] = $_POST['text'][$key];
        $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;

        //$Title->save($row);
    }
}


unset($_POST['table']);
dd($_POST);
//to("../admin.php?do=title");
