<?php
class Conexion extends mysqli
{
    public function __construct()
    {
        parent:: __construct("containers-us-west-16.railway.app","root","OXjtXIZDY2riT74Wx441","railway");
    }
}
?>
