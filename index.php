<?php
date_default_timezone_set("Asia/Jakarta");
$serverTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UTS Cloud Computing</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #1976d2;
            margin-bottom: 10px;
        }

        .box {
            background: white;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .time {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 10px;
            color: #388e3c;
        }

        p {
            font-size: 1rem;
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>UTS Cloud Computing</h1>
        <div class="time" id="jamRealTime"></div>
        <p>Simulasi Deployment Aplikasi di Kubernetes Menggunakan Image Publik</p>
    </div>

    <script>
        // Set waktu awal dari server
        let serverTime = new Date("<?php echo $serverTime; ?>");

        function updateClock() {
            serverTime.setSeconds(serverTime.getSeconds() + 1);
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };
            document.getElementById("jamRealTime").innerText = serverTime.toLocaleString("id-ID", options);
        }

        // Update setiap detik
        setInterval(updateClock, 1000);
        updateClock(); // Jalankan pertama kali
    </script>
</body>
</html>