let orderForm = document.getElementById("order-form");

orderForm.addEventListener("submit", (e) => {
    e.preventDefault();
    
    let name = document.getElementById("product-name");
    let amount = document.getElementById("amount");
    let details = document.getElementById("details");

    const addRow = () => {
        let tableRef = document.getElementById("orders-table")

        let newRow = tableRef.insertRow(-1);

        let nameCell = newRow.insertCell(0);
        let amountCell = newRow.insertCell(1);
        let detailsCell = newRow.insertCell(2);

        let nameText = document.createTextNode(name.value);
        let amountText = document.createTextNode(amount.value);
        let detailsText = document.createTextNode(details.value);
        
        nameCell.appendChild(nameText);
        amountCell.appendChild(amountText);
        detailsCell.appendChild(detailsText);
    }

    addRow();
});