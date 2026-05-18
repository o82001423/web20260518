<H2><?= $_GET['code'];?>班級學生列表</H2>
<button>新增學生</button>
<style>
    .student-list{
        border-collapse:collapse ;
        margin: 20px auto;
        .student-list td{
            border: 1px solid #ccc;
            padding: 5px 10px;
        }
    }
</style>
<?php 

    include "db_conn.php";
    $sql="select `students`.`school_num`,
    `name`,
    `birthday`
    from `class_student`.class_code`='{$_GET['code']}'AND
    `class_student`.`school_num`=`students`.`school_num`";

    $students=$pdo->query($sql)->fetchAll();
     
echo"<table class='student-list'>";
echo "<tr>";
echo "<td>學號</td>";
echo "<td>姓名</td>";
echo "<td>生日</td>";
echo "<td>操作</td>";
echo "</tr>";
foreach($students as $student){
    //$sql="select * from `students` where `school_num`='{$num['school_num']}'";
    //$student=$pdo->query($sql)->fetch();
echo "<tr>";
echo "<td>{$student['school_num']}</td>";
echo "<td>{$student['name']}</td>";
echo "<td>{$student['birthday']}</td>";
echo "<td>";
echo "<a  href=''>編輯</a>";
echo "<a  href=''>刪除</a>";
echo "</td>";
echo "</tr>";
}


echo "</table>";
?>