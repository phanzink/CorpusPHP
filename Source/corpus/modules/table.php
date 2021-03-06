<?
/**
* Table Generating Module
* @todo work out an alignment system
*/
if( !$shutup ) :
?>
<table <?= firstNotEmpty( $data['params'], 'cellpadding="6" cellspacing="0" style="width: 100%"' ) ?>>
<?
if( count( $data['header'] ) ) {
	echo '<tr>';
	foreach( $data['header'] as $header ) {
		if( is_array( $header ) ) {
			echo '<th '. $header['params'] .'>' . $header['text'] . '</th>';
		}else{
			echo '<th align="left">' . $header . '</th>';
		}
	}
	echo '</tr>';
}
if( count( $data['data'] ) ) {
	foreach($data['data'] as $row) {
		echo '<tr class="'.($i++ & 1 ? '' : 'odd').'">';
		foreach($row as $field) {
			echo '<td align="left">' . ( nempty( $field ) ? $field : '&nbsp;' ) . '</td>';
		}
		echo '</tr>';
	}
}
?>
</table>
<?
endif;
