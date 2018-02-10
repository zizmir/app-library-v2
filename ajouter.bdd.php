<?
function allAuthor()
{
	$user = 'root';
	$pass = '';
	$your_db = 'bdd-library';

	try {
		$db = new PDO('mysql:host=localhost;dbname='.$your_db.';charset=UTF8', $user, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch( PDOException $e) {
	    echo 'Échec lors de la connexion : ' . $e->getMessage();
	}

	$sql = "SELECT nom , id FROM auteur";
	$data = $db->query($sql);

	return $data;

}

function addAuthor(){
	$user = 'root';
	$pass = '';
	$your_db = 'bdd-library';

	// params form
	$title = $_POST['title'];
	$describe = $_POST['describe'];
	$body = $_POST['body'];
	$author = $_POST['author'];


	try {
		$db = new PDO('mysql:host=localhost;dbname='.$your_db.';charset=UTF8', $user, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch( PDOException $e) {
	    echo 'Échec lors de la connexion : ' . $e->getMessage();
	}

	$statement=$db->prepare("INSERT INTO articles (`titre`, `description`, `corps`, `id_auteur`) VALUES (:title, :describe, :body, :author)");

	$statement->bindValue(':title',$title);
	$statement->bindValue(':describe',$describe);
	$statement->bindValue(':body',$body);
	$statement->bindValue(':author',$author, PDO::PARAM_INT);
	$statement->execute();

}
	
?>