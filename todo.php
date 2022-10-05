<?php


$errors = "";

//connect to the database 


$db = mysqli_connect('localhost' ,'root','','todo');

if (isset($_POST['submit'])){

    $task = $_POST['task'];

    if (empty($task)){
        $errors = "You must fill in the task";
    }
    else{
        mysqli_query($db,"INSERT INTO tasks (task) VALUES ('$task')");
        header ('location: todo.php');
    }

    
}

///delete task

if (isset($_GET['del_task'])){
    $id = $_GET['del_task'];
    mysqli_query($db,"DELETE FROM tasks WHERE id = $id ");
    header ('location: todo.php');
}

$tasks = mysqli_query($db, "SELECT * FROM tasks");

?>
<html lang="en">
<head>
    <title>HTML Form</title>
    <link rel="stylesheet" type="text/css" href="">
<style>
    .heading {
width :500px;

text-align: center;
color: blanchedalmond;
background: rgb(98, 92, 162);
border: 2px solid wheat;
border-radius: 20px;

}

.form1{
width:50%;
margin :10px auto ;
padding: 10px;
text-align: center;
border: 2px solid rgb(98, 92, 162);
border-radius: px;

}


.task_btn{
    border-radius: 5px;
    border: 2px solid rgb(98, 92, 162);
    background: white;
    height: 40px;
  
}
.task_input{

    border-radius: 5px;
    border: 2px solid rgb(98, 92, 162);
    background: white;
    height: 40px;
    width: 200px;
    text-align: center;
}

    </style>
</head>
<body>

    <!-- 4. Create a To Do List Page . -->
    <h3> Four Question </h3>

    <div class="heading">
        <h2>To Do list appliccation with php and mysql </h2>

    </div>
    <form method="POST" action="todo.php" >
        <?php if (isset($errors)) { ?>

            <p ><?php  echo $errors;?></p>

        <?php }?>
        <input type="text" name="task" class="task_input">
        <button type="submit" class="task_btn" name="submit"> Add task </button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while($row = mysqli_fetch_array($tasks)) { ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td class="task"><?php echo $row['task']; ?></td>
                <td class="delete">
                    <a href="todo.php?del_task=<?php echo $row['id'];?>"> X </td>

            </tr>

            <?php  $i++;  } ?>
          
        </tbody>
    </table>


</body>
</html>