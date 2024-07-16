<?php   
    require_once('inc/header-part.php');
    ?>
<body>
    <?php require_once('inc/connection.php');?>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Course</span>
            <span><a href="add_course.php">Add Course</a></span>
        </div>
    </div>
    <div class="container">
        
        <?php require_once('inc/message.php'); ?>
        <table align="center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Fees</th>
                    <th>Duration</th>
                    <th>Detail</th>
                    <th width='15%'>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "select * from course order by id desc";
                    $cmd = $db->prepare($sql);
                    $cmd->execute();

                    while($row = $cmd->fetch())
                    {
                ?>
                <tr>
                    <td><?php echo $row ['id']; ?></td>
                    <td><?php echo $row ['title']; ?></td>
                    <td><?php echo $row ['fees']; ?></td>
                    <td><?php echo $row ['duration']; ?></td>
                    <td><?php echo $row ['description']; ?></td>
                    <td>
                        <a href="edit_course.php"><i class="fa fa-edit fa-2x"></i></a>
                        <a href="course-delete.php"><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                
                <?php
                    } //close while loop
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>