<?php  

namespace app;

class Application {

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;
    public Controller $controller;
    public static Application $app;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->response = new Response();
        $this->request = new Request();
        $this->router = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
    }

    public function getController (): \app\Controller
    {
        return $this->controller;
    }

    public function setController (\app\Controller $controller): void
    {
        $this->controller = $controller;
    }
    
    public function run () {
        echo $this->router->resolve();
    }

}

?>