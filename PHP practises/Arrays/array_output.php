Array with Employee details:
Array
(
    [0] => Array
        (
            [first_name] => john
            [last_name] => smith
            [age] => 23
            [pan] => PN1
        )

    [1] => Array
        (
            [first_name] => emily
            [last_name] => davis
            [age] => 25
            [pan] => PN2
        )

    [2] => Array
        (
            [first_name] => josh
            [last_name] => slary
            [age] => 23
            [pan] => PN3
        )

    [3] => Array
        (
            [first_name] => kevin
            [last_name] => taylor
            [age] => 25
            [pan] => PN4
        )

)
Pan as a key:
Array
(
    [PN1] => Array
        (
            [first_name] => john
            [last_name] => smith
            [age] => 23
            [pan] => PN1
        )

    [PN2] => Array
        (
            [first_name] => emily
            [last_name] => davis
            [age] => 25
            [pan] => PN2
        )

    [PN3] => Array
        (
            [first_name] => josh
            [last_name] => slary
            [age] => 23
            [pan] => PN3
        )

    [PN4] => Array
        (
            [first_name] => kevin
            [last_name] => taylor
            [age] => 25
            [pan] => PN4
        )

)
A Key full_name on combining fname and lname on each values:
Array
(
    [0] => Array
        (
            [first_name] => john
            [last_name] => smith
            [age] => 23
            [pan] => PN1
            [full_name] => john smith
        )

    [1] => Array
        (
            [first_name] => emily
            [last_name] => davis
            [age] => 25
            [pan] => PN2
            [full_name] => emily davis
        )

    [2] => Array
        (
            [first_name] => josh
            [last_name] => slary
            [age] => 23
            [pan] => PN3
            [full_name] => josh slary
        )

    [3] => Array
        (
            [first_name] => kevin
            [last_name] => taylor
            [age] => 25
            [pan] => PN4
            [full_name] => kevin taylor
        )

)
Array on Grouping emp according to the Age:
Array
(
    [23] => Array
        (
            [0] => Array
                (
                    [first_name] => john
                    [last_name] => smith
                    [age] => 23
                    [pan] => PN1
                    [full_name] => john smith
                )

            [1] => Array
                (
                    [first_name] => josh
                    [last_name] => slary
                    [age] => 23
                    [pan] => PN3
                    [full_name] => josh slary
                )

        )

    [25] => Array
        (
            [0] => Array
                (
                    [first_name] => emily
                    [last_name] => davis
                    [age] => 25
                    [pan] => PN2
                    [full_name] => emily davis
                )

            [1] => Array
                (
                    [first_name] => kevin
                    [last_name] => taylor
                    [age] => 25
                    [pan] => PN4
                    [full_name] => kevin taylor
                )

        )

)
Check whether an age of people available or not:
yes the age 23  is Found
Number of records with specific age:
the total number of records with with age 23 is 2
 Array
(
    [0] => Array
        (
            [first_name] => john
            [last_name] => smith
            [age] => 23
            [pan] => PN1
            [full_name] => john smith
        )

    [1] => Array
        (
            [first_name] => josh
            [last_name] => slary
            [age] => 23
            [pan] => PN3
            [full_name] => josh slary
        )

)
Adding a new people of specific age:
Array
(
    [PN1] => Array
        (
            [first_name] => john
            [last_name] => smith
            [age] => 23
            [pan] => PN1
            [full_name] => john smith
        )

    [PN2] => Array
        (
            [first_name] => emily
            [last_name] => davis
            [age] => 25
            [pan] => PN2
            [full_name] => emily davis
        )

    [PN3] => Array
        (
            [first_name] => josh
            [last_name] => slary
            [age] => 23
            [pan] => PN3
            [full_name] => josh slary
        )

    [PN4] => Array
        (
            [first_name] => kevin
            [last_name] => taylor
            [age] => 25
            [pan] => PN4
            [full_name] => kevin taylor
        )

    [PN11] => Array
        (
            [first_name] => kevin
            [last_name] => jagg
            [age] => 30
            [pan] => PN11
        )

)
A new array with same structure and combined old array and this together:
Array
(
    [0] => Array
        (
            [first_name] => john
            [last_name] => smith
            [age] => 23
            [pan] => PN1
        )

    [1] => Array
        (
            [first_name] => emily
            [last_name] => davis
            [age] => 25
            [pan] => PN2
        )

    [2] => Array
        (
            [first_name] => josh
            [last_name] => slary
            [age] => 23
            [pan] => PN3
        )

    [3] => Array
        (
            [first_name] => kevin
            [last_name] => taylor
            [age] => 25
            [pan] => PN4
        )

    [4] => Array
        (
            [first_name] => alex
            [last_name] => miller
            [age] => 28
            [pan] => PN11
        )

    [5] => Array
        (
            [first_name] => emma
            [last_name] => jackson
            [age] => 30
            [pan] => PN12
        )

    [6] => Array
        (
            [first_name] => david
            [last_name] => rodriguez
            [age] => 24
            [pan] => PN13
        )

    [7] => Array
        (
            [first_name] => lucy
            [last_name] => campbell
            [age] => 29
            [pan] => PN14
        )

)
Checking on combining 2 array with same key:
Array
(
    [first_name] => peter
    [last_name] => jagg
    [age] => 30
    [pan] => PN11
    [ph_num] => 9898999
    [address] => india
    [hello] => hmm
)
