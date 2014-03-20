<meta charset="UTF-8">
<?php 

/*$host = "postgresql01.cfi-pe.com.br"; */
$host = "localhost";
$user = "postgres"; 
$password = "postgres"; 
$dbname = "cfi_pe2"; 

$connection = pg_connect("host=$host dbname=$dbname user=$user password=$password") or die ("Não pode se conectar com o servidor\n"); 

$query = "SELECT * FROM versoes"; 

$rs = pg_query($connection, $query) or die("query não pode ser executado: $query\n");

echo "<table class='table table-hover table-bordered'>
	<thead>
		<tr>
			<div class='alert alert-info'>
			<legend clas'left'>Data: 03/02/2014  - Versão 1.1</legend>
			</div>
			<th>Módulo</th>
			<th>Descrição</th>
		</tr>
	</thead>
	<tbody>";
		while ($row = pg_fetch_row($rs)) {
			echo "<td>";/**/
		  	echo "$row[1] $row[2]\n";
		  	echo "</td>";
		}
	     	echo "</tr>";
	echo "</tbody>"; 
	echo "</table>";
		pg_close($connection);
?>

</body>
</html>