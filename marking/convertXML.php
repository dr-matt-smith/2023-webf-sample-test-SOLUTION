<?php

//$testClasses = [
//    'Type1_Constructor_Get_Set_Test',
//    'Type2_Basic_Operations_Test',
//    'Type3_Validation_Test',
//    'Type4_Main_Logic_Test',
//];
//$testClassPrefix = 'TudublinTest.';

$outputString = '';
$readFileName = 'report.xml';
$inFilePath = $filePath . $readFileName;
$xmlString = file_get_contents($inFilePath);

$results = new SimpleXMLElement($xmlString);

//foreach ($movies->movie[0]->rating as $rating) {

// $x = $results[0]->testcase;
// var_dump($x);
// die();

// var_dump($testClasses);
// die();

//foreach ($testClasses as $testClassName){
//    $readFileName = $testClassPrefix . $testClassName . '.xml';
    $inFilePath = $filePath . $readFileName;
    $xmlString = file_get_contents($inFilePath);
    $results = new SimpleXMLElement($xmlString);

    $results = $results->testsuite;

//    var_dump($results);
//die();
    // print out new testing class name
//    $message = "$testClassName (Tudublin\\$testClassName) \n";
//    print $message;
//    $outputString .= $message;

$previousClass = '';

// only process for current suite (unit / acceptance)
if($results["name"] == $suite):
    foreach ($results->testcase as $testcase) {


//        print "TEST CASE\n";
//        var_dump($testcase);
//        die();
        // print out class name line (if new)
        $className = $testcase[0]["class"];

//        var_dump($className);
//        die();

        if(strcmp($className, $previousClass) !== 0){
            $previousClass = $className;
            $outputString .= "\nTest Class = $className\n";
        }





        $testName = $testcase[0]["name"];
        $testFeature = $testcase[0]["feature"];
        if(!empty($testFeature)){
            $testName = $testFeature;
        }
        $testName = str_replace('_', ' ', $testName);
        $testName = str_replace('test type', 'test TYPE', $testName);

//        // "error" not "failure" from Codeception
        $error = $testcase->error;
        $failure = $testcase->failure;

//        print "ailure\n";
//        var_dump($failure);

        $hasError = !(empty($error) && empty($failure));
//        print "hasError\n";
//        var_dump($hasError);



//        print "\n------\n";

        $message = '';
        if($hasError){
            $message .= ' [ ] ';
        } else {
            $message .= ' [x] ';
        }
        $message .= $testName;
        $message .= PHP_EOL;

//        print $message;
        $outputString .= $message;
    }

    // blank line after all methods from current class output
    $message = "\n";
//    print $message;
    $outputString .= $message;


    $outFilePath = $filePath . $writeFileName;
    file_put_contents($outFilePath, $outputString);
    print " --- results written to $outFilePath --\n";

endif;
