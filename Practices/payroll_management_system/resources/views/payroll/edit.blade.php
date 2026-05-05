<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    body {
        font-family: Arial;
        background: #f4f6f8;
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
        padding: 10px;
        background: rgb(14, 128, 54);
        border-radius: 5px;
        color: white;
        border: none;
    }
    </style>
</head>
<body>
        <h2>Edit Payroll</h2>

        <form action="/payroll/update/{{ $payroll->id }}" method="POST">
            @csrf
            Employee Name:
            <input type="text" name="employee_name" value="{{ $payroll->employee_name }}"><br><br>

            Salary:
            <input type="number" name="salary" value="{{ $payroll->salary }}"><br><br>

            Bonus:
            <input type="number" name="bonus" value="{{ $payroll->bonus }}"><br><br>

            Deduction:
            <input type="number" name="deduction" value="{{ $payroll->deduction }}"><br><br>

            <button type="submit">Update</button>
        </form>

</body>
</html>