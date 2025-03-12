<?php
// controllers/FolderController.php
require_once '../models/FolderManager.php';

$folderManager = new FolderManager();

// Create a folder
$folderManager->createFolder('TestFolder');

// List files in the folder (should be empty)
$files = $folderManager->listFiles('TestFolder');
echo "Files in 'TestFolder': " . implode(", ", $files) . "<br>";

// Delete the folder
$folderManager->deleteFolder('Test');
?>
