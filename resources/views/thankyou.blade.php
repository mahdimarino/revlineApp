<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <style>
        /* CSS Styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
            color: #fff;
            overflow: hidden;
        }

        .thank-you-container {
            text-align: center;
            max-width: 600px;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            animation: fadeIn 1s ease-in-out;
        }

        .thank-you-container h1 {
            font-size: 3em;
            margin: 0;
            animation: bounceIn 1.2s ease;
        }

        .thank-you-container p {
            font-size: 1.2em;
            margin-top: 10px;
            opacity: 0.8;
        }

        .thank-you-container button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: #ff6f61;
            color: #fff;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .thank-you-container button:hover {
            transform: scale(1.1);
            background-color: #ff8577;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your submission has been received. We will get back to you shortly.</p>
        <button onclick="goBack()">Go Back</button>
    </div>

    <script>
        // JavaScript Function
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>