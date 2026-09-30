<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar Imagens</h1>
<form action="processa_upload.php" method="post" enctype="multpart/form-data">
    <label>Selecione uma imagem:</label><br><br><br>
    <input type='file' name="arquivo" required><br><br>
    <input type="submit" value="Enviar">
</form>
<br>
<a href="index.php">Voltar para a galeria</a>
</body>
</html>