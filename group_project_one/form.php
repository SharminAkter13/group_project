<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>OOP Form Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      gap: 20px;
      margin: 30px;
    }
    form {
      width: 250px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    table, th, td {
      border: 1px solid #999;
      border-collapse: collapse;
      padding: 8px;
    }
  </style>
</head>
<body>

  <form id="dataForm">
    <h3>Add Person</h3>
    <label>Name: <input type="text" id="name" required></label>
    <label>Age: <input type="number" id="age" required></label>
    <button type="submit">Add</button>
  </form>

  <table id="dataTable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <script src="app.js"></script>
</body>
</html>
