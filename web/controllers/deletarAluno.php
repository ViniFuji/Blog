<?php

include("../models/conexao.php");

$varIda = $_GET["ida"];

$query = mysqli_query($conexao, "DELETE FROM bloginfo where codigo = $varIda");

header("location:../index.php");

?>