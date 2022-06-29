<title>Dashboard Admin</title>
<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
else
{
    header("Location: login.php");
}
?>

<h1 class=h1>Dashboard Admin</h1>
<table>
    <tr>
        <td scope="row"><strong>Prénom</strong></td>
        <td><strong>Nom</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Message</strong></td>
    </tr>

<?php
$user = "u801021231_liamcariou";
$pass = "ftp21pir@teFTP21";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=u801021231_liamcariou', $user, $pass);
    foreach($dbh->query('SELECT * FROM `liamcariou`') as $row) {
        $row = array_map("utf8_encode", $row);

        $name = $row['prenom'];
        $lastname = $row['nom'];
        $email = $row['email'];
        $message = $row['msg'];
        echo "<tr> 
        <td scope='row'>$name</td>
        <td>$lastname</td>
        <td>$email</td>
        <td>$message</td>
        </tr>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
</table>
<div id=logoutbutton>
    <a href="logout.php" id="logout">Se déconnecter <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
</div>