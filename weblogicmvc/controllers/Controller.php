<?php

    class Controller {

        protected function renderView($controllerPrefix, $viewName, $data = [], $layout = 'default') {
            extract($data);
            $auth = new Auth();
           /* $users = new User();*/
            $viewPath = 'views/' . $controllerPrefix . '/' . $viewName . '.php';
            $layoutPath = 'views/layout/' . $layout . '.php';
            require_once($layoutPath);
        }

        /**
         * Redirect to another route.
         *
         * @param string $controllerPrefix The controller prefix of the route to redirect to.
         * @param string $action The action of the route to redirect to.
         * @param array $params Optional query parameters to include in the redirect URL.
         */

        protected function redirectToRoute($controllerPrefix, $action, $params = []) {
            // Build the redirect URL
            $url = 'index.php?c=' . urlencode($controllerPrefix) . '&a=' .
                urlencode($action);
            foreach ($params as $key => $value) {
                $url .= '&' . urlencode($key) . '=' . urlencode($value);
            }
            // Redirect to the URL
            header('Location: ' . $url);
        }

        // Obter o valor para uma determinada chave (parâmetro POST)
        protected function getHTTPPostParam($key) {
            return $_POST[$key] ?? '';
        }

    // Obter o valor para uma determinada chave (parâmetro GET)
        protected function getHTTPGetParam($key) {
            return $_GET[$key] ?? '';
        }

    // Obter o vetor POST
        protected function getHTTPPost() {
            return $_POST;
        }

    // Verificar se o parâmetro existe através de uma determinada chave [POST]
        protected function hasHTTPPostParam($key) {
            return isset($_POST[$key]);
        }

    // Verificar se o parâmetro existe através de uma determinada chave [GET]
        protected function hasHTTPGetParam($key) {
            return isset($_GET[$key]);
        }
        //Verifica se o utilizador está autenticado
        protected function authenticationFilterAllows($roles=[]){
            $auth = new Auth();

            if(!$auth -> isLoggedInAs($roles)){
                header('Location: '.constant('INVALID_ACCESS_ROUTE'));
            }

        }
    }