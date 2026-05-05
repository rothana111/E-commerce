<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        background: white;
        padding: 25px;
        width: 350px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 15px;
        color: #333;
    }

    label {
        font-size: 14px;
        color: #555;
    }

    input, textarea {
        width: 94%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
    }

    input:focus, textarea:focus {
        border-color: #6c63ff;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #474748;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    button:hover {
        background: #3a3a3a;
    }
</style>
</head>

<body>

<div class="card">
    <h1>Contact Us</h1>

    <form action="/contact" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Message</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

</body>
</html>