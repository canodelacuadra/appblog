<?php
// index.php
 
$conexion = mysqli_connect('localhost', 'root', '','appblog');
mysqli_set_charset($conexion,'utf-8');
echo $id=$_GET['id'];
 $consulta= "SELECT id_blog, titulo_blog, texto_blog FROM articulos WHERE id_blog=$id";
$resultado = mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));

?>
    <html>
        <head>
        <title>Esta sería la página de entradas</title>
        </head>
        <body>
        <h1>Página singular de entradas</h1>
		<a href="index.php">Index</a>
            <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
              <p>  Entrada Nº:<?php echo $fila['id_blog'] ?></p>
				<h1><?php echo $fila['titulo_blog'] ?></h1>
                <p> <?php echo $fila['texto_blog'] ?></p>  
            <?php endwhile; ?>
        </body>
    </html>
 
<?php
mysqli_close($conexion);