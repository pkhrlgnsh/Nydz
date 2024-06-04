<?php
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="your-image-url.jpg" alt="Company Logo">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-section">
            <div class="contact-form">
                <h2>Get in Touch</h2>
                <form action="/submit_form" method="post">
                    <p>Your Name (required)<br>
                        <input type="text" name="your-name" required>
                    </p>
                    <p>Your Email (required)<br>
                        <input type="email" name="your-email" required>
                    </p>
                    <p>Subject<br>
                        <input type="text" name="your-subject">
                    </p>
                    <p>Your Message<br>
                        <textarea name="your-message" rows="5" required></textarea>
                    </p>
                    <p>
                        <input type="submit" value="Send">
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <img src="contact-image.jpg" alt="Contact Image">
            </div>
        </div>
        <div class="social-media">
            <a href="https://www.facebook.com" target="_blank">F</a>
            <a href="https://www.twitter.com" target="_blank">T</a>
            <a href="https://www.instagram.com" target="_blank">I</a>
            <a href="https://www.linkedin.com" target="_blank">L</a>
        </div>
    </div>
</body>
</html>
?>