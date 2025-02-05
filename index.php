<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><pre><?php 
        var_dump(pathinfo('index.php'));
        $handle = opendir(__DIR__ . '/images');
        
        while (($currentFile = readdir($handle)) !== false)
        {

            if ($currentFile === '.' || $currentFile === '..' || $currentFile === '.DS_Store')
            {
                continue;
            }

            var_dump($currentFile);
            $images[] = $currentFile;
        }

        closedir($handle);
    ?>
    </pre>

    <?php foreach($images as $image): ?>
        <img src="<?php echo 'images/' . rawurldecode($image); ?>" alt="">    
    <?php endforeach; ?>

</main>
</body>
</html>