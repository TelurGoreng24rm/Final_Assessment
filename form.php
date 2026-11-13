
<form method="post">

    <label for="">Student Name :</label>
    <input type="text" name="student_name" value="<?php echo $student_name ?>">
    <br><br>

    <label for="">Matric No. :</label>
    <input type="text" name="student_matric" value="<?php echo $student_matric ?>">
    <br><br>

    <label for="">Subject Name :</label>
    <input type="text" name="subject_name" value="<?php echo $subject_name ?>">
    <br><br>

    <label for="">Subject Code :</label>
    <input type="text" name="subject_code" value="<?php echo $subject_code ?>">
    <br><br>

    <label for="">Test 1 :</label>
    <input type="text" name="test_1" placeholder="Out of 20" value="<?php echo $test_1 ?>">
    <br><br>

    <label for="">Test 2 :</label>
    <input type="text" name="test_2" placeholder="Out of 30" value="<?php echo $test_2 ?>">
    <br><br>

    <label for="">Final :</label>
    <input type="text" name="final" placeholder="Out of 50" value="<?php echo $final ?>">
    <br><br>


    <input type="submit" name="submit" value="Submit" width="200px" >

</form>

<style>
    label {
        display: inline-block;
        width: 100px;
    }

    style {
        width: 200px;
    }
</style>
