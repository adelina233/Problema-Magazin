<?php


$conn = mysqli_connect("localhost","root","","magazin");

  
$nume_produs = $_POST['nume_produs'];
$pret_nou = $_POST['pret_nou'];

// Modificare preț în baza de date
$sql = "UPDATE produse 
        SET pret = $pret_nou
        WHERE nume_produs = '$nume_produs'";
        
mysqli_query($conn, $sql);


// Afișare produse
$result = mysqli_query($conn, "SELECT * FROM produse");
while($row = mysqli_fetch_assoc($result)) {
    echo "Produs: " . $row['nume_produs'] . ", Preț: " . $row['pret'] ."<br>";
}

?>