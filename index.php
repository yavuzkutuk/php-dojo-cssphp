<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Dojo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php 
    include ('./data.php');
?>

<body>
    <header>
        <h1>John Doe</h1>
        <h2>Consultant in economics</h2>
    </header>
    <main>
        <section>
            <h1>Trainings</h1>

            <div class="container">
                <?php 
                    foreach ($data['Trainings'] as $key => $value) {
                       // var_dump($value);
                        echo '<div class="card">';
                            echo '<div class="container">';
                                echo '<div><img src="./assets/images/'.$value['image'].'" alt="card 1" class="img" /></div>';
                                echo '<div>';
                                echo '<div>'.$value['date'].'</div>';
                                echo '<div>'.$value['title'].'</div>';
                                echo '<div>'.$value['description'].'</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>   
<?php 
foreach ($data['Trainings'] as $key => $value) { 
?>
<div class="card"><div class="container"><?php echo $value['date']; ?></div></div>
<?php      
}
?>   
                </div>
            </div>
        </section>
    </main>
</body>

</html>