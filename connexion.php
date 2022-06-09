<?php
       
       
       $conn = mysqli_connect('localhost', 'root','','mglsi_news');
       $sql = "select * from article ORDER BY dateCreation DESC";
       $result = mysqli_query($conn, $sql);
       
         






   //      // Créer la connection
   //      $conn = mysqli_connect('localhost', 'root','','mglsi_news');

   //      // Vérifier la connection
   //      if (!$conn) {
   //      die("Connection failed: " . mysqli_connect_error());
   //      }
   //     // echo "Connected successfully";

   //      //Écrire la requête
   //   $sql = "select * from article ORDER BY dateCreation DESC ";

   //      //Faire une requête et recupérer le résultat
   //   $result = mysqli_query($conn, $sql);

   //      //Récuperer les lignes du résultat dans un tableau
   //   $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

   //              // print_r($rows);
        
   //      // if($result->num_rows>0){
   //      //     while($row=$result->fetch_assoc())
   //      //     {
   //      //          $titre=$row['titre'].'<br>';
   //      //          $contenu=$row['contenu'].'<br><br><br>';
            
   //      //     }
   //      // }


        
   //      if (!$result) {
   //          $message  = 'Requête invalide : ' . mysql_error() . "\n";
   //          $message .= 'Requête complète : ' . $query;
   //          die($message);
   //      }

   //      mysql_free_result($result);

?>