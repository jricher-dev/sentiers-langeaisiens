<?php

namespace Library\Controller;

abstract class Controller implements iController
{

    private $dataView = array();

    public function __construct()
    {
        
    }

    public function setDataView($data)
    {
        $this->dataView = array_merge($this->dataView, $data);
    }

    public function getDataView()
    {
        return $this->dataView;
    }

    private $layout = "default";

    protected function getLayout()
    {
        return $this->layout;
    }

    public function renderView($controller, $action)
    {
        $pathView = APP_ROOT . 'Views/Controllers/' . str_replace('Application\\Controllers\\', '', $controller) . '/'
                . str_replace('Action', '', $action) . ".phtml";

        if (file_exists($pathView)) {
            extract($this->getDataView());

            ob_start();
            include_once($pathView);

            $viewContent = ob_get_clean();

            ob_start();
            include_once(APP_ROOT . 'Views/Layouts/' . $this->getLayout() . '.phtml');
            $finalRender = ob_get_clean();

            echo $finalRender;
        }
    }

}
?>



