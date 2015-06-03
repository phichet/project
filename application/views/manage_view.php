<html>
    <head>
        <title></title>
        <meta htpp-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
         <table border="1">
        <theder>
               <th>Manage ID</th>
               <th>Res ID</th>
               <th>User ID</th>
               <th>Userweb ID</th>
                         
        </theder>
        <tbody>
<?php
    if(count($manageAll)){
                foreach ($manageAll as $row){
                    echo "<tr>
                          <td>".$row['manage_id']."</td>
                          <td>".$row['res_id']."</td>
                          <td>".$row['user_id']."</td>
                          <td>".$row['userweb_id']."</td>
                          
             
                          </tr>";

                } 
    }
    ?>
    </tbody>
        </table>
        
        
        
        
        
    </body>
</html>

