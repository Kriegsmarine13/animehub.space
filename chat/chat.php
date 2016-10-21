<?
//BD functions
function getQuery($query){
$res = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_row($res);
$var = $row[0];
return $var;
}

function setQuery($query) {
	$res = mysql_query($query) or die(mysql_error());
	return $res;
}

//Connecting to DB
@mysql_connect('localhost', 'redisk20_main', 'zxc651w8', 'redisk20_main') or die("Can't connect to MySQL.");
@mysql_select_db('redisk20_main') or die("Can't connect to DB");
@mysql_query('SET NAMES utf8');

switch($_GET["event"]){
	//Sending messages
	case "get":
	//How many mesages to send
	$max_message = 60;
	//Total messages count
	$count = getQuery("SELECT COUNT('id') FROM `chat`;");
	//Max message ID
	$m = getQuery("SELECT MAX(id) FROM `chat` WHERE 1");


	$mg = $_GET['id'];
	//Generating how many messages client miss
	if($mg == 0){$mg = $m-$max_message;}
	if($mg < 0){$mg = 0;}
	$msg = array();

	//If client lacks messages, sending him those
	if($mg < $m){
		//Taking lack from base\
		$query = "SELECT * FROM `chat` where `id`>'.$mg.' AND `id` <= '.$m' ORDER BY `id`";
		$res = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($res)){
			//Adding messages to array
			$msg[] = array("id"=>$row['id'], "name"=>$row['name'], "msg"=>$row['text']);
		}		
	}
	//Sending JSON with data to client
	echo json_encode($msg);
	break;
	
	case "set":
	//Get name
	$name = htmlspecialchars($_GET['name']);
	//Get text 
	$msg = htmlspecialchars($_GET["msg"]);
	//Saving text
	setQuery("INSERT INTO `chat` (`id`, `name`, `text`) VALUES (NULL,'".mysql_real_escape_string($name)."', '"."'
}