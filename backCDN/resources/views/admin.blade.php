<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .image-container {
            text-align: center;
        }

        .image {
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0.2; }
            100% { opacity: 1; }
        }

        .message {
            color: #ff6600;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            display: none;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="your-image.jpg" class="image">
        </div>
        <div class="message" id="message">Un message important !</div>
    </div>

    <script>
        const messageElement = document.getElementById('message');

        setTimeout(() => {
            messageElement.style.display = 'block';
        }, 3000); // Afficher le message après 3 secondes

        setTimeout(() => {
            window.location.href = "{{ route('filament.auth.login') }}";
        }, 5000);
    </script>
</body>
</html>