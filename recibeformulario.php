

<h1>Aqui recibo el formulario</h1>

<?php
    echo "Nombre: ".$_REQUEST['nombre'];
    echo "Apellidos: ".$_REQUEST['apellidos'];
    echo "Correo electronico: ".$_REQUEST['email'];
    echo "Contrasena: ".$_REQUEST['contrasena'];
    


?>
<pre>
<?php
    print_r($_REQUEST);
?>
</pre>