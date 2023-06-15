<?php
//cabeçalho
include("blades/header.php");
?>
<div class="container border rounded mt-5 pt-3 ps-3 pb-3 pe-3 bg-white">
<form action="../controllers/cadastrarAluno.php" method="post">
    
<label for="tituloBlog">Titulo da Noticia</label><br>
<input type="text" name="tituloBlog" style="width: 300px;"><br>

    <label for="conteudoBlog">Conteudo</label><br>
    <input type="text" name="conteudoBlog"style="width: 1000px; height:250px;"><br>
    <label>Data</label><br>
    <input type="text" name="dataBlog"><br>
    <label>Autor</label><br>
    <input type="text" name="autorBlog"><br>

   

     <button class="btn btn-success">Cadastrar</button></a>
    
</form>


</div>
<?php
//rodapé
include("blades/footer.php");
?>