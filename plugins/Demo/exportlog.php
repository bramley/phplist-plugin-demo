<?php

$limit = isset($_GET['limit']) && ctype_digit($_GET['limit']) ? $_GET['limit'] : 5000;

$sql =
    "SELECT *
    FROM(
        SELECT id, entered, page, entry
        FROM {$tables['eventlog']}
        ORDER BY id DESC
        LIMIT $limit
    ) AS t
    ORDER BY id ASC";
$result = Sql_Query($sql);

ob_end_clean();
Header('Content-type: text/csv');
Header('Content-disposition:  attachment; filename=eventlog.csv');

$handle = fopen('php://output', 'w');
fputcsv($handle, array('id', 'entered', 'page', 'entry'));

while ($row = mysqli_fetch_row($result)) {
    fputcsv($handle, $row);
}
fclose($handle);
exit;
