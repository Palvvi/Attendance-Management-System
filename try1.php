<?php   
                    $currentPage= $_SERVER['SCRIPT_NAME']; 
                     
                     // To Get the directory name in  
                     // which file is stored. 
                     $currentPage = substr($currentPage, 8); 
                     
                     // To Show the Current Filename on Page. 
                     echo htmlspecialchars($currentPage);
        ?>
        <script>
          var i=$currentPage;
          console.log(path);
        </script>

