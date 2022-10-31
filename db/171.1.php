<style>
    table {
    border: 1px solid black;
    border-collapse: collapse;
}
td{
    border: 1px solid black;
}
th{
    border: 1px solid black;
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
	
	$query = 'SELECT * FROM `students`';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['ID'].'</td>';
        echo '<td>'.$row['NAME'].'</td>';
        echo '<td>'.$row['LOGIN'].'</td>';
        echo '<td>'.$row['AGE'].'</td>';
        echo '<td>'.$row['ID_GROUP'].'</td>';
        echo '</tr>'  ;
    }
?>
</tbody>
</table>