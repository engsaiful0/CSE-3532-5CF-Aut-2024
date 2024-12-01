<html>

<body>
    <form action="data_save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" name="mobile" required>
                </td>
            </tr>
            <tr>
                <td>Department</td>
                <td>
                    <input type="text" name="department" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit_button" value="submit">
                </td>
            </tr>

        </table>
    </form>
    <?php

    include 'view.php';


    ?>
</body>

</html>