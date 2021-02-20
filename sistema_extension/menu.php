<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="a_a_menu.php">Inicio</a>  </li>
  <li><a class="MenuBarItemSubmenu" href="#">Registrar</a>
    <ul>
      <li><a class="MenuBarItemSubmenu" href="#">Estudiante</a>
        <ul>
          <li><a href="a_estudiante_registrar.php">Registrar </a></li>
          <li><a href="a_estudiante_buscar.php">Buscar</a></li>
          <li><a href="a_estudiante_buscar_actualizar.php">Actualizar</a></li>
          <li><a href="imprimir/planilla_estudiante_imprimir.php">Planilla</a></li>
          <li><a href="#">Carnet*</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Profesores</a>
        <ul>
          <li><a href="a_profesor_registrar.php">Registrar</a></li>
          <li><a href="a_profesor_buscar.php">Buscar</a></li>
          <li><a href="a_profesor_buscar_actualizar.php">Actualizar</a></li>
          <li><a href="#">Record*</a></li>
          <li><a href="#">Cargar Materia*</a></li>
          <li><a href="#">Asistencias*</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Buscar</a>
    <ul>
      <li><a href="#" class="MenuBarItemSubmenu">Estudiante</a>
        <ul>
          <li><a href="a_estudiante_buscar.php">Cedula</a></li>
          <li><a href="a_estudiante_buscar_nombre.php">Nombre</a></li>
          <li><a href="a_estudiante_buscar_apellido.php">Apellido</a></li>
        </ul>
      </li>
      <li><a href="a_buscar_instituto.php" class="MenuBarItemSubmenu" >Instituto</a>
        <ul>
          <li><a href="a_instituto_buscar_rif.php">Buscar Rif</a></li>
          <li><a href="a_instituto_buscar_cod.php">Buscar Cod</a></li>
          <li><a href="a_instituto_ver_todos.php">Ver Todos </a></li>
        </ul>
      </li>
      <li><a href="a_buscar_profesor.php" class="MenuBarItemSubmenu">Profesores</a>
        <ul>
          <li><a href="a_profesor_buscar.php">Cedula</a></li>
          <li><a href="a_profesor_buscar_nombre.php">Nombre</a></li>
          <li><a href="a_profesor_buscar_apellido.php">Apellido</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Pagos</a>
        <ul>
          <li><a href="a_pago_buscar_cedula.php">Cedula</a></li>
          <li><a href="#">Recibo*</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Notas</a>
        <ul>
          <li><a href="#">Estudiantes*</a></li>
          <li><a href="#">Registro*</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Materia</a>
        <ul>
          <li><a href="a_materia_ver_todas.php">Ver Todas</a></li>
          <li><a href="a_materia_ver_por_pensum.php">Ver  Por Pensum</a></li>
          <li><a href="a_materia_ver_por_area.php">Ver Por Area</a></li>
          <li><a href="a_materia_buscar.php">Buscar</a></li>
        </ul>
      </li>
      <li><a href="a_materia_ver_por_pensum.php">Pensum</a> 
      </li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Notas</a>
    <ul>
      <li><a href="#" class="MenuBarItemSubmenu">Cargar Notas</a>
        <ul>
          <li><a href="a_notas_cargar_b.php">Basico</a></li>
          <li><a href="a_notas_cargar_m.php">Ministerial</a></li>
          <li><a href="a_notas_cargar_l.php">Licenciatura</a></li>
          <li><a href="a_notas_cargar_pv.php">Pensum Viejo</a></li>
        </ul>
      </li>
      <li><a href="a_notas_ver.php">Ver Notas</a>      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Corregir Notas</a>
        <ul>
          <li><a href="a_notas_corregir_b.php"> Basico</a></li>
          <li><a href="a_notas_corregir_m.php">Ministerial</a></li>
          <li><a href="a_notas_corregir_l.php">Licenciatura</a></li>
          <li><a href="a_notas_corregir_pv.php">Pensum Viejo</a></li>
          <li><a href="a_notas_corregir_t.php">Todas Las Materia</a></li>
          <li><a href="a_notas_buscar_registro.php">Buscar Registro</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Pagos</a>
    <ul>
<li><a href="a_pago_ibm_estudiante.php">Cargar Pago IBM</a></li>
      <li><a href="#" class="MenuBarItemSubmenu">Ver Pago IBM</a>
        <ul>
          <li><a href="a_pago_ibm_buscar_cedula.php">Por Cedula</a></li>
          <li><a href="a_pago_ibm_buscar_recibo.php">Por Recibo</a></li>
          <li><a href="a_pago_ibm_buscar_fecha.php">Por Fecha</a></li>
          <li><a href="a_pago_ibm_buscar_entre_fechas.php">Entre Fechas</a></li>
          <li><a href="a_pago_ibm_buscar_recibo.php">Corregir Pago</a></li>
        </ul>
      </li>
</ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Listados</a>
    <ul>
      <li><a href="#" class="MenuBarItemSubmenu">MINEC*</a>
        <ul>
          <li><a href="#">Activos*</a></li>
          <li><a href="#">Inactivos*</a></li>
          <li><a href="#">Retirados*</a></li>
          <li><a href="#">A Graduar*</a></li>
          <li><a href="#">Graduados*</a></li>
        </ul>
      </li>
      <li><a href="#">Institutos *</a></li>
      <li><a href="#">Estadisticas*</a></li>
      <li><a href="a_listado_ibm.php">IBM</a></li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Novedades</a>
    <ul>
      <li><a href="a_novedades_reportar.php">Reportar Novedades</a></li>
      <li><a href="a_novedades_ver.php">Ver Novedades</a></li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">Configuraci&oacute;n</a>
    <ul>
<li><a href="#">Manual de Usuario</a></li>
    </ul>
  </li>
  <li><a href="../index.php">Salir</a></li>
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>