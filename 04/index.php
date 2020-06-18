<?php
ini_set("display_errors",true);
error_reporting(E_ALL ^ E_NOTICE);
?>

<html>  
  <head> 
    <script src="lib/jquery.min.js"></script>  
    <link rel="stylesheet" href="lib/bootstrap.min.css" />  
    <script src="lib/jquery.dataTables.min.js"></script>  
    <script src="lib/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="lib/dataTables.bootstrap.min.css" />  
    <script src="lib/bootstrap.min.js"></script> 

    <title>Names</title>  
       
    <style>  
      body {  
        margin:0;  
        padding:0;  
        background-color:#f1f1f1;  
      }         
    </style> 
  </head>  
  <body>             
    <div class="container box">  
      <h3 align="center">Person Names</h3><br />  
      <div class="table-responsive">  
      <br />  
        <table  class="table table-bordered table-striped">  
          <thead>
            <tr>  
              <td>vorname</td>
              <td>nachname</td>                                   
            </tr> 
          </thead>
          <tbody>
            <?php
              $xml = simplexml_load_file('files/adressen.xml');
              //var_dump($xml);
              foreach ($xml->Person as $person) {
            ?>
            <tr>
              <td><?php echo $person->vorname;?></td>
              <td><?php echo $person->nachname;?></td>
            </tr>
            <?php 
              } 
            ?>
          </tbody>               
        </table>  
      </div>  
    </div>   
  </body>  
      
</html>
    



      




 