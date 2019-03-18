<?php
include 'libs/smarty/libs/Smarty.class.php';

class BaseController
{
    protected $folder;

    /**
     * Method to check input file and visit to this file
     * @param string $file is a name of file.
     * @param array $data are the data to use in this file.
     * @return void.
     */
    public function render($file, $data = [])
    {
        $checkFile = '../views/' . $this->folder . '/' . $file . '.tpl';
        // Check Views directory has this file or not
        if (!is_file($checkFile)) {
            $smarty = new Smarty();
            $smarty->addTemplateDir('views/' . $this->folder);
            $smarty->setCompileDir('tmp');
            $smarty->assign('data', $data);
            $smarty->display($file . '.tpl');
        } else {
            die('This view is not exist..');
        }
    }
}