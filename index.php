<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Charles Catura Web App List - Current and In-Progress</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="folder-list">
            <h1>All Web Apps</h1>
        </div>

        <?php
            $dir    = '../';
            $folders = scandir($dir);

            foreach ($folders as $folder) {
                if($folder != "." && $folder != ".." && $folder != "ut" && $folder != "tests" && $folder != "app-list") {
                    echo "<a href='/apps/$folder' target='_blank'>$folder</a><br>";
                }


            }
        ?>



    </div>



</body>
</html>