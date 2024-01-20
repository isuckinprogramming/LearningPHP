
$contentFolderNames = @(
  "PHP Syntax",
  "PHP Comments",
  "PHP Variables",
  "PHP Echo/Print",
  "PHP Data Types",
  "PHP String",
  "PHP Math",
  "PHP Constants",
  "PHP Operators",
  "PHP If-Else",
  "PHP Switch",
  "PHP Loops",
  "PHP Functions",
  "PHP Arrays",
  "PHP Numbers"
)

$rootDir = Get-Location

foreach($fName in $contentFolderNames){
  Set-Location -Path "$PWD\$fName"
  New-Item -ItemType Directory -Path "$PWD\resources"

  Set-Location -Path "$rootDir"
}