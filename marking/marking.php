<?php

$type1Proportion = 10;
$type2Proportion = 20;
$type3Proportion = 30;
$type4Proportion = 40;
$maxPossible = $type1Proportion + $type2Proportion + $type3Proportion + $type4Proportion;


$resultsFileName = $writeFileName;

$resultsPath = $filePath . $resultsFileName;

print "\n\n-----------------------------------------------------------------------------------------------";

print "\nlab test (estimated experimental) marking              test suite = '$suite' \n";

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

foreach($results as $result){
    print "$result\n";
    if (str_contains($result, 'TYPE 1')){
        $type1Total++;
        if (str_contains($result, '[x] test TYPE 1')){
            $type1TotalCorrect++;
        }
    }

    if (str_contains($result, 'TYPE 2')){
        $type2Total++;
        if (str_contains($result, '[x] test TYPE 2')){
            $type2TotalCorrect++;
        }
    }

    if (str_contains($result, 'TYPE 3')){
        $type3Total++;
        if (str_contains($result, '[x] test TYPE 3')){
            $type3TotalCorrect++;
        }
    }

    if (str_contains($result, 'TYPE 4')){
        $type4Total++;
        if (str_contains($result, '[x] test TYPE 4')){
            $type4TotalCorrect++;
        }
    }
}

if($type1Total > 0){
    $type1Marks = ($type1TotalCorrect / $type1Total) * $type1Proportion;
    $type1Marks = round($type1Marks + 0.49);
} else {
    $type1Marks = 0;
}

if($type2Total > 0){
    $type2Marks = ($type2TotalCorrect / $type2Total) * $type2Proportion;
    $type2Marks = round($type2Marks + 0.49);
} else {
    $type2Marks = 0;
}

if($type3Total > 0){
    $type3Marks = ($type3TotalCorrect / $type3Total) * $type3Proportion;
    $type3Marks = round($type3Marks + 0.49);
} else {
    $type3Marks = 0;
}

if($type4Total > 0){
    $type4Marks = ($type4TotalCorrect / $type4Total) * $type4Proportion;
    $type4Marks = round($type4Marks + 0.49);
} else {
    $type4Marks = 0;
}


print "TYPE 1 tests = $type1TotalCorrect out of $type1Total tests =  $type1Marks / $type1Proportion marks \n";
print "TYPE 2 tests = $type2TotalCorrect out of $type2Total tests =  $type2Marks / $type2Proportion marks \n";
print "TYPE 3 tests = $type3TotalCorrect out of $type3Total tests =  $type3Marks / $type3Proportion marks \n";
print "TYPE 4 tests = $type4TotalCorrect out of $type4Total tests =  $type4Marks / $type4Proportion marks \n";
print "\n";
$totalType1234Marks = round($type1Marks + $type2Marks + $type3Marks + $type4Marks + 0.49);
print "(estimated grade) $totalType1234Marks / $maxPossible = $totalType1234Marks %          test suite = '$suite' \n";

if($maxPossible != 100){
    print "????????? max possible marks is NOT 100%, it's $maxPossible !!!!????? \n";
}
print "(NOTE: provisional marking is an experimental feature,\nthe lecturer will inform you of the actual grade when your submitted code has been assessed)\n";
print "-----------------------------------------------------------------------------------------------\n\n";

