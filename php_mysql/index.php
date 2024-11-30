<html>

<head>

</head>

<body>
    <form action="data_save.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input name="name" oninput="" id="nameId">
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
                    <select onchange="club_load(this.value)" name="department" id="departmentId">
                        <option>CSE</option>
                        <option>EEE</option>
                        <option>ME</option>
                        <option>CE</option>
                    </select>
                </td>
            </tr>
           
            <tr>
                <td>Club</td>
                <td>
                    <select name="club_id" id="club">
                        <option value="">Select Club</option>
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

    <?php
    include("view.php");
    ?>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function club_load(department) {
        if (department) {
            $.ajax({
                url: 'load_clubs.php',
                type: 'POST',
                data: {
                    department: department
                },
                dataType: 'json',
                success: function(response) {
                    let clubDropdown = $('#club');
                    clubDropdown.empty(); // Clear previous options
                    clubDropdown.append('<option value="">Select Club</option>'); // Default option
                    $.each(response, function(index, club) {
                        clubDropdown.append('<option value="' + club.id + '">' + club.club_name + '</option>');
                    });
                },
                error: function() {
                    alert('Error loading clubs. Please try again.');
                }
            });
        } else {
            $('#club').empty().append('<option value="">Select Club</option>');
        }
    }
</script>