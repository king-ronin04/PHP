<form action="sendmail.php" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"required />
    </div>
    <br>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"required />
    </div>
    <br>

    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="8" placeholder="Your message here..." required></textarea>
    </div>
    <br>

    <button type="submit">Send</button>
</form>
