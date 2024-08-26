<?php
echo "<pre>";
$emp = [
    ["first_name" => "john", "last_name" => "smith", "age" => 23, "pan" => "PN1"],
    ["first_name" => "emily", "last_name" => "davis", "age" => 25, "pan" => "PN2"],
    ["first_name" => "josh", "last_name" => "slary", "age" => 23, "pan" => "PN3"],
    ["first_name" => "kevin", "last_name" => "taylor", "age" => 25, "pan" => "PN4"]
];

// Array with Employee details:
echo "<h2><b>Array with Employee details:</b></h2>";
print_r($emp);

// Pan as a key: null==which value column to be used to set.
$emp_pan_as_keys = array_column($emp, null, "pan");
echo "<h2><b>Pan as a key:</b></h2>";
print_r($emp_pan_as_keys);

// A Key full_name on combining fname and lname on each value:
$emp_fullname = array_map(function($item) {
    $item["full_name"] = $item["first_name"] . " " . $item["last_name"];
    return $item;
}, $emp);
echo "<h2><b>A Key full_name on combining fname and lname on each values:</b></h2>";
print_r($emp_fullname);

$emp_agegrouped = [];
foreach ($emp_pan_as_keys as &$details) {
    $age = $details["age"];
    $details["full_name"] = $details["first_name"] . " " . $details["last_name"];
    if (!isset($emp_agegrouped[$age])) {
        $emp_agegrouped[$age] = [];
    }
    $emp_agegrouped[$age][] = $details;
}

// Array on Grouping emp according to the Age:
echo "<h2><b>Array on Grouping emp according to the Age:</b></h2>";
print_r($emp_agegrouped);

//Check whether an age of people available or not:
echo "<h2><b>Check whether an age of people available or not:</b></h2>";
$check_age = 23;
if (isset($emp_agegrouped[$check_age])) {
    echo "yes the age " . $check_age . "  is Found";
} else {
    echo "No such Age number found";
}

//Number of records with specific age:
echo "<h2><b>Number of records with specific age:</b></h2>";
if (isset($emp_agegrouped[$check_age])) {
    $len = count($emp_agegrouped[$check_age]);
    echo "the total number of records with with age " . $check_age . " is " . $len;
    echo "<br> ";
    print_r($emp_agegrouped[$check_age]);
}

//Adding a new people of specific age:
echo "<h2><b>Adding a new people of specific age:</b></h2>";
$new_emp = ["first_name" => "kevin", "last_name" => "jagg", "age" => 30, "pan" => "PN11"];
$emp_pan_as_keys[$new_emp["pan"]] = $new_emp;
print_r($emp_pan_as_keys);

//A new array with same structure and combined old array and this together:
echo "<h2><b>A new array with same structure and combined old array and this together:</b></h2>";
$new_emp = [
    ["first_name" => "alex", "last_name" => "miller", "age" => 28, "pan" => "PN11"],
    ["first_name" => "emma", "last_name" => "jackson", "age" => 30, "pan" => "PN12"],
    ["first_name" => "david", "last_name" => "rodriguez", "age" => 24, "pan" => "PN13"],
    ["first_name" => "lucy", "last_name" => "campbell", "age" => 29, "pan" => "PN14"]
];
$emp = array_merge($emp, $new_emp);
print_r($emp);

//Checking on combining 2 array with same key:
//the next first name is taken instead of last one due to over rides.
echo "<h2><b>Checking on combining 2 array with same key:</b></h2>";
$new_array2 = ["first_name" => "kevin", "last_name" => "jagg", "age" => 30, "pan" => "PN11"];
$new_array3 = ["first_name" => "peter", "ph_num" => 9898999, "address" => "india","hello" =>"hmm"];
$merged_array = array_merge($new_array2, $new_array3);
print_r($merged_array);

echo "</pre>";
?>
