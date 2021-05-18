<?PHP

include_once "../Controller/reclamationC.php";

if (isset($_GET["id_user"])) {

    $RC=new reclamationC();
    $RC->supprimerReclamation($_GET["id_user"]);
    header('Location:reclamations.php');

}
else{
    echo "NON";
}

?>