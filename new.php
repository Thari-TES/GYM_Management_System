
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

    <?php 

$x=array(10,20,30);
$y=array("abc","XYZ","NMB");
$z=array("a","b","c");

?>

<head>
    <style>

        table,th,td{
                border: 1px solid black;
        }
        </style>
</head>

<table >
    <tr >
        <th>ABC</th>
        <th>ABC</th>
        <th>ABC</th>
    </tr>
    <tr>
            <?php 
          

                    echo "<td>$x[0]</td>";
                    echo "<td>$y[0]</td>";
                    echo "<td>$z[0]</td>";
                    
            
            
            
            ?>
        
        
       
    </tr>
    <tr>
            <?php 
          
        $is=1;
                    echo "<td>$x[$is]</td>";
                    echo "<td>$y[$is]</td>";
                    echo "<td>$z[$is]</td>";
                    
            
            
            
            ?>
        
        
       
    </tr>
    <tr>
            <?php 

                $i=2;

                    echo "<td>$x[$i]</td>";
                    echo "<td>$y[$i]</td>";
                    echo "<td>$z[$i]</td>";
                    
            
            
            
            ?>
        
        
       
    </tr>
</table>
    </body>
</html>