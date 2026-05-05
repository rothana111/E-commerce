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

   a{
      text-decoration: none;
      color: white;
      background: green;
      padding: 6px 10px;
      border-radius: 5px;
   }

   table {
      width: 100%;
      margin-top: 15px;
      border-collapse: collapse;
      background: white;
   }

   th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
   }

   th {
      background: #333;
      color: white;
   }

   .edit {
      background: rgb(9, 111, 48);
      padding: 6px;
      border-radius: 4px;
   }

   .delete {
      background: rgb(9, 111, 48);
      padding: 5px;
      border-radius: 4px;
   }
   .back{
      color: rgb(58, 57, 57);
      background: #ffffff;
   }
   .back:hover {
      background: #f0f0f0;
   }
    </style>
</head>
<body>
   <a class="back"  href="/">← Back </a>

<h2>Payroll List</h2>
<a class="add" href="/payroll/create"> + Add Payroll</a>
<table border="1">
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Salary</th>
      <th>Bonus</th>
      <th>Deduction</th>
      <th>Action</th>
   </tr>

   @foreach($payrolls as $p)
   <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->employee_name }}</td>
      <td>{{ $p->salary }}</td>
      <td>{{ $p->bonus }}</td>
      <td>{{ $p->deduction }}</td>
      <td>
          <a class="edit" href="/payroll/edit/{{ $p->id }}">Edit</a> |
          <a class="delete" href="/payroll/delete/{{ $p->id }}">Delete</a>
      </td>
   </tr>
   @endforeach
</table>
   
</body>
</html>