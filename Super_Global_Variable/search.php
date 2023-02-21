<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
</head>

<body>
    <h1>Search Student Name</h1>
    <form action="search.php" method="get">
        <label for="student">Search by title:</label>
        <input type="text" name="student" id="student">
        <button type="submit">Search</button>
    </form>
    <br />
    <?php
    //check if value is set or not
    $query = isset($_REQUEST['student']) ? $_REQUEST['student'] : " ";
    echo "user is searched for :{$query}";
    echo "<br/>";
    echo "<br/>";

    $result = search_item($query);
    function search_item($query)
    {
        $db = array("asif", "sazzad", "zitu", "zisan");
        $search = array_search($query, $db);  //return kore index jatatte value ta paise.
        if ($search !== false) {
            echo "{$query} is found at $search";
        } else {
            echo "{$query} is not found in our database";
        }
    }
    ?>

</body>

</html>