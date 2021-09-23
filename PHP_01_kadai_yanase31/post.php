<html>

<head>
    <meta charset="utf-8">
    <style>
        /* .menu {
            background-color: #2FA6E9;
        } */
    </style>
    <title>プロレスに関するアンケート</title>
</head>

<body>
    <div class="menu">
        <h3>プロレスに関するアンケート</h3>
        <!-- <li><a href="index.php">index.php</a></li> -->
    </div>

    <form action="write.php" method="post">
        お名前: <input type="text" name="name"><br>
        Email: <input type="text" name="mail"><br>
        好きな団体:<input type="text" name="dantai"><br>
        好きなプロレスラー:<input type="text" name="wrestler"><br>
        ベストバウト:<input type="text" name="bestbout"><br>
        <input type="submit" value="送信">
    </form>
</body>

</html>
