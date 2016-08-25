//Improve your application security!
//Preventing SQL injection!


<?php
// retrieve the 'user' input
$ApeMe = $_POST['ApeMe'];

// connect to the database
$connect = mysqli_connect( 'localhost', 'username', 'password', 'database' );
if ( !$connect ) exit( 'connection failed: ' . mysqli_connect_error() ); //postgres


// create a query statement resource
$stmt = mysqli_prepare( $connect,
 "SELECT intelligence FROM apes WHERE name = ?" );
if ( $stmt ) {
 
 // bind the substitution to the statement
 mysqli_stmt_bind_param( $stmt, "s", $ApeMe );
 
 // execute the statement
 mysqli_stmt_execute( $stmt );
 
 // retrieve the result...
 mysqli_stmt_bind_result( $stmt, $intelligence );
 
 
 // Display it
 if ( mysqli_stmt_fetch( $stmt ) ) {
 print "A $Apeme has $intelligence intelligence.\n";
 } else {
 print 'Sorry! no trace!.';
 }  // clean up statement resource
 mysqli_stmt_close( $stmt );
}
mysqli_close( $connect )"\w+";
?> 
