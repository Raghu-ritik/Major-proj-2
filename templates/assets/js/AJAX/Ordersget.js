// Create an XMLHttpRequest object
function GetNewOrders(){
  console.log("This is running Repeatly !");
  
  const xhttp = new XMLHttpRequest();
  
  // Define a callback function
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let getUpdateOrder = document.getElementById("getUpdateOrder");
      if(this.responseText){
        let ResponseTxt = JSON.parse(this.responseText);
            if(localStorage.getItem("Orders")){
                let localItem = localStorage.getItem("Orders")
                localItem= JSON.parse(localItem);
                let newOrder = document.getElementById("newOrder");
                newOrder.innerHTML = "";
                if(localItem.length<ResponseTxt.length){
                    newOrdr = `<div class="alert alert-danger" role="alert">
                                    A new Order is Added !.
                                </div>`;
                    newOrder.innerHTML = newOrdr;
                    console.log("An New Order is Made!");
                }
              }
            localStorage.setItem("Orders",this.responseText);
            let TRSTR = "";
            ResponseTxt.forEach(element => {
                TRSTR += `<tr>
                <td>${element.C_ID} </td>
                <td>${element.P_Name } </td>
                <td>${element.Quantity }</td>
                <td>${element.customer }</td>
                <td>${element.payment_type }</td>
                <td>${element.current_status }</td>
                <td><div class="btn-group">
                      <button type="button" class="btn btn-outline-primary">Action</button>
                      <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <input type="button" class="btn btn-primary my-1 DI_BTN " value="Order Accepted" />
                        <input type="button" class="btn btn-primary my-1 DI_BTN " value="Food is Preparing" />
                        <input type="button" class="btn btn-primary my-1 DI_BTN_${element.C_ID}" value="Food ready to recieve" />
                        <input type="button" class="btn btn-primary my-1 DI_BTN_${element.C_ID}" value="Order Completed" />
                      </div>
                    </div></td>
                </tr>   `;
                 
            });
            // console.log(TRSTR);
            getUpdateOrder.innerHTML = TRSTR;

        }
        // console.log( this.responseText );
    }
  };

// Send a request
xhttp.open("GET", "Ajax_API/Orders_update.php?action=Manager");
xhttp.send();
}
setInterval(GetNewOrders,30000);