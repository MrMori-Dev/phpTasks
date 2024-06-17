<?php
// Open a file for write only 'w'
// $myfile = fopen("file1.txt", "w") or die("Unable to open file");

// Open a file for read only 'r'
// $myfile = fopen("file1.txt", "r") or die("Unable to open file");

// Open a file for write only 'a'
// $myfile = fopen("file2.txt", "a") or die("Unable to open file");

// Creates a new file for write only 'x'
// $myfile = fopen("file3.txt", "x") or die("Error creating file");

// Open a file for read/write "r+"
// $myfile = fopen("file1.txt", "r+") or die("Unable to open file");

// Open a file for read/write "w+"
// $myfile = fopen("file1.txt", "a") or die("Unable to open file");

// Open a file for read/write "a+"
// $myfile = fopen("file1.txt", "a+") or die("Unable to open file");

// Creates a new file for read/write "x+"
// $myfile = fopen("file4.txt", "x+") or die("Error creating file");

// Challenge (fopen, fclose, fwrite, fread, fgets, feof, fgetc)
$myfile = fopen("TestFile.txt", "x") or die("Error creating file");
$myfile = fopen("TestFile.txt", "w") or die("Error opening file");
fwrite($myfile, "Jon Doe <br>");
fwrite($myfile, "12345678 <br>");
fwrite($myfile, "Jane Doe <br>");
fclose($myfile);


$myfile = fopen("TestFile.txt", "r") or die("Unable to open file");
while (!feof($myfile)) {
    echo fgets($myfile, 1024);
}
fclose($myfile);

echo "<br>";
$myfile = fopen("TestFile.txt", "r") or die("Unable to open file");
for ($i = 0; $i < 3; $i++) {
    echo fgetc($myfile);
}
fclose($myfile);