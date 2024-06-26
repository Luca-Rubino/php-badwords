<?php  
    $titolo = 'Php-Badwords';
    $testo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit architecto repellendus fuga ducimus perspiciatis tempore alias sequi placeat cumque, ratione ea aliquid harum. Maiores architecto repellat delectus excepturi, error natus.
    Soluta doloremque maxime consequuntur sunt ex, fuga exercitationem obcaecati iusto tempore, aliquid minima fugiat sint ut delectus nam mollitia enim animi iure sequi ratione! Ducimus vel veritatis distinctio mollitia ipsam.
    Est facere id mollitia placeat nemo numquam officiis! Ipsum explicabo ipsa iste blanditiis exercitationem sed, obcaecati, voluptatem labore dignissimos debitis veritatis! Possimus dolore enim laudantium quae repudiandae explicabo quibusdam sit?
    Facere at nostrum reiciendis, aliquid ducimus blanditiis excepturi aliquam beatae odit minima exercitationem ipsum itaque esse sed! Consequuntur dolor deserunt iusto perspiciatis fuga dolore vitae eveniet aspernatur! Vitae, eius ut.
    Aliquid amet veritatis voluptates dignissimos, nam delectus, cupiditate perferendis et non possimus iusto repellat nihil blanditiis sint ut, quasi id nemo. Molestias sed provident temporibus impedit eveniet eligendi explicabo quisquam.';
    $filtroCensura = isset($_GET["filtro-censura"]) ? $_GET["filtro-censura"] : "";
    $nuovoTesto = str_replace($filtroCensura, "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-badwords</title>
</head>
<body>

<header>
    <section>
        <h1>
            <?php echo $titolo ?>
        </h1>
    </section>
    <section>
        <h3>Questo paragrafo è lungo: <span><?php echo strlen($testo) ?></span> caratteri.</h3>
        <p><?php echo $testo ?></p>
    </section>
    <section>
        <form action="./index.php" method="get">
            <label for="filtro-censura">Cosa vuoi censurare?</label>
            <input type="text" name="filtro-censura" id="filtro-censura">
            <input type="submit" value="Invia">
        </form>
    </section>
    <section>
        <h2>Testo censurato</h2>
        <h3>Questo paragrafo censurato è lungo: <span><?php echo strlen($nuovoTesto) ?></span> caratteri.</h3>
        <p> <?php echo $nuovoTesto ?> </p>
    </section>
</header>

</body>
</html>