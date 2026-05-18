<h2>班級列表</h2>
<?php 
    include "db_can.php";

    $classrooms=$pdo->query("select * from `classes`")->fetchAll();

    echo "<div class='cards-container'>";
    foreach($classrooms as $class):  
?>

<div class="card">
    <div class="card-icon"></div>
    <h3><?= $class['name']; ?>(<?=$class['code'];?>?>)</h3>
    <p><?=$class['tutor']; ?>?></p>
</div>

<?php endforeach ?>
</div>
