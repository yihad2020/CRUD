<?php


/**
 * class Producto
 * 
 */
class Producto
{

   /*** Attributes: ***/

  /**
   * 
   * @access public
   */
  var $cod;
  /**
   * 
   * @access public
   */
  var $nombre;
  /**
   * 
   * @access public
   */
  var $descripcion;
  /**
   * 
   * @access public
   */
  var $industria;
  /**
   * 
   * @access public
   */
  var $marca;
  /**
   * 
   * @access public
   */
  var $stock;
  /**
   * 
   * @access public
   */
  var $estado;
  /**
   * 
   * @access public
   */
  var $codCategoria;
  /**
   * 
   * @access public
   */
  var $fechaVenc;
  /**
   * 
   * @access public
   */
  var $precioVenta;

  /**
   * 
   *
   * @return 
   * @access public
   */
  function listar()
  {
    
  } // end of member function listar

  /**
   * 
   *
   * @param  cod 
   * @return int
   * @access public
   */
  function eliminar( $cod)
  {
    
  } // end of member function eliminar

  /**
   * 
   *
   * @param  cod 
   * @return Producto
   * @access public
   */
  function buscar( $cod)
  {
    
  } // end of member function buscar

  /**
   * 
   *
   * @param  nombre 
   * @param  descripcion 
   * @param  industria 
   * @param  marca 
   * @param  stock 
   * @param  codCategoria 
   * @param  fechaVenc 
   * @param  precioVenta 
   * @return int
   * @access public
   */
  function registrar( $nombre,  $descripcion,  $industria,  $marca,  $stock,  $codCategoria,  $fechaVenc,  $precioVenta)
  {
    
  } // end of member function registrar

  /**
   * 
   *
   * @param  nombre 
   * @param  descripcion 
   * @param  marca 
   * @param  industria 
   * @param  stock 
   * @param  estado 
   * @param  codCategoria 
   * @param  fechaVenc 
   * @param  precioVenta 
   * @return int
   * @access public
   */
  function modificar( $nombre,  $descripcion,  $marca,  $industria,  $stock,  $estado,  $codCategoria,  $fechaVenc,  $precioVenta)
  {
    
  } // end of member function modificar



} // end of Producto
?>
