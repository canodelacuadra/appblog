<?php
//http://librosweb.es/libro/symfony_2_x/capitulo_2/un_blog_sencillo_creado_con_php_simple.html
// index.php
 
$conexion = mysqli_connect('localhost', 'root', '','appblog');
mysqli_set_charset($conexion,'utf8');
 $consulta= 'SELECT id_blog, titulo_blog FROM articulos';
$articulo = mysqli_query($conexion,$consulta);
?>
 
    <html>
        <head>
        <title>Un simple script blog</title>
        </head>
        <body>
        <h1>Un simple script de Blog</h1>
        <ul>
            <?php while ($fila = mysqli_fetch_assoc($articulo)): ?>
            <li>
                <a href="mostrar.php?id=<?php echo $fila['id_blog'] ?>">
                    <?php echo $fila['titulo_blog'] ?>
                    </a>
            </li>
            <?php endwhile; ?>
        </ul>
        </body>
    </html>
 
<?php
mysqli_close($conexion);