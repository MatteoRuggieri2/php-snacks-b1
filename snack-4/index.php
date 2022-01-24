<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e 
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
    $original_paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis non maxime dolore sequi laboriosam? Non debitis laborum veniam sint eos. Voluptates molestiae perferendis inventore ab sint, maiores facere modi asperiores? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est odit nesciunt nobis repellat, ex, quos voluptas atque nam provident tenetur pariatur? Nisi repellendus voluptate rerum commodi provident, delectus officiis beatae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, distinctio. Repudiandae dolor earum numquam molestiae inventore, nisi ut cum laboriosam eius explicabo. Porro, deleniti repellendus nesciunt rem quae enim voluptas!';
    $separate_paragraph = explode('.', $original_paragraph);

    var_dump($separate_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    <main>
        <h2>Paragrafo originale</h2>
        <?php echo $original_paragraph ?>

        <h2>Paragrafi separati</h2>
        <?php for($i = 0; $i < count($separate_paragraph); $i++) { ?>
            <p>
                <?php echo trim($separate_paragraph[$i]) ?>
            </p>
        <?php } ?>

    </main>
</body>
</html>