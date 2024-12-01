<!DOCTYPE html>
<html>

<head>
    <title>AJAX Form Submission with Loader</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .loader {
            display: none;
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #3498db;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <form id="studentForm">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="studentName" required>
                </td>
            </tr>
            <tr>
                <td>Roll</td>
                <td>
                    <input type="text" name="roll" required>
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" name="mobile" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" id="submit_button">Submit</button>
                    <div class="loader" id="loader"></div>
                </td>
            </tr>
        </table>
    </form>

    <script>
        $(document).ready(function () {
            $("#studentForm").on("submit", function (e) {
                e.preventDefault();  // Prevent default form submission
                var formData = $(this).serialize();  // Serialize form data

                // Show loader and disable the button
                $("#submit_button").prop("disabled", true).text("Saving...");
                $("#loader").show();

                $.ajax({
                    url: "data_save.php",
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Restore the button and hide loader
                        $("#submit_button").prop("disabled", false).text("Submit");
                        $("#loader").hide();

                        // Handle response (you can display a success message)
                        alert(response);  // Replace with your success handling logic
                    },
                    error: function () {
                        // Restore the button and hide loader on error
                        $("#submit_button").prop("disabled", false).text("Submit");
                        $("#loader").hide();
                        alert("An error occurred while saving data.");
                    }
                });
            });
        });
    </script>
</body>

</html>
