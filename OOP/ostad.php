

echo  "<table>";
        echo  "<tr>";
        echo " <th>Name</th>";
        echo  "<th>Email</th>";

        echo "</tr>";
        echo "<tr>";
        echo "<td> $nameIs </td>";
        echo "<td> $personIs </td>";

        echo "</tr>";
        echo " </table>";


        if (isset($_POST['name']) && isset($_POST['email']))  {
        $name = $_POST['name'];
        $email = $_POST['email'];
        //setting data from our task1 html form and setting them using setter method
        $person1->setName($name);
        $person1->setEmail($email);
        //Storing the data into variable using getter method
        $nameIs = $person1->getName();
        $personIs = $person1->getEmail();
        ?>
        <h2>Data Displaying Which We Got From Task1 Html Form</h2>
          <table>
        <tr>
            <th>Name</th>
            <th>Email</th>

        </tr>
        <tr>
            <td><?php echo $nameIs ?></td>
            <td><?php echo $personIs ?></td>

        </tr>
    </table