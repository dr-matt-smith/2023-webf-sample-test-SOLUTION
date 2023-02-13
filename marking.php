<?php
print "\n\n ----- lab test 2 marking -----\n";
$resultsPath = __DIR__ . '/tests/_output/report.tap.log';
if(file_exists($resultsPath)){
    $results = file($resultsPath, FILE_IGNORE_NEW_LINES);
} else {
    die("\n\n!! error !! - could not open unit test results file: $resultsPath \n\n");
}

$type1Total = 0;
$type1TotalCorrect = 0;
$type2Total = 0;
$type2TotalCorrect = 0;
$type3Total = 0;
$type3TotalCorrect = 0;
$type4Total = 0;
$type4TotalCorrect = 0;

$type1Weighting = 10;
$type2Weighting = 15;
$type3Weighting = 15;
$type4Weighting = 60;

$testNamespace = "TudublinTest";
foreach($results as $result){
    if (str_contains($result, '_01_')) {
        print "\n";
    }

    if (str_contains($result, 'ok')) {
        print "$result\n";
    }

    if (str_contains($result, $testNamespace . '\Type1_ConstructGetSetTest')){
        $type1Total++;
        if (str_contains($result, '- ' . $testNamespace . '\Type1_ConstructGetSetTest')){
            $type1TotalCorrect++;
        }
    }

    if (str_contains($result, 'Web2Cest')){
        $type2Total++;
        if (str_contains($result, '- Web2Cest')){
            $type2TotalCorrect++;
        }
    }

    if (str_contains($result, 'Web3Cest')){
        $type3Total++;
        if (str_contains($result, '- Web3Cest')){
            $type3TotalCorrect++;
        }
    }

    if (str_contains($result, 'Web4Cest')){
        $type4Total++;
        if (str_contains($result, '- Web4Cest')){
            $type4TotalCorrect++;
        }
    }
}

if($type1Total > 0){
    $type1Marks = ($type1TotalCorrect / $type1Total) * $type1Weighting;
    $type1Marks = round($type1Marks + 0.49);
} else {
    $type1Marks = 0;
}

if($type2Total > 0){
    $type2Marks = ($type2TotalCorrect / $type2Total) * $type2Weighting;
    $type2Marks = round($type2Marks + 0.49);
} else {
    $type2Marks = 0;
}

if($type3Total > 0){
    $type3Marks = ($type3TotalCorrect / $type3Total) * $type3Weighting;
    $type3Marks = round($type3Marks + 0.49);
} else {
    $type3Marks = 0;
}

if($type4Total > 0){
    $type4Marks = ($type4TotalCorrect / $type4Total) * $type4Weighting;
    $type4Marks = round($type4Marks + 0.49);
} else {
    $type4Marks = 0;
}

print "\n";

print "TYPE 1 tests = $type1TotalCorrect out of $type1Total tests =  $type1Marks / $type1Weighting marks \n";
print "TYPE 2 tests = $type2TotalCorrect out of $type2Total tests =  $type2Marks / $type2Weighting marks \n";
print "TYPE 3 tests = $type3TotalCorrect out of $type3Total tests =  $type3Marks / $type3Weighting marks \n";
print "TYPE 4 tests = $type4TotalCorrect out of $type4Total tests =  $type4Marks / $type4Weighting marks (if repo data and not hard coded...) \n";
print "\n";
$totalType1234Marks = round($type1Marks + $type2Marks + $type3Marks + $type4Marks + 0.49);
print "TOTAL = $totalType1234Marks%\n\n";