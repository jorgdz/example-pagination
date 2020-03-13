<?php 
namespace Src\Controllers;

use Src\Models\Autor;
use Jdzm\JDZPaginator\Pagination\Paginator;

class HomeController extends Controller
{
	
	public function index ()
	{
		$page = intval((isset($_GET['page']) ? $_GET['page'] : 0));
		$size = intval((isset($_GET['size']) ? $_GET['size'] : 10));
		$offset = $page * $size;
		$autores = Autor::orderBy('id', 'desc')->offset($offset)->limit($size)->get();
		$count = Autor::count();

		$paginator = new Paginator($page, $size, $count, $autores);

		$this->view('home', ['autores' => $paginator]);
	}

}
