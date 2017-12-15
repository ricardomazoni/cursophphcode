<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Arquivo</title>
<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
<script language="Javascript"> 
    $(function(){ 
        $('#ImagemCrop').Jcrop({
            aspectRatio: 1,
            onSelect: UpdateCrop,
            setSelect: [0, 0, 0, 0],
        });

    }); 
    function UpdateCrop(c)
    {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
        $("#altura").html("Altura:" + c.h);
        $("#largura").html("Largura:" + c.w);
    };  
</script>
</head>
<body>
    <div id="altura">Altura:</div>
    <div id="largura">Largura:</div>
    <form action="recorte.php" method="post">
        <input type="hidden" id="x" name="x" />
        <input type="hidden" id="y" name="y" />
        <input type="hidden" id="w" name="w" />
        <input type="hidden" id="h" name="h" />
        <input type="hidden" id="imagem" name="imagem" value="imagens/1.jpg" />
        <input type="submit" value="Recortar Imagem" />
    </form>
    <img src="imagens/1.jpg" id="ImagemCrop" />
</body>
</html>
