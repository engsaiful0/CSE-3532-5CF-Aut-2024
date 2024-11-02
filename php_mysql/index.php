<html>

<head>

</head>

<body>
    <form action="data_save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input name="name" id="nameId">
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input name="mobile" id="mobileId">
                </td>
            </tr>
            <tr>
                <td>Department</td>
                <td>
                    <select name="department" id="departmentId">
                        <option>CSE</option>
                        <option>EEE</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>