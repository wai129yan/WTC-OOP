<?php
// models/FolderInterface.php
interface FolderInterface {
    public function createFolder($folderName);
    public function deleteFolder($folderName);
    public function listFiles($folderName);
}
?>
