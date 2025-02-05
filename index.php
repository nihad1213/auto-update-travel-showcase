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
        $handle = opendir(__DIR__ . '/images');
        
        while (($currentFile = readdir($handle)) !== false)
        {

            if ($currentFile === '.' || $currentFile === '..' || $currentFile === '.DS_Store')
            {
                continue;
            }
            
            $extension = pathinfo('images/' . $currentFile, PATHINFO_EXTENSION);
            if (!in_array(strtolower($extension), ['jpg', 'jpeg', 'png'])) {
                continue;
            }
            var_dump($currentFile);
            var_dump($extension);
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