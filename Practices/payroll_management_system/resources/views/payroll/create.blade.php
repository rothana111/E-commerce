<!DOCTYPE html>
<html>
<head>
    <title>Add Payroll</title>

    <style>
        body {
            font-family: Arial;
            background: #eef2f3;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: auto;
            background: white;
            padding: 50px;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            width: 300px;
            margin-left: 10px;
            border-radius: 6px;
            padding: 10px;
            background: green;
            color: white;
            border: none;
        }
    </style>
</head>

<body>

<h2>Add Payroll</h2>

<form action="/payroll/store" method="POST">
@csrf

Employee Name
<input type="text" name="employee_name">

Salary
<input type="number" name="salary">

Bonus
<input type="number" name="bonus">

Deduction
<input type="number" name="deduction">

<button type="submit">Save</button>

</form>

</body>
</html>