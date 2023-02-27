<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>First Phd</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />


  
 

<body>

    <div class="container">
        <h2>String Conversion Tool</h2>
        <div class="row">
            <div class="col-12 ">

                <form action="string_tool.php" method="post">
                    <br>
                    <br>
                    <label for="strings">Enter String:</label>
                    <input type="text" name="string">
                    <br>
                    <br>
                    <label for="input_function">Input Function:</label>
                    <select name="string_function" id="">
                        <option value="strlen">strlen</option>
                        <option value="strrev">strrev</option>
                        <option value="strtoupper">strtoupper</option>
                        <option value="strtolower">strlolower</option>
                        <option value="ucfirst">ucfirst</option>
                        <option value="ucwords">ucwords</option>
                        <option value="trim">trim</option>
                        <option value="str_repeat">Repeat 3 times</option>
                    </select>
                    <br>
                    <input type="submit" class="bg-success" value="submit">

                </form>

                <?php
                if (isset($_POST['string']) && isset($_POST['string_function'])) {
                    $string = $_POST['string'];
                    $string_func = $_POST['string_function'];

                    switch ($string_func) {
                        case 'strlen':
                            $result = strlen($string);
                            echo $result;
                            break;
                        case 'strrev':
                            $result = strrev($string);
                            echo $result;
                            break;
                        case 'strtolower':
                            $result = strtolower($string);
                            echo $result;
                            break;
                        case 'strtoupper':
                            $result = strtoupper($string);
                            echo $result;
                            break;
                        case 'ucfirst':
                            $result = ucfirst($string);
                            echo $result;
                            break;
                        case 'ucwords':
                            $result = ucwords($string);
                            echo $result;
                            break;
                        case 'trim':
                            $result = trim($string);
                            echo $result;
                            break;
                        case 'str_repeat':
                            $result = str_repeat($string, 3);
                            echo $result;
                            break;
                        default:
                            echo "invalid";
                    }
                }



                ?>

            </div>
        </div>


    </div>



    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/chosen.jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <!--<script src="simple-lightbox.jquery.min.js"></script>-->
    <!-- magnafic light box-->
    <!-- Magnific Popup core JS file -->
    <script src="js/simple-lightbox.js"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="js/google-map.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/filter-tags.js"></script>
    <script src="js/slick.min.js"></script>
</body>

</html>