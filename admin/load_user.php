<table class="tabelUser">
	<tr>
		<th class="jud1">ID</th><th class="jud2">Nama</th><th class="jud3">E-Mail</th><th class="jud4">Password</th><th class="jud5">Login</th>
		<th class="jud6">Aksi</th>
	</tr>
<?php
include '../konfig.php';
$sql = mysqli_query($konek, "SELECT * FROM user ORDER BY terdaftar DESC");
while($row = mysqli_fetch_array($sql)) {
	echo "<tr>";
	echo "<td>{$row['iduser']}</td><td>{$row['nama']}</td><td>{$row['email']}</td><td>{$row['password']}</td><td>{$row['total_login']} kali</td>
	<td><form action='hapus_user.php' method='post'><input type='hidden' name='iduser' value='{$row['iduser']}' />
	<button class='delUser'>Hapus</button></form></td>";
	echo "</tr>";
}
?>
</table>