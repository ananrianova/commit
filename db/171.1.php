<style>
    table {
    border: 1px solid black;
    border-collapse: collapse;
}
td{
    border: 1px solid black;
    text-align: center;
}
th{
    border: 1px solid black;
    text-align: center;
    padding: 10px;
    background-color: #9b72e5 ;
}
tbody>tr:nth-child(odd)
{
    background-color: #8582bc;
}
tbody>tr:nth-child(even)
{
    background-color:#7f99c0  ;
}
</style>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Имя</th>
        <th>Логин</th>
        <th>Возраст</th>
        <th>Id группы</th>
    </tr>

</thead>
<tbody>
<?php
	$host = 'my_db'; 
	$user = 'root';      
	$pass = '1234';          
	$name = 'test';      
	
	$link = mysqli_connect($host, $user, $pass, $name);

    if (!empty ($_POST)) {
        $name = $_POST ['name'];
        $login = $_POST ['login'];
        $age = $_POST ['age'];
        $id_group = $_POST ['id_group'];
        $query = sprintf ("INSERT INTO  `students` (`NAME`, `LOGIN`, `AGE`, `ID_GROUP`) VALUES ('%s', '%s', %d, %d) ", $name,$login,$age,$id_group);
mysqli_query($link,$query) or die (mysqli_error($link));

    }
	
	$query = 'SELECT s. `ID`, s.`NAME`, s.`LOGIN`, s. `AGE`, g. `NAME` AS `GROUP` FROM  `students` AS s JOIN `groups` AS g ON g.ID = s.ID_GROUP;';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row['ID'].'</td>';
        echo '<td>'.$row['NAME'].'</td>';
        echo '<td>'.$row['LOGIN'].'</td>';
        echo '<td>'.$row['AGE'].'</td>';
        echo '<td>'.$row['GROUP'].'</td>';
        echo '</tr>';
    }
?>
</tbody>
</table>
<br>
<form action="171.1.php" method="POST">
    <input type="text" name="name" placeholder = "Имя"> <br>
    <input type="text" name="login" placeholder = "логин"> <br>
    <input type="text" name="age" placeholder = "Возраст"> <br>
    <input type="text" name="id_group" placeholder = "№ группы"> <br>
    <select name="group">
        <?php
        $query = 'SELECT `ID`, `NAME` FROM `groups`';
        $result = mysqli_query($link, $query) or die (mysqli_error($link));
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option>'.$row['NAME'].'</option>';
        }
        ?>
    </select><br>
    <input type="submit">
</form>