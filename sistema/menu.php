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
      <li><a href="#" class="MenuBarItemSubmenu">Extensi&oacute;n</a>
        <ul>
           <li><a href="a_extension_ver_todos.php">Ver Todos</a></li>
          <li><a href="a_extension_buscar_cod.php">Buscar Cod</a></li>
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
      <li><a href="#" class="MenuBarItemSubmenu">Nivel de Graduaci&oacute;n</a>
        <ul>
          <li><a href="a_nivel_graduacion_ver.php">Ver Todo</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Planillas</a>
        <ul>
          <li><a href="imprimir/planilla_estudiante_imprimir.php">Estudiantes</a></li>
          <li><a href="imprimir/planilla_profesor_imprimir.php">Profesores</a></li>
          <li><a href="imprimir/planilla_instituto_imprimir.php">Instituto</a></li>
          <li><a href="imprimir/planilla_extension_imprimir.php">Extensiones</a></li>
        </ul>
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
      <li><a href="#">Cargar Pago MINEC*</a></li>
      <li><a href="#">Ver Pago MINEC*</a></li>
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
      <li><a href="#" class="MenuBarItemSubmenu">MINEC</a>
        <ul>
          <li><a href="a_instituto_ver_todos.php">INSTITUTOS</a></li>
          <li><a href="a_extension_ver_todos.php">EXTENSIONES</a></li>
          <li><a href="a_listado_estudiantes.php">ESTUDIANTES</a></li>
</ul>
      </li>
<li><a href="#" class="MenuBarItemSubmenu">Estudiantes</a>
  <ul>
    <li><a href="a_listado_estudiantes_general.php">En General</a></li>
    <li><a href="a_listado_estudiantes_instituto.php">Por Institutos</a></li>
    <li><a href="a_listado_estudiantes_instituto.php">Por Instituto-Estatus</a></li>
  </ul>
</li>
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
      <li><a href="#" class="MenuBarItemSubmenu">Anuncio</a>
        <ul>
          <li><a href="a_anuncio_crear.php">Crear</a></li>
          <li><a href="a_anuncio_ver.php">Ver</a></li>
          <li><a href="a_anuncio_buscar.php">Buscar</a></li>
          <li><a href="a_anuncio_actualizar.php">Actualizar</a></li>
</ul>
      </li>
      
      <li><a href="#" class="MenuBarItemSubmenu">Materias</a>
        <ul>
          <li><a href="a_materia_crear.php">Crear</a></li>
          <li><a href="a_materia_ver_todas.php">Ver Todas</a></li>
          <li><a href="a_materia_ver_por_pensum.php">Ver  Por Pensum</a></li>
          <li><a href="a_materia_ver_por_area.php">Ver Por Area</a></li>
          <li><a href="a_materia_buscar.php">Buscar</a></li>
          <li><a href="a_materia_buscar_actualizar.php">Actualizar</a></li>
        </ul>
      </li>
      <li><a href="#">Instituto</a>
        <ul>
          <li><a href="a_instituto_registrar.php">Registrar </a></li>
          <li><a href="a_instituto_ver_todos.php">Ver Todos</a></li>
          <li><a href="a_instituto_buscar_rif.php">Buscar Rif</a></li>
          <li><a href="a_instituto_buscar_cod.php">Buscar Cod</a></li>
          <li><a href="a_instituto_buscar_actualizar.php">Actualizar</a></li>
          <li><a href="imprimir/planilla_instituto_imprimir.php">Planilla</a></li>
        </ul>
      </li>
      <li><a href="#">Extensi&oacute;n</a>
      	 <ul>
          <li><a href="a_extension_registrar.php">Registrar</a></li>
          <li><a href="a_extension_ver_todos.php">Ver Todos</a></li>
          <li><a href="a_extension_buscar_cod.php">Buscar Cod</a></li>
          <li><a href="a_extension_buscar_actualizar.php">Actualizar</a></li>
          <li><a href="imprimir/planilla_instituto_imprimir.php">Planilla</a></li>
        </ul>
       </li> 
      <li><a href="#" class="MenuBarItemSubmenu">Directiva N.</a>
        <ul>
    <li><a href="#">Cargar*</a></li>
    <li><a href="#">Actualizar*</a></li>
    <li><a href="#">Buscar*</a></li>
  </ul>
</li>
      <li><a href="#" class="MenuBarItemSubmenu">Usuario</a>
        <ul>
          <li><a href="a_usuario_crear.php">Crear</a></li>
          <li><a href="a_usuario_ver.php">Ver</a></li>
          <li><a href="a_usuario_buscar.php">Buscar</a></li>
          <li><a href="a_usuario_buscar_actualizar.php">Actualizar</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Texto Biblico</a>
        <ul>
          <li><a href="a_texto_biblico_actualizar.php">Actualizar</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Registro Legal</a>
        <ul>
          <li><a href="a_registro_legal_ver.php">Ver</a></li>
          <li><a href="a_registro_legal_actualizar.php">Actualizar</a></li>
          <li><a href="#">Persona Encargada*</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Nivel de Graduaci&oacute;n</a>
        <ul>
          <li><a href="a_nivel_graduacion_crear.php">Crear</a></li>
          <li><a href="a_nivel_graduacion_ver.php">Ver Todo</a></li>
          <li><a href="#">Buscar</a></li>
          <li><a href="#">Actualizar</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Carnet</a>
        <ul>
          <li><a href="#">Frontal</a></li>
          <li><a href="carnet/carnet_p_ibao.php">Posterio IBAO</a></li>
          <li><a href="carnet/carnet_p_ibm.php">Posterior IBM</a></li>
          <li><a href="carnet/carnet_p_ibme.php">Posterior IBME</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Eliminar*</a>
        <ul>
          <li><a href="#">Estudiante*</a></li>
          <li><a href="#">Instituto*</a></li>
          <li><a href="#">Profesor*</a></li>
          <li><a href="#">Pago*</a></li>
          <li><a href="#">Anuncio*</a></li>
          <li><a href="#">Nota*</a></li>
          <li><a href="#">Novedades*</a></li>
          <li><a href="#">Usuario*</a></li>
        </ul>
      </li>
      <li><a href="#">Manual de Usuario</a></li>
    </ul>
  </li>
  <li><a href="http://minec.com.ve/">Salir</a></li>
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>