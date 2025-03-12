
<?php
// models/FolderManager.php

require_once 'FolderInterface.php';
class FolderManager implements FolderInterface {

    // Method to create a folder
    public function createFolder($folderName) {
        if (!is_dir($folderName)) {
            mkdir($folderName, 0777, true);
            echo "Folder '$folderName' created successfully.<br>";
        } else {
            echo "Folder '$folderName' already exists.<br>";
        }
    }

    // Method to delete a folder
    public function deleteFolder($folderName) {
        if (is_dir($folderName)) {
            rmdir($folderName);
            echo "Folder '$folderName' deleted successfully.<br>";
        } else {
            echo "Folder '$folderName' does not exist.<br>";
        }
    }

    // Method to list files in a folder
    public function listFiles($folderName) {
        if (is_dir($folderName)) {
            $files = scandir($folderName);
            // Filter out '.' and '..' directory listings
            $files = array_diff($files, array('.', '..'));
            return $files;
        } else {
            echo "Folder '$folderName' does not exist.<br>";
            return [];
        }
    }
}
?>
