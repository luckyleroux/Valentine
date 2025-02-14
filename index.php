<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Valentine's Day!</title>
    <style>
        body {
            background-color: #f8e0ff;
            /* Light lavender background */
            overflow: hidden;
            /* Prevent scrollbars */
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center horizontally */
            min-height: 100vh;
            /* Ensure full viewport height */
        }

        h1 {
            color: #d9534f;
            /* Red heading */
            font-size: 3em;
            margin-bottom: 0.5em;
            /* Reduced margin */
        }

        .message {
            background-color: #fff;
            /* White message box */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            /* Responsive width */
            margin: 0 auto;
            /* Center the message box */
        }

        p {
            font-size: 1.2em;
            margin-bottom: 1.5em;
        }

        footer {
            margin-top: 2em;
            font-size: smaller;
        }

        .heart {
            position: absolute;
            width: 50px;
            /* Adjusted size */
            height: 45px;
            /* Adjusted size */
            animation: fall linear infinite;
            /* Start falling animation */
            opacity: 0.8;
            /* Slightly transparent */
            /* Use the heart shape CSS */
        }

        .heart::before,
        .heart::after {
            content: "";
            position: absolute;
            top: 0;
            width: 26px;
            /* Adjusted size */
            height: 40px;
            /* Adjusted size */
            border-radius: 50px 50px 0 0;
            background: #d9534f;
            /* Red */
        }

        .heart::before {
            left: 25px;
            /* Adjusted size */
            transform: rotate(-45deg);
            transform-origin: 0 100%;
        }

        .heart::after {
            left: 0;
            transform: rotate(45deg);
            transform-origin: 100% 100%;
        }

        @keyframes fall {
            0% {
                top: -45px;
                opacity: 0;
            }

            /* Start above viewport, fade in */
            50% {
                opacity: 1;
            }

            100% {
                top: 100vh;
                opacity: 0;
            }

            /* End below viewport, fade out */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Happy Valentine's Day!</h1>
        <img src="https://media.tenor.com/79v0g-m_720_-_/valentines-day-love.gif" alt="Valentine's Day GIF">
        <div class="message">
            <p>Sending you all my love and warmest wishes on this special day. May your Valentine's Day be filled with joy, laughter, and sweet moments. Whether you're celebrating with a loved one, friends, or family, I hope your day is as amazing as you are.</p>
            <p>Wishing you a day filled with love and happiness!</p>
        </div>
        <footer>Made with ❤️ by Ryan</footer>
    </div>

    <script>
        const numHearts = 50; // Number of hearts

        for (let i = 0; i < numHearts; i++) {
            const heart = document.createElement('div');
            heart.classList.add('heart');
            heart.style.left = Math.random() * 100 + 'vw'; /* Random horizontal position */
            heart.style.animationDelay = Math.random() * 2 + 's'; /* Random start delay */
            heart.style.animationDuration = Math.random() * 3 + 3 + 's'; /* Random duration */
            document.body.appendChild(heart);
        }
    </script>

</body>

</html>
