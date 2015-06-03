<html>
<head> 
      
        <title></title>
        <meta htpp-equiv="Content-Type" content="text/html; charset=utf-8"> 
    </head>
    <body>
        <table border="1">
        <theder>
               <th>ID</th>
               <th>Name</th>
               <th>email</th>
                         
        </theder>
        <tbody>

<?php
    if(count($userAll)){
                foreach ($userAll as $row){
                    echo "<tr>
                          <td>$row->userweb_id</td>
                          <td>$row->name</td>
                          <td>$row->email</td>
                          
             
                          </tr>";

                } 
    }
    ?>
    </tbody>
        </table>
    
    
    
    
   
        </body>
</html>