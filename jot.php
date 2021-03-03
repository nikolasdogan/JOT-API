<?php 
include "jotform/JotForm.php";
$jotformAPI = new JotForm("");

$forms = $jotformAPI->getForms();

foreach ($forms as $form) {
    print "<li>".$form["title"]."<----->".$form["id"]."</li>";
}
echo "----------";

$submissions = $jotformAPI->getSubmissions();
print $submissions;

echo "------------------------------------------------";
try {
    
    $filter = array(
        "form_id" => "",
    );
    
    $subs = $jotformAPI->getSubmissions(0, 0, $filter , "");
    var_dump($subs); 
    
    $filter = array(
        "id:gt" => "",
    );
    
    $formSubs = $jotformAPI->getForms();
    var_dump($formSubs);
} catch (Exception $e) {
        var_dump($e->getMessage());
}

?>
