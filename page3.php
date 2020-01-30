<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Page3</h1>
    <h2>Variables</h2>

    <?php
    $fname="Jim";
    echo 'Hello '.$fname;
    ?>

    <h2>Arrays</h2>
    <?php
    $fnames=array('Jim', 'Lisa', 'Ann');
    ?>
    <p><?php print_r($fnames); ?></p>
    <p><?php echo 'First is '.$fnames[0]; ?></p>

    <h2>Assosiative array</h2>
    <?php
    $assoc_fnames=array('fin'=>'Ruotsi', 'swe'=>'Sverige', 'eng'=>'Sweden');
    ?>
    <p>
    <?php 
    echo 'The Finnish name for '.$assoc_fnames['eng'].' is '.$assoc_fnames['fin']; 
    ?> 
    </p>

    <h2>Two dimensional array</h2>
    <?php
    $persons=array(
    array('fn'=>'Jim', 'ln'=>'Smith'),
    array('fn'=>'Lisa', 'ln'=>'Jones'),
    array('fn'=>'Ann', 'ln'=>'Simpson')
    );
    ?>
    <ul>
    <?php
    foreach ($persons as $row) {
        echo '<li>'.$row['fn'].' '.$row['ln'].'</li>';
    }
    ?>
    </ul>
</body>
</html>