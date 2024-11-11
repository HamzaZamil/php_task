<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>

</head>

<body>

    <form method="POST">
        Name: <input type="text" name="name" required><br>
        E-mail: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Submit">
    </form>

    <br>

    <button onclick="toggleTable()">click to see the table</button>

    <br>

    <br>
    <?php if (isset($_SESSION['users']) && count($_SESSION['users']) > 0): ?>
    <h2>Submitted Users:</h2>
    <table id="usersTable" border="1" style="display: none;">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php foreach ($_SESSION['users'] as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['name']);?></td>
            <td><?php echo htmlspecialchars($user['email']);?></td>
            <td><?php echo htmlspecialchars($user['password']);?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <script>
    function toggleTable() {
        var table = document.getElementById("usersTable");
        if (table.style.display === "none") {
            table.style.display = "table";
        } else {
            table.style.display = "none";
        }
    }
    </script>
</body>

</html>