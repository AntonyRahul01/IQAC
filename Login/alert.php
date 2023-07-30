<html>

<body>
    <?php
    session_start();
    if (isset($_SESSION['alert']) && $_SESSION['alert'] !== '') {
    ?>
        <script type="text/javascript">
            window.alert("<?php echo $_SESSION['alert']; ?>");
        </script>
    <?php
        $_SESSION['alert'] = ''; // Reset the alert after displaying it
    }
    ?>
</body>

</html>