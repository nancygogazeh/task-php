<?php
$username="root";
$password="";
$database=new PDO("mysql: host=localhost ;dbname=test_database; charset=utf8; ",$username,$password);



if($database){


echo " the connection is success to database";


}

$addData=$database->prepare("INSERT INTO articles(title , content ,time , date) 
VALUES('test title','test content','9:10:50' , '2020-09-12')");
$addData ->execute();


// $addB=$database->prepare("INSERT INTO articles(title , content  ,time , date) 
// VALUES('new','new content','4:05:58' , '2022-07-10')");



// $addB ->execute();



// $removeItem = $database ->prepare("DELETE FROM articles WHERE  id=3" );
// $removeItem ->execute();



// $get_content = $database ->prepare("SELECT * FROM articles WHERE id=1" );
// $get_content ->execute();
?>