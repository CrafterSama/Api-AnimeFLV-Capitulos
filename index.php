<?php require("api/api.animeflv.capitulos.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api-AnimeFLV By DickyM</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <br>
    <form action="" method="post">
        <h1>Api-AnimeFLV By DickyM</h1>
        <input type="url" name="link" value="<?php if(isset($_POST['link'])){ echo $_POST['link']; } ?>">
        <button type="submit">Obtener Caps</button>
    </form>
    <br><br><br><hr><br>
    <div class="center">
        <h2>Link</h2>
        <input type="url" value="<?php if(isset($respuesta)){ echo $respuesta; } ?>" id="">
    </div>
</body>
</html>