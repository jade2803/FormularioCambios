<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='a.js'></script>
    <script src="jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

</head>
<body class="text-white p-5">
<header>
</header>
    <main>
        <div class="max-w-4xl mx-auto text-center flex justify-center">
            <h2 class="mb-4 text-3xl text-white tracking-tight font-extrabold p-8">
                "FORMULARIO DE GESTION DE CAMBIO"
            </h2>
        </div>
        <div class="container mx-auto flex items-center justify-center ">
            <div class="w-full md:w-3/4 lg:w-7/12 bg-slate-100 rounded-lg shadow-md p-10 bg-white">

                <section>
                    <form id = "miFormulario" action="" method = "POST"> 
                        <div class="mb-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-800 text-sm font-bold mb-2" for="nya">Solicitud de Cambio</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="ID_SOL" name="ID_SOL" type="text">
                                </div>
                                <div>
                                    <label class="block text-gray-800 text-sm font-bold mb-2" for="codigoSolicitud">Código de Solicitud</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="COD_SEG" name="COD_SEG" type="text">
                                </div>
                                <div>
                                    <label class="block text-gray-800 text-sm font-bold mb-2" for="version">Versión</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="VER_SOL" name="VER_SOL" type="text">
                                </div>
                                <div>
                                    <label class="block text-gray-800 text-sm font-bold mb-2" for="fecha">Fecha</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="FEC_SOL" name="FEC_SOL" placeholder="29/10/2023" type="date">
                                </div>
                            </div>
                        </div>

                        <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Datos de Identificación</h1>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="nombreProyecto">Nombre del Proyecto</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="NOM_PRO_SOL" name="NOM_PRO_SOL" type="text">
                            </div>
                            <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="codigoProyecto">Código del Proyecto</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="COD_PRO_SOL" name="COD_PRO_SOL" type="text">
                            </div>
                            <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-800 text-sm font-bold mb-2" for="nombreDirector">Nombre del Director del Proyecto</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="NOM_DIR_SOL" name="NOM_DIR_SOL" type="text">
                            </div>
                        </div>

                        <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Datos del Solicitante del Cambio</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombreSolicitante">Nombre del Solicitante</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="NOM_SOL_SOL" name="NOM_SOL_SOL" type="text">
                            </div>
                            <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="departamento">Departamento</label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="DEP_SOL" name="DEP_SOL" type="text">
                            </div>
                        </div>
                        <br />
                        <div class="sm:col-span-4 justify-center">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="EMAIL_SOL" name="EMAIL_SOL" type="text">
                          </div>
                        
                          <br />
                        
                            <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="telefono">Teléfono</label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="TEL_SOL" name="TEL_SOL" type="text">                                                </div>
                                    <br />
                                      <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Descripción del Cambio</h1>
                        <div class="sm:col-span-4 justify-center">
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="DES_SOL" name="DES_SOL"></textarea>
                        </div>

                        <br />

                        <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Justificación de la Propuesta</h1>
                        <div class="sm:col-span-4 justify-center">
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="JUS_SOL" name="JUS_SOL"></textarea>
                        </div>

                        <br />

                        <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Riesgos</h1>
                        <div class="sm:col-span-4 justify-center">
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="RIE_SOL" name="RIE_SOL"></textarea>
                        </div>

                        <br />
                            <script src="a.js"></script>

                            <section>
                            <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Actividades</h1>
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-gray-400 border border-gray-400">
                                <thead>
                                    <tr>
                                    <th id= "" name= "ID_ACT"  class="py-2 px-4 border-b">Actividad</th>
                                    <th id= "" name= "ID_SOL_PER" class="py-2 px-4 border-b">Id Solicitante</th>
                                    <th id= "" name= "ENTREGABLE"class="py-2 px-4 border-b">Entregable</th>
                                    <th id= "" name= "FEC_INICIO"class="py-2 px-4 border-b">Fecha de Inicio</th>
                                    <th id= "" name= "FEC_FIN" class="py-2 px-4 border-b">Fecha de Fin</th>
                                    
                                    </tr>
                                </thead>
                                <tbody id="activitiesTableBody">
                                </tbody>
                                </table>

                                <button type="button" class="mt-4 bg-gray-600 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded" onclick="agregarFila()">
                                    Añadir Actividad
                                </button>
                                <br/>
                                <div class="overflow-x-auto">
                                    <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Costos</h1>
                                    <table class="min-w-full bg-gray-400 border border-gray-400">
                                    <thead>
                                        <tr>
                                        <th class="py-2 px-4 border-b">ID del Costo</th>
                                        <th class="py-2 px-4 border-b">Descripción</th>
                                        <th class="py-2 px-4 border-b">Tipo de Costo</th>
                                        <th class="py-2 px-4 border-b">Importe</th>
                                        <th class="py-2 px-4 border-b">ID de Solicitud</th>
                                   
                                        </tr>
                                    </thead>
                                    <tbody id="costsTableBody">
                                    </tbody>
                                    </table>
                                    <button type="button" class="mt-4 bg-gray-600 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded" onclick="agregarCosto()">
                                    Añadir Costo
                                    <button type="button" class="mt-4 bg-gray-600 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded" onclick="agregarFila()">
                                Añadir Actividad
                            </button>
                            <br>
                            <br>
                            <div class="overflow-x-auto">
                                <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Costos</h1>
                                <table class="min-w-full bg-gray-400 border border-gray-400">
                                <thead>
                                    <tr>
                                    <th class="py-2 px-4 border-b">Descripción</th>
                                    <th class="py-2 px-4 border-b">Tipo de Costo</th>
                                    <th class="py-2 px-4 border-b">Importe</th>
                                    </tr>
                                </thead>
                                <tbody id="costsTableBody">
                                </tbody>
                                </table>
                                <button type="button" class="mt-4 bg-gray-600 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded" onclick="agregarCosto()">
                                Añadir Costo
                                </button>
                                <br>
                                <br>
                                <div class="flex justify-lefth">
                                    <div>
                                        <label class="block text-gray-800 text-sm font-bold mb-2" for="codigoProyecto">Total</label>
                                    </div>
                                    
                                    <input
                                        class="shadow appearance-none border rounded py-1 px-2 text-gray-800 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800"
                                        id="codigoProyecto"
                                        name="codigoProyecto"
                                        type="text"
                                        value="0.00" <!-- Inicializa el valor total a 0 -->
                                        readonly
                                    />
                                </div>
                            </div>  
                        </div>
                            </section>
                            <th class="py-2 px-4 border-b">ID APROBACION</th>
                            <td class="py-2 px-4 border-b">
                            <input type="text" class="w-full border rounded px-3 py-2" id= "ID_APRO" name="descripcion[]" />
                           </td>
                            <div id = "A"class="flex mb-4 items-center">
                                <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Aprobación de la Solicitud</h1>
                                
                                <label class="block text-gray-700 text-sm mr-8" for="si"></label>
                                <input type="radio" id="EST_APRO" name="aprobacion" class="form-radio h-5 w-5 ring-white">
                                <span class="ml-2 text-gray-700 mr-6">SI</span>
                                
                                <label class="block text-white text-sm mr-8" for="no"></label>
                                <input type="radio" id="no" name="aprobacion" class="form-radio h-5 w-5">
                                <span class="ml-2 text-gray-700">NO</span>
                              </div>
                              
                              
                              
                              <div class="sm:col-span-4 justify-center">
                                <label class="block text-gray-700 text-sm font-bold mr-8" for="fecha"> Fecha de Aprobación</label>
                                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-400 dark:text-gray-800" id="FEC_APRO" name="fecha">
                              </div>
                              
                              <br />
                              <div class="overflow-x-auto">
                                <h1 class="mb-4 text-gray-700 tracking-tight font-extrabold">Aprobado por:</h1>
                                <table class="min-w-full bg-gray-400 border border-gray-400">
                                  <thead>
                                    <tr>
                                      <th class="py-2 px-4 border-b text-gray-700">Cargo</th>
                                      <th class="py-2 px-4 border-b text-gray-700">Nombre</th>
                                      <th class="py-2 px-4 border-b text-gray-700">Firma</th>
                                      <th class="py-2 px-4 border-b text-gray-700">Id de Aprobacion</th>
                                    </tr>
                                  </thead>
                                  <tbody id="signaturesTableBody">
                                  </tbody>
                                </table>
                                <button type="button" class="mt-4 bg-gray-600 hover:bg-slate-500 text-white font-bold py-2 px-4 rounded" onclick="agregarFirma()">
                                  Añadir Firma
                                </button>
                              </div>
                              <br/>
                            
                    </form>
                    <div class="flex justify-center">
                                <button   onclick="EnviarDatos()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                  Enviar
                                </button>
                            </div>
                </section>
                <button onclick="generarPDF()" class="mt-4 bg-gray-600 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                    Generar PDF
                  </button>


            </div>
        </div>
    </div>
</main>
  
    <script src="a.js" defer></script>
  <script>
    function generarPDF() {
        // Ocultar elementos que no se quieren imprimir
        document.querySelectorAll('.no-imprimir').forEach(elemento => {
            elemento.style.display = 'none';
        });

        // Abrir el cuadro de diálogo de impresión
        window.print();

        // Restaurar la visibilidad de los elementos después de imprimir
        document.querySelectorAll('.no-imprimir').forEach(elemento => {
            elemento.style.display = 'block';
        });
    }
</script>
<style type="text/css" media="print">
    /* Estilos para impresión */
    body {
        font-size: 12pt;
        /* Agrega otros estilos que consideres apropiados para impresión */
    }

    /* Ocultar elementos que no quieres imprimir */
    .no-imprimir {
        display: none;
    }
</style>


  <script>
    function myFuntion(){
window.location.href="http://localhost/index"

    }
    function EnviarDatos(){
     
            fetch('insertar.php', {
             method: 'POST',
             headers: {
            'Content-Type': 'application/json',
            },
             body: JSON.stringify({
              //SOLICITUD
              ID_SOL: document.getElementById('ID_SOL').value,
              COD_SEG:document.getElementById('COD_SEG').value, 
              VER_SOL:document.getElementById('VER_SOL').value, 
              FEC_SOL:document.getElementById('FEC_SOL').value,
              NOM_PRO_SOL:document.getElementById('NOM_PRO_SOL').value,
              COD_PRO_SOL:document.getElementById('COD_PRO_SOL').value, 
              NOM_DIR_SOL:document.getElementById('NOM_DIR_SOL').value,
              NOM_SOL_SOL:document.getElementById('NOM_SOL_SOL').value, 
              DEP_SOL:document.getElementById('DEP_SOL').value, 
              EMAIL_SOL:document.getElementById('EMAIL_SOL').value, 
              TEL_SOL:document.getElementById('TEL_SOL').value,
              DES_SOL:document.getElementById('DES_SOL').value, 
              JUS_SOL:document.getElementById('JUS_SOL').value, 
              RIE_SOL:document.getElementById('RIE_SOL').value,
              //ACTIVIDAD
              ID_ACT:document.getElementById('ID_ACT').value,
              ENTREGABLE:document.getElementById('ENTREGABLE').value, 
              FEC_INICIO:document.getElementById('FEC_INICIO').value, 
              FEC_FIN:document.getElementById('FEC_FIN').value,
              ID_SOL_PER:document.getElementById('ID_SOL_PER').value, 
              // COSTOS_CAMBIO
              ID_COSTO:document.getElementById('ID_COSTO').value,
              DESCRIPCION_COSTO:document.getElementById('DESCRIPCION_COSTO').value, 
              TIPO_COSTO:document.getElementById('TIPO_COSTO').value, 
              IMPORTE:document.getElementById('IMPORTE').value,
              ID_SOL_PER_COSTO:document.getElementById('ID_SOL_PER_COSTO').value, 
              TOTAL:document.getElementById('TOTAL').value, 
              //APROBACION
              ID_APRO:document.getElementById('ID_APRO').value, 
              EST_APRO:document.getElementById('EST_APRO').value, 
              FEC_APRO:document.getElementById('FEC_APRO').value,
            
              //FIRMAS
              CAR_FIR:document.getElementById('CAR_FIR').value,
              NOM_FIR:document.getElementById('NOM_FIR').value, 
              FIR_FIR:document.getElementById('FIR_FIR').value, 
              ID_APRO_PER:document.getElementById('ID_APRO_PER').value,
            body: 'bar',
              userId: 1,
             }),
              })
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error('Error:', error));

    }
    function recargar () {
            window.location.href = window.location.href;
        }
  </script>

</body>

  
  
</html>
