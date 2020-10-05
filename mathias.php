<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<style>
    form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        background-color: grey;
        padding: 50px;
        border-radius: 10px;
    }

    body{
        height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .title{
        font-size: 40px;
        color: red;
        font-weight: bold;
        margin-bottom: 30px;
        text-decoration: underline;
        background-color: yellowgreen;
        padding: 8px;
        border-radius: 10px;
    }

    .input{
        width: 300px;
        height: 50px;
        border: 5px solid red;
        border-radius: 10px;
        text-align: center;
        font-size: 25px;
        margin: 0 auto;
    }

    .button{
        width: 100px;
        height: 50px;
        align-self: center;
        margin-top: 30px;
        background-color: yellowgreen;
        font-size: 30px;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        color: red;
    }

    .button:hover{
        width: 100px;
        height: 50px;
        align-self: center;
        margin-top: 30px;
        background-color:  burlywood;
        font-size: 30px;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        color: red;
        cursor: pointer;
    }

    h1{
        color: black;
        font-size: "px";
    }

    p{
        text-align: center;
        font-size: 30px;
    }

    span{
        color: yellowgreen;
        font-weight: bold;
    }

</style>


    
<form action="mathias.php" method="post">

    <label class="title" for="nbr">Chiffre à entré dans l'algorithme</label>
    <input class="input" type="text" name="number" />
    <input class="button" type="submit" name="envoyer" value="GO">

    <?php



    $a = (int) $_POST['number'];
    $b = 0;

    $i = 0;

    while ($i < 4){
        $i++;

        $a++;
        $b = $a + $b;
    }

    if ( isset($_POST['envoyer']) ){
        echo '<p>Voici le rélultat : <span>'.$b.'</span></p>';
    } else {
        echo '<p>Si tu ne met pas de chiffre ça ne marchera pas</p>';
    }
?>

</form>

</body>
</html>

