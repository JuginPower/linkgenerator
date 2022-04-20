<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php
    include "linker.php";
    $company_name = "";
    $link = "";
    $keywords = array();

    foreach ($_POST as $key => $value) {

        if (str_starts_with($key, "company")) {
            
            $company_name = $value;
        }
        if (str_starts_with($key, "link")) {
            
            $link = $value;
        }
        if (str_starts_with($key, "keyword")) {

            
        }
    }
    ?>
    <table>
        <tr>
            <th>Company</th>
            <th>Links</th>
        </tr>
        <tr>

        </tr>
    </table>
</body>

</html>