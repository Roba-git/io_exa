<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PHP example</h1>
    <p>for-loop example</p>
    <?php 
        $counter=0;
        echo 'The value of the counter is: '.$counter;
        echo '<br>';
        echo "The value of the counter is $counter".'<br>';
        for($counter=0; $counter<=10; $counter++){
            echo 'this is line '.$counter.'<br>';
        }
    ?>
    <h2>Array</h2>
    <?php 
        $fnames=array('Jorma', 'Jaska', 'Jonna', 'Jaana');
        echo 'The second name is '.$fnames[1];
    ?>
    <p>We can print the whole array using function print_r</p>
    <?php print_r($fnames); ?>
    <ul>
        <?php 
            foreach($fnames as $row){
                echo '<li>'.$row.'</li>';
            } 
        ?>
    </ul>
    <h2>Two dimensional array</h2>
    <?php 
        $names=array(
            array('Jorma','Uotila'),
            array('Jaska','Jokunen'),
            array('Jonna','Tervomaa'),
            array('Jaana','Järvinen')
        );
        print_r($names);
    ?>
    <ul>
        <?php 
            foreach($names as $row){
                echo '<li>'.$row[0].' '.$row[1].'</li>';
            }
        ?>
    </ul>
    <h2>Associative array</h2>
    <?php 
        $assocArray=array(
            array('fname'=>'Jorma', 'lname'=>'Uotinen'),
            array('fname'=>'Jaska', 'lname'=>'Jokunen'),
            array('fname'=>'Jonna', 'lname'=>'Tervomaa'),
            array('fname'=>'Jaana', 'lname'=>'Järvinen')
        );
        print_r($assocArray);
    ?>
    <h2>List</h2>
    <ul>
        <?php 
            foreach($assocArray as $name){
                echo '<li>'.$name['fname'].' '.$name['lname'].'</li>';
            }
        ?>
    </ul>
    <table>
        <thead>
            <tr> <th>Firstname</th> <th>Lastname</th> </tr>
        </thead>
        <tbody>
        <?php 
            foreach($assocArray as $name){
                echo '<tr><td>'.$name['fname'].'</td><td>'.$name['lname'].'</td></tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>