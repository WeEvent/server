<?php
namespace Mongo;

use Library\Component;
use Library\Utils\Json;

class RouterException extends \Exception {}

class Router extends Component {

    public function getController() {
    	//if ('post' === $this->app->request()->method() && 'signin' === $this->app->request()->request()) return '\\Mongo\\Token';
    	// if (!Token::isValid()) throw new RouterException('Invalid token', 401);
    	/*if ('verify' === $this->app->request()->request()) {
    		$content = Json::encode(array('success' => true));
        	$this->app->response()->setContent($content);
        	$this->app->response()->send();
    	}*/
        /*else if ('me' === $this->app->request()->request() || 'signout' === $this->app->request()->request()) {
            return '\\Mongo\\Token';
        }*/
        return '\\Mongo\\Table';
    }
}
