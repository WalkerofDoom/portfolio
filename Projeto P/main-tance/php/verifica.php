<?php
if(!isset($_SESSION["loginUsuario"]) || !isset($_SESSION["nomeUsuario"]))
{
header("Location: index.php");
exit;
}
