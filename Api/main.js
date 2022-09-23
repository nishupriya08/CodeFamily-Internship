async function loadIntoTable(url, table) {
    const tableHead = table.querySelector("thead");
    const tableBody = table.querySelector("tbody");
    const response = await fetch(url);
    const { headers, rows } = await response.json();
    
    tableHead.innerHTML = "<tr></tr>";
    tableBody.innerHTML = "";
    
    for (const headerText of headers) {
      const headerElement = document.createElement("th");
      headerElement.textContent = headerText;
      tableHead.querySelector("tr").appendChild(headerElement);
    }
    
    for (const row of rows) {
      const rowElement = document.createElement("tr");
      for (const cellText of row) {
        const cellElement = document.createElement("td");
        cellElement.textContent = cellText;
        rowElement.appendChild(cellElement);
      }
      tableBody.appendChild(rowElement);
    }
  }
  
  loadIntoTable("data.json",document.querySelector("table"));
  