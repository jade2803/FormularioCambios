// a.js
function agregarFila() {
    const tableBody = document.getElementById('activitiesTableBody');
    const nuevaFila = `
      <tr>
      <td class="py-2 px-4 border-b">
          <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id = "ID_ACT"name="entregable[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id= "ID_SOL_PER" name="ID_SOL_PER[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id="ENTREGABLE" name="ENTREGABLE[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="date" class="w-full sm:w-auto border rounded px-3 py-2" id = "FEC_INICIO" name="FEC_INICIO[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="date" class="w-full sm:w-auto border rounded px-3 py-2" id= "FEC_FIN" name="FEC_FIN[]" />
        </td>
     
      </tr>
    `;
    tableBody.insertAdjacentHTML('beforeend', nuevaFila);
  }
function agregarCosto() {
    const tableBody = document.getElementById('costsTableBody');
    const nuevaFila = `
      <tr>
      <td class="py-2 px-4 border-b">
      <input type="text" class="w-full border rounded px-3 py-2" id= "ID_COSTO" name="descripcion[]" />
     </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full border rounded px-3 py-2" id= "DESCRIPCION_COSTO" name="descripcion[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full border rounded px-3 py-2" id = "TIPO_COSTO"name="tipoCosto[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full border rounded px-3 py-2" id = "IMPORTE" name="importe[]" />
        </td>
        <td class="py-2 px-4 border-b">
        <input type="text" class="w-full border rounded px-3 py-2" id= "ID_SOL_PER_COSTO" name="descripcion[]" />
        </td>
      </tr>
    `;
    tableBody.insertAdjacentHTML('beforeend', nuevaFila);
  }
  function agregarFirma() {
    const tableBody = document.getElementById('signaturesTableBody');
    const nuevaFila = `
      <tr>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id= "CAR_FIR"name="cargo[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id = "NOM_FIR"name="nombre[]" />
        </td>
        <td class="py-2 px-4 border-b">
          <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id = "FIR_FIR"name="firma[]" />
        </td>
        <td class="py-2 px-4 border-b">
        <input type="text" class="w-full sm:w-auto border rounded px-3 py-2" id = "ID_APRO_PER"name="aprobacion pertenece[]" />
      </td>
      </tr>
    `;
    tableBody.insertAdjacentHTML('beforeend', nuevaFila);
  }
  