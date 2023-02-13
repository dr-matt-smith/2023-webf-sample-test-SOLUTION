# lab test 1 (unit and web testing)

This tests has 2 parts:
    - unit test classes in "/tests/unit"  (50% of this test)
    - web test classes in "/tests/acceptance" (50% of this test)

You are to write code to pass provided tests
    - create the required class in "/src" to pass the unit tests
    - edit ""/src/Application.php" as required as web front controller
    - implement HTML output scripts in "/templates"

-----------------------------------------------------------------------

SUBMIT the following PHP files:
    1. the new class in folder "/src" created to pass the Unit tests
    2. any updated classes in "/src", such as "Application.php"
    3. any new / updated PHP files in folder "/templates"

do NOT attempt to submit a ZIP folder - only ".php" text files can be submitted

-----------------------------------------------------------------------
GRADING:
    10% - Type1 tests (unit / web)
    20% - Type2 tests (unit / web)
    30% - Type3 tests (unit / web)
    40% - Type4 tests (unit / web)

    NOTE: your solution for the Unit tests must be from the data supplied from the Repository/Fixtures class (i.e. not hard coded)
        (your submission will be tested with a different Fixtures class and tests matching those Fixtures)

-----------------------------------------------------------------------
HINTS (general):

    - populate "/vendor" by running 'composer update'

    - run the web server in the background with 'symfony serve -d'

        - and use another terminal window to run tests while that server is running

        - NOTE: If your web server is NOT running on port 8000, you'll need to update "acceptance.suite.yml" to your port for the web tests to work ...

    - run all WEB tests with 'composer web' / run all UNIT tests with 'composer unit'

        - run 1 set of tests with "composer web1" (1, 2, 3, 4), or "composer unit1" (1, 2, 3, 4),

    - run tests with detailed steps with 'composer websteps', 'composer web1steps', 'composer web2steps', and so on

    - (beta) see provisional marking of your work

        - run "composer unit" then run "composer markunit"

        - run "composer web" then run "composer markweb"

-----------------------------------------------------------------------
HINTS (beta feature - automatic provisional marking):

I'm trying out an automated grading tool, that analyses the "/tests/_output/report.xml" summary of test passes/failures, to give a provisional grade.

    - run all Unit tests with "composer unit" then run "composer markunit"

        - in the terminal you'll see a summary and provisional grade

        - there will also be a summary created in "textdox" format in file: "/tests/_output/testdox_unit.txt"

    - run all Web Acceptances tests with "composer web" then run "composer markweb"

        - in the terminal you'll see a summary and provisional grade

        - there will also be a summary created in "textdox" format in file: "/tests/_output/testdox_acceptance.txt"

