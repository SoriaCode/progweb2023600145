<?php
    ini_set("display_errors", E_ALL);
    include_once "persona.php";

    $lista = [
        new Persona("Fulano", "1969-03-02", "5586937462"),
        new Persona("Sutano", "2001-03-02", "5517293820"),
        new Persona("Meregano", "2002-05-02", "5520928376"),
        new Persona("Susana", "2003-03-02", "5528374623"),
        new Persona("Yari", "1999-02-02", "5520394627"),
        new Persona("Monroy", "1998-08-02", "5503948372"),
        new Persona("Dulce", "1999-10-02", "5594837474"),
        new Persona("Juanita", "2005-12-02", "5520493827"),
        new Persona("Aleitia", "2005-01-02", "5500998877"),
        new Persona("juan", "1998-03-02", "5511223344"),
        new Persona("pedro", "2000-06-24", "5599447733")
    ];
?>


<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Lista de personas</title>
        <style>
            td{
                background-color:cyan;
            }
        </style>
    </head>

    <body>
        <h1>Lista de personas</h1>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $p): ?>
                <tr>
                <td><?php echo $p->getNombre()?></td>
                <td><?php echo $p->getFecNac()?></td>
                <td><?php echo date_diff(date_create($p->getFecNac()), date_create())->y ?></td>
                <td><?php echo $p->getTel()?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </body>
    
    </html>