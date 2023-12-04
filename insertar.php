<?php
include 'conexion.php';
//$datos = json_decode(parse_str(file_get_contents("php://input"), $data),true);
// Recuperar datos del formulario
$json_data = file_get_contents("php://input");

// Decodificar el JSON en un array asociativo
$data = json_decode($json_data, true);

echo var_dump ($data);

//SOLICITUD

$idSolicitud = $data['ID_SOL'];
$codigoSolicitud = $data['COD_SEG'];
$version = $data['VER_SOL'];
$fechaSolicitud = $data['FEC_SOL'];

$nombreProyecto = $data['NOM_PRO_SOL'];
$codigoProyecto = $data['COD_PRO_SOL'];
$nombreDirector = $data['NOM_DIR_SOL'];

$nombreSolicitante = $data['NOM_SOL_SOL'];
$departamento = $data['DEP_SOL'];
$email = $data['EMAIL_SOL'];
$telefono = $data['TEL_SOL'];

$descripcionCambio = $data['DES_SOL'];
$justificacionPropuesta = $data['JUS_SOL'];
$riesgos = $data['RIE_SOL'];

//ACTIVIDADES
$idActividad = $data['ID_ACT'];
$entregable = $data['ENTREGABLE'];
$fechaInicio = $data['FEC_INICIO'];
$fechaFin = $data['FEC_FIN'];
$idsolicitante = $data['ID_SOL_PER'];
//COSTOS_CAMBIO
$id_costo = $data['ID_COSTO'];
$descripcionCosto  = $data ['DESCRIPCION_COSTO'];
$tipocosto = $data ['TIPO_COSTO'];
$importe = $data['IMPORTE'];
$Solicitudpertenece = $data['ID_SOL_PER_COSTO'];
$total = $data['TOTAL'];

//APROBADO
$idaprobacion = $data ['ID_APRO'];
$estadoaprobacion = $data ['EST_APRO'];
$fechaaprobacion = $data ['FEC_APRO'];
//FIRMAS
$cargo = $data['CAR_FIR'];
$nombre = $data['NOM_FIR'];    
$Firma = $data['FIRMA'];
$id_apro_per = $data['ID_APRO_PER'];    

$sqlInsertar4 = "INSERT INTO APROBADO (
    ID_APRO,EST_APRO,FEC_APRO
    )VALUES(
        '$idaprobacion','$estadoaprobacion','$fechaaprobacion');";

if($conn->query($sqlInsertar4)==TRUE){
    echo json_encode("Se inserto correctamente 4");
}else{
    echo  json_encode("No se inserto correctamente");
}

$sqlInsertar5 = "INSERT INTO FIRMAS (
    CAR_FIR,NOM_FIR,FIR_FIR,ID_APRO_PER
    )VALUES(
        '$cargo','$nombre','$Firma','$id_apro_per');";



if($conn->query($sqlInsertar5)==TRUE){
    echo json_encode("Se inserto correctamente 4");
}else{
    echo  json_encode("No se inserto correctamente");
}


$sqlInsertar3 = "INSERT INTO COSTOS_CAMBIO(
    ID_COSTO, DESCRIPCION_COSTO,TIPO_COSTO,IMPORTE,ID_SOL_PER_COSTO, TOTAL
)VALUES(
    '$id_costo','$descripcionCosto','$tipocosto','$importe','$Solicitudpertenece','$total');";
    
if($conn->query($sqlInsertar3)==TRUE){
    echo json_encode("Se inserto correctamente 3");
}else{
    echo  json_encode("No se inserto correctamente");
}

$sqlInsertar = "INSERT INTO SOLICITUD (
    ID_SOL, COD_SEG, VER_SOL, FEC_SOL,
    NOM_PRO_SOL, COD_PRO_SOL, NOM_DIR_SOL,
    NOM_SOL_SOL, DEP_SOL, EMAIL_SOL, TEL_SOL,
    DES_SOL, JUS_SOL, RIE_SOL
) VALUES (
    '$idSolicitud', '$codigoSolicitud', '$version', '$fechaSolicitud',
    '$nombreProyecto', '$codigoProyecto', '$nombreDirector',
    '$nombreSolicitante', '$departamento', '$email', '$telefono',
    '$descripcionCambio', '$justificacionPropuesta', '$riesgos'
);";

if($conn->query($sqlInsertar)==TRUE){
    echo json_encode("Se inserto correctamente");
}else{
    echo  json_encode("No se inserto correctamente 1 ");
}

$sqlInsertar2 = "INSERT INTO ACTIVIDADES(
    ID_ACT,ENTREGABLE,FEC_INICIO,FEC_FIN,ID_SOL_PER)
     VALUES(
        '$idActividad', '$entregable','$fechaInicio','$fechaFin','$idsolicitante');";

if($conn->query($sqlInsertar2)==TRUE){
    echo json_encode("Se inserto correctamente");
}else{
    echo  json_encode("No se inserto correctamente 2");
}


?>
