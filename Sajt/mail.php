<html>
   
   <head>
   </head>
   
   <body>    
      <?php
         $to = "stefke2002@gmail.com";
         $subject = "Komentar sa sajta";
         
         $message = "Ime i Prezime: " . $_GET["name"] . "\n E-mail: " . $_GET["email"] . "\n Komentar: " . $_GET["comment"];
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
         
		 //Ovde staviti text kada se uspesno posalje mail
		 echo "Message sent successfully...";
         
		 
		 }else {
         
		 //Ovde staviti kada se nesto zabagovalo pa se nije poslalo
		 echo "Message could not be sent...";
         
		 
		 }
      ?>
   </body>
</html>