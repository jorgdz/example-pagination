<?php 
namespace Src\Controllers;

use Src\Render\PageRender;

class Controller
{
	public function view ($view, $params = [])
	{
		PageRender::view($view, $params);
	}
}
