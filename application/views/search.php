<script type="text/javascript" src="<?= assetUrl(); ?>js/searchDB.js" ></script>
<h2>Search</h2>
<form>
<input type="text" id="search" />
</form>
<br/>
<table id="search_table">
<thead>
<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Phone Number</th>
	<th>E-mail</th>
</tr>
</thead>
<tbody>
<?php
foreach($this->TPL["records"] as $record) {
	echo "<tr>";
	echo "<td>" . $record->id . "</td>";
	echo "<td>" . $record->fname . "</td>";
	echo "<td>" . $record->lname . "</td>";
	echo "<td>" . $record->phone . "</td>";
	echo "<td>" . $record->email . "</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
<br />