<script type="text/javascript" src="<?= assetUrl(); ?>js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?= assetUrl(); ?>js/bootstrap-editable.min.js" ></script>
<script type="text/javascript" src="<?= assetUrl(); ?>js/contactsDB.js" ></script>
<link rel="stylesheet" type="text/css" href="<?= assetUrl(); ?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?= assetUrl(); ?>css/bootstrap-editable.css" />
<h2>Contacts</h2>
<table id="contacts_table">
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
	echo "<td><a href='#' class='fname' data-name='fname' data-pk='" . 
	$record->id . "' data-prev='". $record->fname ."'>" . $record->fname . 
	"</a></td>";
	echo "<td><a href='#' class='lname' data-name='lname' data-pk='" . 
	$record->id . "' data-prev='". $record->lname ."'>" . $record->lname . 
	"</a></td>";
	echo "<td><a href='#' class='phone' data-name='phone' data-pk='" . 
	$record->id . "' data-prev='". $record->phone ."'>" . $record->phone . 
	"</a></td>";
	echo "<td><a href='#' class='email' data-name='email' data-pk='" . 
	$record->id . "' data-prev='". $record->email ."'>" . $record->email . 
	"</a></td>";
echo "</tr>";
}
?>
</tbody>
</table>
<br />