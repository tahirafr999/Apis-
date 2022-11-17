<?php 

$output = fopen('php://output', 'w');
        
        fputcsv($output,$header_row);
       
            
        fclose($output);

?>