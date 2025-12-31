function addItem() {
    let itemName = document.getElementById("itemName").value;
    let location = document.getElementById("location").value;
    let status = document.getElementById("status").value;

    if (itemName === "" || location === "") {
        alert("Please fill all fields");
        return;
    }

    let li = document.createElement("li");
    li.textContent = itemName + " - " + location + " (" + status + ")";
    
    document.getElementById("itemList").appendChild(li);

    document.getElementById("itemName").value = "";
    document.getElementById("location").value = "";
}