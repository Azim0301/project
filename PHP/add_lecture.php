<?php
require_once("inc/verify_login.php");
require_once('inc/header-part.php');
require_once('inc/connection.php');
?>
</head>
<body>
    <?php require_once('inc/menu.php'); ?>
    <div class="heading">
        <div>
            <span>Lecture -> Add Lecture</span>
            <span><a href="lecture.php">BACK</a></span>
        </div>
    </div>
    <div class="container white-form">
        <form action="submit/insert_lecture.php" method ="post">
            <table id="input-table">
                <tr>
                    <td width='33%'>Teacher ID</td>
                    <td>
                        <select name="teacherid" id="teacherid" class="input-box" required>
                            <option value="">select</option>
                            <?php
                                $sql = "select id,name from teacher order by id desc";
                                $cmd = $db->prepare($sql);
                                $cmd->execute();

                                while($row = $cmd->fetch())
                                    {               
                                ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                <?php } //end of loop ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width='33%'>Subject ID</td>
                    <td>
                        <select name="subjectid" id="subjectid" class="input-box" required>
                            <option value="">select</option>
                            <option value="5">Basic Understanding</option>
                            <option value="6">Advance Understanding</option>
                            
                        </select>
                    </td>
                </tr> <tr>
                    <td width='33%'>Batch ID</td>
                    <td>
                        <select name="batchid" id="batchid" class="input-box" required>
                            <option value="">select</option>
                            <option value="5">8 TO 12</option>
                            <!-- <option value="6"></option> -->
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Duration (Minutes)</td>
                    <td>
                        <input type="number" name="duration" id="duration" class="input-box" required />
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>
                        <input type="number" name="amount" id="amount" class="input-box" required />
                    </td>
                </tr>
               <tr>
                    <td>Lecture Date</td>
                    <td>
                        <input type="date" name="lecturedate" id="lecturedate" class="input-box" required />
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" class="save">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="clear">
                            <i class="fa fa-trash"></i> clear all
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<?php
require_once('inc/footer.php');
?>