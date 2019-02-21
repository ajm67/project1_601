<html>
<head>
    <title>FORMATTING FOR TABLE ELEMENTS</title>
    <style type="text/css">
        table {
            margin: 2px;
        }

        th {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 4em;
            background: #666;
            color: #FFF;
            padding: 1px 3px;
            border-collapse: separate;
            border: 1px solid #000;
        }

        td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2em;
            border: 2px solid #DDD;
        }
    </style>
<?php

$file = 'data.csv';;
            # this uses a local file, stored on my machine.

$startprogram = new main1($file);
main1::start();


class main1 {

    private $html;

    static public function start(){
        $notate = csvimport::getRecords();
        $tabled = html::generateTable($notate);
        system::printPage($tabled);
    }
        #this is the function that brings together the different classes
}
?>


<?php

class csvimport {

    static public function getRecords()
    {
        $notate = 'If this text displays, this is functioning';
        #this is good

        echo "<html><body><table class=\"table\">\n\n";

        $forceopen = fopen("test.csv", "r");
        #r is to read


  while (($contentline = fgetcsv($forceopen)) !== false) {
                    $first = true;
                   echo "<tr>";

                   foreach ($contentline as $celldata) {
                       if ($first) {
                           echo "<th>" . htmlspecialchars($celldata) . "</th>";
                           $first = false;
                           #the first row will now be notated, and the first variable is no longer active
                       }
                       else{
                           echo "<td>" . htmlspecialchars($celldata) . "</td>";

                       }
                       }
                  echo "</tr>\n";
               }



              fclose($forceopen);
              echo "\n</table></body></html>";


              return $notate;
           }
}
















class html{
    static public function generateTable($notate){

        $tabled = $notate;

        return $tabled;
    }

}

class system {
    static public function printPage($entirepage)
    {

        echo $entirepage;
    }
}

?>
</html>
