<?php
include("../models/conexao.php");

     
    $varAutorBlog = $_POST["autorBlog"];
    $varTituloBlog = $_POST["tituloBlog"];
    $varDataBlog = $_POST["dataBlog"];
    $varConteudoBlog = $_POST["conteudoBlog"];

    mysqli_query($conexao, "INSERT INTO bloginfo (bloginfo_titulo,bloginfo_corpo,bloginfo_data,bloginfo_autor) values 
    ('$varTituloBlog', ' $varConteudoBlog', '$varDataBlog', '$varAutorBlog')");

    header ("location:../index.php");
?>