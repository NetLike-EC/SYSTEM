<?php include('../../init.php');
$qry_truncMenu='TRUNCATE TABLE  tbl_menus_items';
$RS_qry_truncMenu=mysql_query($qry_truncMenu) or die (mysql_error());
//
$cm=0;
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='beg';
$m[$cm]['itemmenu_tit']='';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='0';
$cm++;
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mIni';
$m[$cm]['itemmenu_tit']='Inicio';
$m[$cm]['itemmenu_link']='com_index/index.php';
$m[$cm]['itemmenu_icon']='icon-home';
$m[$cm]['itemmenu_order']='1';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mCli';
$m[$cm]['itemmenu_tit']='Clientes';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='icon-user';
$m[$cm]['itemmenu_order']='2';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mInv';
$m[$cm]['itemmenu_tit']='Inventario';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='icon-table';
$m[$cm]['itemmenu_order']='3';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mCom';
$m[$cm]['itemmenu_tit']='Compras';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='icon-chevron-down';
$m[$cm]['itemmenu_order']='4';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mVen';
$m[$cm]['itemmenu_tit']='Ventas';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='icon-chevron-up';
$m[$cm]['itemmenu_order']='5';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mCtl';
$m[$cm]['itemmenu_tit']='Catálogo';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='icon-th';
$m[$cm]['itemmenu_order']='6';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mSis';
$m[$cm]['itemmenu_tit']='Sistema';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='icon-cog';
$m[$cm]['itemmenu_order']='7';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=0;
$m[$cm]['itemmenu_nom']='mSal';
$m[$cm]['itemmenu_tit']='Salir';
$m[$cm]['itemmenu_link']='com_index/logout.php';
$m[$cm]['itemmenu_icon']='icon-signout';
$m[$cm]['itemmenu_order']='8';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=2;
$m[$cm]['itemmenu_nom']='mCliGen';
$m[$cm]['itemmenu_tit']='Listado Clientes';
$m[$cm]['itemmenu_link']='com_clientes/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=2;
$m[$cm]['itemmenu_nom']='mCliIng';
$m[$cm]['itemmenu_tit']='Ingresar Cliente';
$m[$cm]['itemmenu_link']='com_clientes/clientes_form.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=3;
$m[$cm]['itemmenu_nom']='mInvGen';
$m[$cm]['itemmenu_tit']='General';
$m[$cm]['itemmenu_link']='com_inventario/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=3;
$m[$cm]['itemmenu_nom']='mInvPro';
$m[$cm]['itemmenu_tit']='Productos';
$m[$cm]['itemmenu_link']='com_inventario/inv_gest_prod.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=3;
$m[$cm]['itemmenu_nom']='mInvTip';
$m[$cm]['itemmenu_tit']='Tipos';
$m[$cm]['itemmenu_link']='com_inventario/inv_gest_tip.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=3;
$m[$cm]['itemmenu_nom']='mInvCat';
$m[$cm]['itemmenu_tit']='Categorias';
$m[$cm]['itemmenu_link']='com_inventario/inv_gest_cat.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=3;
$m[$cm]['itemmenu_nom']='mInvMar';
$m[$cm]['itemmenu_tit']='Marcas';
$m[$cm]['itemmenu_link']='com_inventario/inv_gest_mar.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=4;
$m[$cm]['itemmenu_nom']='mComGen';
$m[$cm]['itemmenu_tit']='Listado';
$m[$cm]['itemmenu_link']='com_compras/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=4;
$m[$cm]['itemmenu_nom']='mComIng';
$m[$cm]['itemmenu_tit']='Ingreso Compras';
$m[$cm]['itemmenu_link']='com_compras/compra_form.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=4;
$m[$cm]['itemmenu_nom']='mConAnu';
$m[$cm]['itemmenu_tit']='Anulación Compra';
$m[$cm]['itemmenu_link']='com_compras/anulacion.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=5;
$m[$cm]['itemmenu_nom']='mVenGen';
$m[$cm]['itemmenu_tit']='Listado Facturas';
$m[$cm]['itemmenu_link']='com_ventas/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=5;
$m[$cm]['itemmenu_nom']='mVenAnu';
$m[$cm]['itemmenu_tit']='Anulación Facturas';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=6;
$m[$cm]['itemmenu_nom']='mCtlGen';
$m[$cm]['itemmenu_tit']='Generar Catálogo';
$m[$cm]['itemmenu_link']='com_catalogos/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=6;
$m[$cm]['itemmenu_nom']='mCtlLis';
$m[$cm]['itemmenu_tit']='Listado Catálogos';
$m[$cm]['itemmenu_link']='';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=7;
$m[$cm]['itemmenu_nom']='mSisTyp';
$m[$cm]['itemmenu_tit']='Mantenimiento Tipos';
$m[$cm]['itemmenu_link']='com_types/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=7;
$m[$cm]['itemmenu_nom']='mSisTypR';
$m[$cm]['itemmenu_tit']='Regeneración Tipos';
$m[$cm]['itemmenu_link']='com_mandb/';//mant_tbl_types.php
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=7;
$m[$cm]['itemmenu_nom']='mSisMen';
$m[$cm]['itemmenu_tit']='Regenerar Menú';
$m[$cm]['itemmenu_link']='com_mandb/mant_menus_regen.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=4;
$m[$cm]['itemmenu_nom']='mComProv';
$m[$cm]['itemmenu_tit']='Proveedores';
$m[$cm]['itemmenu_link']='com_proveedores/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=7;
$m[$cm]['itemmenu_nom']='mSisMod';
$m[$cm]['itemmenu_tit']='Modulos';
$m[$cm]['itemmenu_link']='com_modulos/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=7;
$m[$cm]['itemmenu_nom']='mVenCic';
$m[$cm]['itemmenu_tit']='Ciclos Facturación';
$m[$cm]['itemmenu_link']='com_ventas/ciclos_facturacion.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=3;
$m[$cm]['itemmenu_nom']='mInvAtrib';
$m[$cm]['itemmenu_tit']='Atributos';
$m[$cm]['itemmenu_link']='com_atributos/';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;
//
$m[$cm]['menu_id']=1;$m[$cm]['itemmenu_parent']=5;
$m[$cm]['itemmenu_nom']='mVenIng';
$m[$cm]['itemmenu_tit']='Facturar';
$m[$cm]['itemmenu_link']='com_ventas/form.php';
$m[$cm]['itemmenu_icon']='';
$m[$cm]['itemmenu_order']='';
$cm++;

$totMenus=count($m);
for($i=1;$i<=$totMenus;$i++){
	if($m[$i]){
	$qry_insMenu=sprintf("INSERT INTO `tbl_menus_items`
	(itemmenu_id, menu_id, itemmenu_parent, itemmenu_nom, itemmenu_tit, itemmenu_link, itemmenu_icon, itemmenu_order, itemmenu_stat)
	VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s)",
		GetSQLValueString($m[$i]['itemmenu_id'],'int'),
		GetSQLValueString($m[$i]['menu_id'],'int'),
		GetSQLValueString($m[$i]['itemmenu_parent'],'int'),
		GetSQLValueString($m[$i]['itemmenu_nom'],'text'),
		GetSQLValueString($m[$i]['itemmenu_tit'],'text'),
		GetSQLValueString($m[$i]['itemmenu_link'],'text'),
		GetSQLValueString($m[$i]['itemmenu_icon'],'text'),
		GetSQLValueString($m[$i]['itemmenu_order'],'int'),
		GetSQLValueString('1','int'));
	$RS_insMenu=mysql_query($qry_insMenu)or die(mysql_error());
	$LOG.='<div>'.$qry_insMenu.'</div>';
	}
}
$_SESSION['LOG']['m']=$LOG;
header('Location: '.$RAIZc.'com_index/')
?>