<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Nombres</th>
				<th>Apellidos</th>
			</thead>
			<tbody>
				<?php foreach ($autores->data as $autor): ?>
					<tr>
						<td><?=$autor->id?></td>
						<td><?=$autor->nombres?></td>
						<td><?=$autor->apellidos?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		<nav aria-label="...">
		  <ul class="pagination">
		    <?php if ($autores->current_page == $autores->prev): ?>
		    	<li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
			    </li>
			<?php else:?>	
				<li class="page-item">
			      <a class="page-link" href="?page=<?=$autores->prev?>">Anterior</a>
			    </li>
		    <?php endif ?>
		    


			<?php foreach ($autores->numbersPage as $number): ?>
				<li class="page-item <?=($autores->current_page == ($number - 1)) ? 'active' : ''?>" aria-current="page">
			      <a class="page-link" href="?page=<?=$number-1?>"><?=$number?></a>
			    </li>				
			<?php endforeach ?>

			

		    <?php if ($autores->current_page == $autores->next): ?>
		    	<li class="page-item disabled">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Siguiente</a>
			    </li>
			<?php else:?>	
				<li class="page-item">
			      <a class="page-link" href="?page=<?=$autores->next?>">Siguiente</a>
			    </li>
		    <?php endif ?>
		  </ul>
		</nav>
	</div>
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>