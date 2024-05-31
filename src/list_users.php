<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <center>
        <h1>
           LIST USERS 
        </h1>
    </center>
    <table id="user-table" class="table table-striped">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Status</th>
                <th>Foto</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Samir Alih</td>
                <td>example@example.com</td>
                <td>Active</td>
                <td>
                    <img src="icons/users.png" width="32">
                </td>
                <td>
                    <button class="btn btn-danger delete-btn" onclick="deleteRow(this)">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <script>
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>