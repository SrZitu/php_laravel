<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Table Example</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>25</td>
        </tr>
        <tr>
          <td>Sarah</td>
          <td>30</td>
        </tr>
        <tr>
          <td>Mike</td>
          <td>28</td>
        </tr>
      </tbody>
    </table>

    <h2>Add a new person</h2>
    <form id="myForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age"><br>

      <input type="submit" value="Submit">
    </form>

    <script>
      const form = document.getElementById('myForm');
      const tableBody = document.querySelector('tbody');

      form.addEventListener('submit', (event) => {
        event.preventDefault(); // prevent default form behavior

        const name = form.elements['name'].value;
        const age = form.elements['age'].value;

        // create a new table row and cells for the new person
        const newRow = document.createElement('tr');
        const nameCell = document.createElement('td');
        const ageCell = document.createElement('td');

        // set the text content of the cells to the user input
        nameCell.textContent = name;
        ageCell.textContent = age;

        // append the cells to the new row, and the row to the table body
        newRow.appendChild(nameCell);
        newRow.appendChild(ageCell);
        tableBody.appendChild(newRow);

        // reset the form inputs
        form.reset();
      });
    </script>
  </body>
</html>
