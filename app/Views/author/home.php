<html>
<head>
	<title>Author Home</title>
</head>
<body>
    <h1>Author Home</h1>
    <p>Hello <?= $nama_depan . " " . $nama_tengah . " " . $nama_belakang ?>!</p>
    <p>You can see your account information here.</p>
    <p>
        <a href="<?php echo base_url(); ?>/index.php/verify/logout">Logout</a>
    </p>
    <img src="https://pbs.twimg.com/media/EF520ykVAAAt4-V.jpg:large" alt="Flowers in Chania" width="460" height="345">
</body>
</html>