<?php
include("../includes/layouts/header.php");
?>
    <div id="main">
        <nav id="navigation">
            &nbsp;
        </nav>
        <div id="page">
            <h2>Admin Menu</h2>
            <p>Welcome to the admin area</p>
            <ul>
                <li><a href="manage_content.php">Manage Website Content</a></li>
                <li><a href="manage_admins.php">Manage Admin Users</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
<?php
include('../includes/layouts/footer.php');
?>