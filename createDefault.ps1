# Fuck the Set-Location commandlet 
# What the fuck does an "Set-Location : An object at the specified path " mean???????
# YOU WORK EXACTLY THE SAME WAY FOR OTHER FOLDERS AND THEN 
# CAUSE THIS ERROR AT OTHER FOLDERS????????

# Create a git repository first
git init

$contentFolderNames = (
  "PHP Install",
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

$topicContent = @(
  "Topic",
  "Learnings",
  "Examples",
  "Application",
  "Other Source"
);


$rootLocation = Get-Location

foreach ( $name in $contentFolderNames ) {
  
  $createdFolderPath = "$PWD\$name"
  New-Item -ItemType Directory -Path $createdFolderPath;
  
  # $nextLocation = ".\$name.ToString()" 
  Set-Location -Path "$createdFolderPath"

  foreach($fileName in $topicContent){
    New-Item -ItemType File -Path "$fileName.md"
  }
  Set-Location -Path $rootLocation
}
