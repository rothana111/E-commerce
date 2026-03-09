<!DOCTYPE html>
<html>
<head>
  <title>Student Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 350px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      transition: border 0.3s;
    }

    input:focus {
      border-color: #007BFF;
      outline: none;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Student Registration Form</h2>

  <form method="POST" action="/student">
    @csrf

    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your full name">

    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email">

    <label>Age</label>
    <input type="number" name="age" placeholder="Enter your age">

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>