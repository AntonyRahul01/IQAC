<?php include "dbase.php";
$name = $_POST['name'];
$guidename = $_POST['guidename'];
$journalname = $_POST['journalname'];
$hindex = $_POST['hindex'];
$type = $_POST['type'];
$title = $_POST['title'];
$impactfactor = $_POST['impactfactor'];
$date = $_POST['date'];
$authors = $_POST['authors'];

$sql = "insert into journal_details( Name,GuideName,JournalName,HIndex,JournalType,PaperTitle,ImpactFactor,IssueDate,Authors) values(?,?,?,?,?,?,?,?,?)";
$stmt = $cn->prepare($sql);

if ($stmt ===false)
{
    echo 'stmt failed';
}
$stmt->bind_param("sssisssss", $name, $guidename, $journalname, $hindex, $type, $title, $impactfactor, $date, $authors);

if ($stmt->execute()) {
    echo "Successfully inserted";
} else {
    echo "insertion failed";
}

//$stmt = bind_param("sssisssss",)
