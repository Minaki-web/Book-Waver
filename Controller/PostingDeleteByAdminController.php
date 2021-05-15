<?php
  session_start();
  require_once("../model/db.php");
  delete_post($_SESSION["post"]["post_id"]);
  unset($_SESSION["post"]);
  include_once("../view/posting_deleted.php");
  exit();
?>