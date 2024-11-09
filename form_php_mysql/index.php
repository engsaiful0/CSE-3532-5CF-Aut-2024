<html>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="student_name" placeholder="Enter your name">
                </td>
            </tr>
            <tr>
                <td>Matric No</td>
                <td>
                    <input type="text" name="matric_no" placeholder="Enter your Matric No">
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" name="mobile" placeholder="Enter your mobile">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" placeholder="Enter your Email">
                </td>
            </tr>
            <tr>
                <td>Department</td>
                <td>
                    <select type="text" name="department">
                    <option>
                            Select a department
                        </option>
                        <option>
                                EEE
                        </option>
                        <option>
                                CSE
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save" name="submit_button">
                </td>
            </tr>
        </table>
    </form>
    <?php 
    //print_r($_POST);
   if(isset($_POST['student_name']))
    {
        $student_name=trim($_POST['student_name']);
        $matric_no=trim($_POST['matric_no']);
        $mobile=trim($_POST['mobile']);
        $email=trim($_POST['email']);
        $department=trim($_POST['department']);
        //print_r($department);

        $connnection=mysqli_connect('localhost','root','','5cf_aut_2024');
        mysqli_query($connnection,"INSERT INTO profile(student_name,matric_no,mobile,email,department) values('$student_name','$matric_no','$mobile','$email','$department')");


    }
    ?>
</body>

</html>