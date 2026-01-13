<?php


/**
 * class detalleNotaVenta
 * 
 */
class detalleNotaVenta
{

   /*** Attributes: ***/

  /**
   * 
   * @access public
   */
  var $nroNotaVenta;
  /**
   * 
   * @access public
   */
  var $codProducto;
  /**
   * 
   * @access public
   */
  var $cant;
  /**
   * 
   * @access public
   */
  var $precioUnidad;
  /**
   * 
   * @access public
   */
  var $subTotal;

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
   * @param  nroNotaVenta 
   * @return int
   * @access public
   */
  function eliminar( $nroNotaVenta)
  {
    
  } // end of member function eliminar

  /**
   * 
   *
   * @param  nroNotaVenta 
   * @return notaVenta
   * @access public
   */
  function buscar( $nroNotaVenta)
  {
    
  } // end of member function buscar

  /**
   * 
   *
   * @param  nroNotaVenta 
   * @param  cant 
   * @param  precioUnidad 
   * @param  subTotal 
   * @param  codProducto 
   * @return int
   * @access public
   */
  function modificar( $nroNotaVenta,  $cant,  $precioUnidad,  $subTotal,  $codProducto)
  {
    
  } // end of member function modificar

  /**
   * 
   *
   * @param  nroNotaVenta 
   * @param  codProducto 
   * @param  cant 
   * @param  precioUnidad 
   * @param  subTotal 
   * @return int
   * @access public
   */
  function registar( $nroNotaVenta,  $codProducto,  $cant,  $precioUnidad,  $subTotal)
  {
    
  } // end of member function registar



} // end of detalleNotaVenta
?>
