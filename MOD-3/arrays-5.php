<?php

   // Ordenar arrays:

   $book = [
      'title' => '1984',
      'author' => 'George Orwell',
      'editorial' => 'DEBOLSILLO'
   ];

   $book1 = $book2 = $book3 = $book;

   var_dump( $book );

   echo "<br><br>";

   /* no mantiene la asociacion llave/valor
      ordena el valor por numero y despues de la A - Z
   */
   sort( $book1 );
   var_dump ( $book1 );

   echo "<br><br>";

   /* mantiene la asociacion llave/valor
      ordena el valor por numero y despues de la A - Z
   */
   asort( $book3 );
   var_dump ( $book3 );

   echo "<br><br>";

   /* mantiene la asociacion llave/valor
      ordena la llave de la A - Z y despues por numero
   */
   ksort( $book2 );
   var_dump ( $book2 );