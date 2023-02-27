<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Displaying On Task3 Which We Got From Task1 Html Form</title>
    <style>
        table {
            width: 50%;
        }

        th,
        td {
            border: 1px solid #edafb8;
            background-color: #f7e1d7;
            color: #4a5759;
        }
    </style>


<body>

    <?php
    class Person
    {
        public $name;
        public $email;

        public function setName($name)
        {
            $this->name = $name;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getEmail()
        {
            return $this->email;
        }
    }
    $person1 = new Person;
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        //setting data from our task1 html form and setting them using setter method
        $person1->setName($name);
        $person1->setEmail($email);
        //Storing the data into variable using getter method
        $nameIs = $person1->getName();
        $personIs = $person1->getEmail();
    ?>
        <h2>Data Displaying On Task3 Which We Got From Task1 Html Form</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>

            </tr>
            <tr>
                <td><?php echo $nameIs ?></td>
                <td><?php echo $personIs ?></td>

            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>