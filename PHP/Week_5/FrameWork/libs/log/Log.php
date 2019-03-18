<?php
class Log
{
    private $logFile;
    private $params;
    private $options = ['dateFormat' => 'd-m-Y H:i:s'];

    /**
     * Initialization of class
     * @param string $file is the file to write log
     * @param array $param to set more options
     * @return void
     */
    public function __construct($file = 'log_file/log.txt', $param = [])
    {
        $this->logFile = $file;
        $this->params = array_merge($this->options, $param);
    }

    /**
     * Method destructor to close log file
     * @return void
     */
    public function __destruct()
    {
        fclose($this->logFile);
    }

    /**
     * Method writeLog to write in file log
     * @param string $message is the content to write log
     * @param string $level is the severity of this content
     * @return void
     */
    public function writeLog($message, $level)
    {
        // Check the input file are the resource or not
        if (!is_resource($this->logFile)) {
            $this->openLog();
        }
        $pathURL = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $time = date($this->params['dateFormat']);
        fwrite($this->logFile, "[$time] [$pathURL] : [$level] - $message". PHP_EOL);
    }

    /**
     * Method openLog to open file log
     * @return void
     */
    public function openLog()
    {
        $file = $this->logFile;
        // mode a : pointer at the end of file
        $this->logFile = fopen($file, 'a');
    }

    /**
     * Method to write emergency message
     * @param string $message
     * @return void
     */
    public function emergency($message)
    {
        $this->writeLog($message, 'EMERGENCY');
    }

    /**
     * Method to write alert message
     * @param string $message
     * @return void
     */
    public function alert($message)
    {
        $this->writeLog($message, 'ALERT');
    }

    /**
     * Method to write critical message
     * @param string $message
     * @return void
     */
    public function critical($message)
    {
        $this->writeLog($message, 'CRITICAL');
    }

    /**
     * Method to write notice message
     * @param string $message
     * @return void
     */
    public function notice($message)
    {
        $this->writeLog($message, 'NOTICE');
    }

    /**
     * Method to write info message
     * @param string $message
     * @return void
     */
    public function info($message)
    {
        $this->writeLog($message, 'INFO');
    }
    /**
     * Method to write debug message
     * @param string $message
     * @return void
     */
    public function debug($message)
    {
        $this->writeLog($message, 'DEBUG');
    }

    /**
     * Method to write warning message
     * @param string $message
     * @return void
     */
    public function warning($message)
    {
        $this->writeLog($message, 'WARNING');
    }

    /**
     * Method to write error message
     * @param string $message
     * @return void
     */
    public function error($message)
    {
        $this->writeLog($message, 'ERROR');
    }
}