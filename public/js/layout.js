//JS Functions
function searchFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("searchUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function tableSearchFunction() {
    
    var input, inputStore, inputQuantity, filter, filterStore, filterQuantity;
    var table, tr, td, i, txtValue, txtValueStore, txtValueQuantity;
    input = document.getElementById("tableInput");
    inputStore = document.getElementById("tableStoreInput");
    inputQuantity = document.getElementById("tableQuantityInput");
    filter = input.value.toUpperCase();
    filterStore = inputStore.value.toUpperCase();
    filterQuantity = parseInt(inputQuantity.value);
    if(isNaN(filterQuantity)){filterQuantity = 0;}
    table = document.getElementById("searchTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      tdStore = tr[i].getElementsByTagName("td")[2];
      tdQuantity = tr[i].getElementsByTagName("td")[3];
      if (td) {
        txtValue = td.textContent || td.innerText;
        txtValueStore = tdStore.textContent || tdStore.innerText;
        txtValueQuantity = tdQuantity.textContent || tdQuantity.innerText;
        quantity = parseInt(txtValueQuantity);
        if (txtValue.toUpperCase().indexOf(filter) > -1 
            && txtValueStore.toUpperCase().indexOf(filterStore) > -1 
            && quantity > filterQuantity) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }

function deliveredSearch(){
  var start, end, table, tr, td, i, dateValue;
  var vendor, store, tdStore, tdVendor;
  start = document.getElementById("start");
  start = new Date(start.value);
  end = document.getElementById("end");
  end = new Date(end.value);
  vendor = document.getElementById("vendor");
  vendor = vendor.value.toUpperCase();
  store = document.getElementById("store");
  store = store.value.toUpperCase();
  table = document.getElementById("deliveredTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    tdStore = tr[i].getElementsByTagName("td")[1];
    tdVendor = tr[i].getElementsByTagName("td")[2];
    if (td) {
      dateValue = td.textContent || td.innerText;
      dateValue = new Date(dateValue.substring(0,10));
      tdStore = tdStore.textContent || tdStore.innerText;
      tdVendor = tdVendor.textContent || tdVendor.innerText;
      if (start <= dateValue && end >= dateValue
            && tdStore.toUpperCase().indexOf(store) > -1
            && tdVendor.toUpperCase().indexOf(vendor) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function returnSearch() {
    var input, table, tr, td, i, txtValue;
    input = document.getElementById("returnInput");
    input = input.value.toUpperCase();
    table = document.getElementById("returnTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(input) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }


// Open/Close Nav for the Navbar

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "300px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    var navEls = document.getElementsByClassName("navtext");
    for (i = 0; i < navEls.length; i++) {
        navEls[i].style.display = "inline";
    }
    document.getElementById("navlogo").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "50px";
    document.getElementById("main").style.marginLeft= "50px";
    document.body.style.backgroundColor = "white";
    var navEls = document.getElementsByClassName("navtext");
    for (i = 0; i < navEls.length; i++) {
        navEls[i].style.display = "none";
    }
    document.getElementById("navlogo").style.display = "inline";
}



//------------------------------------------------------------------

//JQuery

$(document).ready(function() {
    $('.form-select2').select2();
});

