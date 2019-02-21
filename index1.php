<style>
    <?php include 'main.css'; ?>
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
<?php $c = 0; ?>
<?php
class csvimport {
    static public function getRecords() {


        $notate = 'This is working - TEST';
                            #this is good

        echo "<html><body><table>\n\n";

        $forceopen = fopen("test.csv", "r");
                            #r is to read

        while (($contentline = fgetcsv($forceopen)) !== false) {

            echo "<tr>";

            foreach ($contentline as $celldata) {

                echo "<td>" . htmlspecialchars($celldata) . "</td>";

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