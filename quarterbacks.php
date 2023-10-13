<?php
require_once("util-db.php");
require_once("model-quarterbacks.php");

$pageTitle = "Quarterbacks";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertQuarterbacks($_POST['qName'], $_POST['qADOT']);
      break;
  }
}
$quarterbacks = selectQuarterbacks();
include "view-quarterbacks.php";
include "view-footer.php";
?>
