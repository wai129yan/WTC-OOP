<?php 

abstract class Logger 
{
    abstract public function log($message);

    public function formatMessage($message)
    {
        return date("Y-m-d H:i:s") . " - $message";
    }
}

class FileLogger extends Logger
{
   public function formatMessage($message)
   {
    return parent::formatMessage($message) . PHP_EOL;
   }

   public function log($message)
   {
    file_put_contents('log.txt',$this->formatMessage($message).PHP_EOL,FILE_APPEND);
    echo "Log written to file";
   }
}

class DatabaseLogger extends Logger {
    public function log($message) {
        echo "Log saved to database: " . $this->formatMessage($message) . "\n";
    }
}


$fileLogger = new FileLogger();
echo $fileLogger -> log("This is a log message");
echo "<br>";

echo $fileLogger -> formatMessage("This is a log message");

echo "<br>";
echo "<br>";

$databaseLogger = new DatabaseLogger();
echo $databaseLogger -> log("This is a log message");]


