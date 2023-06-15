<?php
include("../models/conexao.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid " ">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BLOG MONSTRO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="../views/cadastro.php">Criar</a></li>
      <li><a href="../views/cadastroAtualiza.php">Atualizar</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="../login/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="row">
  <div class="column">
 <table border="1">
        <?php
        $query = mysqli_query($conexao, "SELECT * from blog
        inner join bloginfo
        on blog_bloginfo_codigo = bloginfo_codigo inner join blogimg
        on blog_blogimg_codigo = blogimg_codigo order by blog_codigo DESC
        ");
        while ($exibe = mysqli_fetch_array($query)) 
        {


            ?>
            <tr>
                <td>
                    <img src="img/<?php echo $exibe[9]?>" width="200">
                </td>
                <td width="200" height="200">
                    <?php echo $exibe[5] ?>
                </td>
                
                <td>
                    <a href="page.php?idb=<?php echo $exibe[0] ?>"><?php echo substr($exibe[6],0,50). "..."?></a>
                </td>
            </tr>
      



        <?php } ?>





    </table>
    </div>
        

        <div class="column">
    <table border="1">
    <?php
        $query = mysqli_query($conexao, "SELECT * from blog
        inner join bloginfo
        on blog_bloginfo_codigo = bloginfo_codigo inner join blogimg
        on blog_blogimg_codigo = blogimg_codigo order by blog_codigo DESC
        ");
        while ($exibe = mysqli_fetch_array($query)) 
        {


            ?>
            <tr>
                <td>
                    <img src="img/<?php echo $exibe[9]?>" width="200">
                </td>
                <td width="200" height="200">
                    <?php echo $exibe[5] ?>
                </td>
                
                <td>
                    <a href="page.php?idb=<?php echo $exibe[0] ?>"><?php echo substr($exibe[6],0,50). "..."?></a>
                </td>
            </tr>
            




        <?php } ?>





    </table>
    </div>
        </div> 
</body>

</html>