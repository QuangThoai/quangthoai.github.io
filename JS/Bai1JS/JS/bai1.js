// add product in list
function add_product(){
    var name=document.getElementById("product_name").value;
    document.getElementById("product_name").focus();
    var x=name.trim().length;

    //check length of name product
    if(x==0)
    {
        alert("Product can not null");
        return;
    }
    if(x>=20)
    {
        alert("Length of product can not more than 20 characters");
        return;
    }
    var list_product=document.getElementById("list");
    var childr=list_product.children;
    var product=document.createElement("div");
    product.setAttribute("class","list-product-index");

    //check product exists
    for(var i=0; i<childr.length; i++)
    {
        if(childr[i].children[1].innerHTML == name)
        {
          alert("Product already exists");
          return;
        }
    }
    //create product in list
    var index=document.createElement("p");
    index.setAttribute("class","index-product");
    index.innerHTML=childr.length +1;

    var product_name=document.createElement("span");
    product_name.setAttribute("class","product-name");
    product_name.innerHTML=name;

    var btn_close=document.createElement("img");
    btn_close.setAttribute("class","btn-close");
    btn_close.setAttribute("src","images/btn_close.jpg");
    // Event delete when click into button close
    btn_close.onclick= function() {
      var del = btn_close.parentNode;
      var parentDel = del.parentNode;
      parentDel.removeChild(del);
      var index = del.children[0].innerHTML;
      for (i = index - 1; i < parentDel.children.length; i++) {
        parentDel.children[i].children[0].innerHTML = i + 1;
      }
    }
    product.appendChild(index);
    product.appendChild(product_name);
    product.appendChild(btn_close);
    list_product.appendChild(product);
    document.getElementById("product_name").value="";
}