<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula PHP</title>
	<style type="text/css">
	
	body
	{
		font-family: Verdana;
		background-color: black;
	}
	
	form
	{
		max-width: 600px;
		width: 70%;
		padding: 40px;
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		background-color: aliceblue;
		border-radius: 2px;
		padding: 20px;
	}
	
	</style>
</head>
<body>
<form method="post" action="LetPHP.php">
	<h4> Verifica se a letra digitada é consoante ou vogal </h4>
		 Digite uma letra qualquer
	<input type="text" name="txtLetr" id="txtLetra"  maxlength="1"/>
	
        <input type="submit" value="Verificar" class="verificar" name="verifica" onClick="Verificar()"/>
        <input type="reset" value="Limpar" name="limpar" id="limpar" onClick="document.getElementById('txtLetra').focus()"/>
    </form>
    <?php

        $letra = $_POST['txtLetr'];
        $btn = ' ';
        $btn = $_POST['verifica'];

        if($btn != ' ')
		{
        switch(strtoupper($letra))
        {
            case is_numeric($letra):
			{
                echo "<script language='JavaScript'>
				    window.alert('Digite apenas letras')
					</script>";
					break;
            }

            case 'A':
            case 'E':
            case 'I':
            case 'O':
            case 'U':
            {
                echo "<script language='JavaScript'>
				    window.alert('${letra} é uma vogal!');
					</script>";
            break;
            }
            default:
			
            echo "<script language='JavaScript'>
			    window.alert('${letra} é uma consoante!'); 
				</script>";
        }     
    }
    ?>
		
</body>
</html>