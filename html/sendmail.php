<html>

<style>
*{

	background-image:url("https://previews.123rf.com/images/peshkova/peshkova1803/peshkova180300386/96821432-creative-html-background-coding-programming-and-technology-concept-double-exposure.jpg");
}
#em1,#sb1,#msg1  {
	margin-top:10px;
	height:40px; width:300px;
    border: 1px solid #e0e0e0;
	margin-right:25%;
	margin-left:25%;
    width: 50%;
	padding: 10px;
	color:white;
	border-radius:15px;'
}
#bla {
	color:white;
	margin-right:45%;
	margin-left:45%;
}
#bt1{

	height:40px; width:100px; 
   border: 0px;
    padding: 10px;
    text-align: center;
    width: 100%;
	border-radius:15px;
    background: #fece0c;
    color: #332902;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer;'
	margin-right:25%;
	margin-left:25%;
    width: 50%;
}
#bt2{

	height:40px; width:100px; 
	border: 0px;
    padding: 10px;
    text-align: center;
    width: 100%;
	border-radius:15px;
    background: #fece0c;
    color: #332902;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer;'
	margin-right:38%;
	margin-left:38%;
    width: 25%;
}
#bt3{
	height:40px; width:100px; 
	border: 0px;
    padding: 10px;
    text-align: center;
    width: 100%;
	border-radius:15px;
    background: #fece0c;
    color: #332902;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer;
	margin-right:38%;
	margin-left:38%;
    width: 25%;
}
</style>
<head> <title>Email Sender </title> </head>
</br> </br> </br>
<h2 id='bla'>Send Mail</h2>
<div id='peremail'>
 <form method='post'>
<input type='text' id='em1' name='emaili' placeholder='email'></br>
<input type='text' id='sb1' name='subjecti' placeholder='subject'></br>
<input type='text' id='msg1' name='messagee' placeholder='message'></br> </br>
<button type='submit' id='bt1' name='buttoni'>Submit</button> </br> </br> </br>
<button type='submit' onclick='openphpini()' id='bt2'>Konfiguro PHP.ini</button></br> </br> </br>
<button type='submit' onclick='opensendmail()' id='bt3'>Konfiguro SENDMAIL.ini</button>

</form>
</div>
</html>
<?php
try {
if (isset($_POST['buttoni'])){
	if(mail($_POST['emaili'],$_POST['subjecti'],$_POST['messagee'],'From: email@gmail.com')){
		echo '<script type="text/javascript">';
		echo ' alert("Emaili u dergua!")';  //not showing an alert box.
		echo '</script>';
		}
	else	 {
		echo '<script type="text/javascript">';
		echo ' alert("Emaili nuk u dergua!")';  //not showing an alert box.
		echo '</script>';
			}
	}
}
catch (Exception $e)
{
	echo ($e.getMessage());

}

//mail('@gmail.com','Test Subject','Hello there!','From: mergograiqevci@gmail.com');

?>
<?php
/*Per cookies ne array
try{
//$_COOKIE['mergo']=$_POST['buttoni'];
if(isset($_POST['buttoni'])){
$arr = array();
array_push($arr,'Emaili i fundit i derguar </br>');
if (strlen($_POST['emaili'])>0){
array_push($arr,'Email:'.$_POST['emaili'] .'</br>');
	}
if (strlen($_POST['subjecti'])>0){
array_push($arr,'Subject:'.$_POST['subjecti'].'</br>');
	}
if (strlen($_POST['messagee'])>0){
array_push($arr,'Message:'.$_POST['messagee'].'</br>');
	}	
$arraystring=implode(" ",$arr);
setcookie("Login",$arraystring,time()+24*3600);
foreach ($arr as $shfaq) {
    //echo ("'<h2 id='mergo'>' .$shfaq ." " .'</h2></br>'");4
	echo ("<h2 id='mg' style='color:white;' >" .$shfaq ." ". "</h2> </br>");
		}
	}
else {
	echo ("Nuk keni ende te dhena");
	}	
}
catch(Exception $e){
	echo ($e.getMessage());
}
*/
?>
<script>

  function openphpini(){
	  window.open("openphpini.ini"); 
  }
function opensendmail(){
	
	 window.open("sendmail.ini"); 
}
</script>
