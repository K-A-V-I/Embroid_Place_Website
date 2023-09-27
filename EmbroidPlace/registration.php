<?php    
//include connect.php page for database connection
Include('connect.php')

if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
echo "please fill the empty field.";
}
else
{
$sql="insert into student(name,email,password,repassword) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."')";
$res=mysql_query($sql);
if($res)
{
echo "Record successfully inserted";
}
else
{
echo "There is some problem in inserting record";
}
}
}
?>