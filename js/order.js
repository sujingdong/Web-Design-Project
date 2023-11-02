// default order page is with bubble tea menu, click on the side navigation box allow user to switch between menus
window.onload = function (){
    var paybtn = document.querySelector('#pay');
    var totalPrice = document.querySelector('#sum');
    var totalCount = document.querySelector('#totalCount');
    // click on the pay buttion, jump to orderplaced page if the basket is not empty
    paybtn.onclick = function (){
        if(totalPrice.innerHTML != '0' && totalCount.innerHTML != '0'){
            location.href = "order_placed.php";
        }
        else{
            alert("You have nothing in the basket!");
        }
    }
    
    var bubbleTea = [
        "Original Milk Tea",
        "Taro Milk Tea",
        "Brown Sugar Milk Tea",
        "Matcha Milk Tea",
        "Coffee Milk Tea",
        "Roasted Milk Tea",
        "Thai Milk Tea",
        "Ovaltine Milk Tea",
        "Jasmine Milk Green",
    ];
    var container = document.querySelector('.product-container');
    var title = document.querySelector('.title');
    
    //heading for current menu
    title.innerHTML = "<span>Bubble Tea</span>"
    
    // create the menu container, fill in with the elements in corresponding array
    for (i in bubbleTea){
        container.innerHTML += "<div class='product-content'>"+"<span class='product-name'>"+bubbleTea[i]+"</span><span>From € <p class='product-price'>5</p></span><i class='bi bi-bag-plus add'></i></div>";
    }
    addToCart();
    // deleteItem();
}

// function to display bubbletea menu onclick
function bubbleTea(){
    var bubbleTea = [
        "Original Milk Tea",
        "Taro Milk Tea",
        "Brown Sugar Milk Tea",
        "Matcha Milk Tea",
        "Coffee Milk Tea",
        "Roasted Milk Tea",
        "Thai Milk Tea",
        "Ovaltine Milk Tea",
        "Jasmine Milk Green",
    ];
    
    var container = document.querySelector('.product-container');
    var title = document.querySelector('.title');
    var name = title.innerText;
    
    // if the last menu displayed was not Bubble tea, then remove the previous menu, and display current one, otherwise it stays the same
    if(name != "Bubble Tea"){
        container.innerHTML = ' ';
        title.innerHTML = "<span>Bubble Tea</span>";
        for (var i=0; i<bubbleTea.length; i++){
            container.innerHTML += "<div class='product-content'>"+"<span class='product-name'>"+bubbleTea[i]+"</span><span>From € <p class='product-price'>5</p></span><i class='bi bi-bag-plus add'></i></div>";
        }
    }
    addToCart();
    // deleteItem();
}

// function to display fruit tea menu onclick
function fruitTea(){
    var fruitTea = [
        "Four Season",
        "White Peach Oolong",
        "Mango Fruit Tea",
        "Grapefruit Jasmine",
        "Lemon Passion",
    ];

    var container = document.querySelector('.product-container');
    var title = document.querySelector('.title');
    var name = title.innerText;

    // if the last menu displayed was not Fruit tea, then remove the previous menu, and display current one, otherwise it stays the same
    if(name != "Fruit Tea"){
        container.innerHTML='';
        title.innerHTML = "<span>Fruit Tea</span>";
        for (i in fruitTea){
        container.innerHTML += "<div class='product-content'>"+"<span class='product-name'>"+fruitTea[i]+"</span><span>From € <p class='product-price'>5.5</p></span><i class='bi bi-bag-plus add'></i></div>";
        }
    }
    addToCart();
    // deleteItem();
}

// function to display waffle menu onclick
function waffle(){
    var waffle = [
        "Classic(Plain)",
        "Chocolate(Ice cream + Chocolate sauce + Kinder Bueno + Chocolate stick)",
        "Oreo(Orel + Nutella + Ice cream + Chocolate sauce + Cream)",
        "Nuts(Walnut + Almond flakes + Nutella + Ice cream + Caramel sauce)",
        "Fruity(Strawberry + Ice cream + Strawberry sauce)"
    ];
    var waffle_price = [
        "5.5",
        "7",
        "6.5",
        "6.5",
        "6.5",
    ]

    var container = document.querySelector('.product-container');
    var title = document.querySelector('.title');
    var name = title.innerText;
    
    // if the last menu displayed was not waffle, then remove the previous menu, and display current one, otherwise it stays the same
    if(name != "Bubble Waffle"){
        container.innerHTML='';
        title.innerHTML = "<span>Bubble Waffle</span>";


        for (var i=0; i<waffle.length; i++){
        container.innerHTML += "<div class='product-content'>"+"<span class='product-name'>"+waffle[i]+"</span><span>From €<p class='product-price'>"+waffle_price[i]+"</p></span><i class='bi bi-bag-plus add'></i></div>";
        }
    }
    addToCart();
    // deleteItem();
}

// function to display cake menu
function cake(){
    var cake = [
        "Lemon Cheese Cake",
        "Tiramisu",
        "Coconut Milk Basque Cake",
        "Oreo Crepe Cake",
        "Matcha Crepe Cake",
        "Chocolate Brownie",
        "Green Tea Mousse"
    ];

    var container = document.querySelector('.product-container');
    var title = document.querySelector('.title');
    var name = title.innerText;
    
    // if the last menu displayed was not cake, then remove the previous menu, and display current one, otherwise it stays the same
    if(name != "Cake"){
        container.innerHTML='';
        title.innerHTML = "<span>Cake</span>";

        for (i in cake){
        container.innerHTML += "<div class='product-content'><span class='product-name'>"+cake[i]+"</span><span>€<p class='product-price'>10</p></span><i class='bi bi-bag-plus add'></i></div>";
        }
    }
    addToCart();
    // deleteItem();
}

// function to add product to basket
function addToCart(){
    var addbtns = document.querySelectorAll('.add');
    var names = document.querySelectorAll('.product-name');
    var prices = document.querySelectorAll('.product-price');
    
    // give all add buttions on the page an onclick function
    for(var i=0; i<addbtns.length; i++){
        addbtns[i].index = i;

        // click add button will create a row in the empty table, containing name, unitpice, quantity, subtotal of the product added
        addbtns[i].onclick = function() {
        var cart = document.querySelector('.cart-content');
        var item = document.createElement('tr');
        var name = names[this.index];
        var price = prices[this.index];
        var totalPrice = document.querySelector('#sum');
        var totalCount = document.querySelector('#totalCount');
        totalPrice.innerHTML = parseFloat(totalPrice.innerHTML) + parseFloat(price.innerHTML);
        totalCount.innerHTML = parseInt(totalCount.innerHTML) + 1;
        item.className = "rows";
        item.innerHTML = "<td class='product'>"+name.innerHTML+"</td><td class='amount'><input type='button' class='minus' value='-'/><span class='count'>1</span><input type='button' class='plus' value='+'/></td><td class='unitPrice'>"+price.innerHTML+"</td><td class='subTotal'>"+price.innerHTML+"</td><td><i class='bi bi-x-square delete' onclick='deleteItem();''></i></td>";
        cart.appendChild(item);

        var plus = document.querySelectorAll('.plus');
        var minus = document.querySelectorAll('.minus');
        var count = document.querySelectorAll('.count');
        var price = document.querySelectorAll('.subTotal');
        var unitPrice = document.querySelectorAll('.unitPrice');
        var totalPrice = document.querySelector('#sum');
        var totalCount = document.querySelector('#totalCount');
        var rows = document.querySelectorAll('.rows');
        
        // functions to change quantity
        for (var i=0; i<rows.length; i++){
            toCount(i);
        }

        function toCount (index){
            plus[index].onclick = function(){
                changeCount(index, +1);
            }

            minus[index].onclick = function (){
                changeCount(index,-1);
            }
        }

        function changeCount(index,change){
            var num = parseInt(count[index].innerHTML) + change;
            // set the maximum quantity
            if(num>10){
                alert("You have reached the maximum!");
                count[index].innerHTML = count[index].innerHTML;
                price[index].innerHTML = price[index].innerHTML;
            }
            // set the minimum quantity and if after click minus, the quantity is 0, remove the product from basket
            else if(num==0){
                if (confirm("Are you sure you want to remove this item from the basket?") == true){
                    cart.removeChild(rows[index]);
                    totalCount.innerHTML = parseInt(totalCount.innerHTML)-parseInt(count[index].innerHTML);
                    totalPrice.innerHTML = parseFloat(totalPrice.innerHTML) - parseFloat(price[index].innerHTML);
                }
            }
            // change the quantity and subtotal
            else {
                count[index].innerHTML = num;
                price[index].innerHTML = num * (parseFloat(unitPrice[index].innerHTML)) * 10/10;
                changeTotal();
            }
        }
        // deleteItem();
        }
        // deleteItem();

    }

    // function to change total item in the basket and the total price everytime after changing quantity
    function changeTotal(){
        var totalPrice = document.querySelector('#sum');
        var totalCount = document.querySelector('#totalCount');
        var count = document.querySelectorAll('.count');
        var price = document.querySelectorAll('.subTotal');
        var numTotal = 0;
        var sum = 0;
        // iterates through all the products in the basket, sum up their subtotal and quantity
        for(var i=0; i<count.length; i++){
            numTotal += parseInt(count[i].innerHTML);
            sum += parseFloat(price[i].innerHTML);
        }
        totalCount.innerHTML = numTotal;
        totalPrice.innerHTML = sum;
    }
}

// function to remove products from the basket
function deleteItem(){
    var rows = document.querySelectorAll('.rows');
    var cart = document.querySelector('.cart-content');
    var totalPrice = document.querySelector('#sum');
    var totalCount = document.querySelector('#totalCount');
    var deleteBtns = document.querySelectorAll('.delete');
    for(var j=0; j<rows.length; j++){
        deleteBtns[j].onclick = function(){
            j=j-1;
            var rows = document.querySelectorAll('.rows');
            var count = document.querySelectorAll('.count');
            var price = document.querySelectorAll('.subTotal');
            // message to clarify with user that they want to remove the item
            if (confirm("Are you sure you want to remove this item from the basket?") == true){
                if(rows.length == 1){
                    cart.removeChild(rows[0]);
                    totalCount.innerHTML = '0';
                    totalPrice.innerHTML = '0';
                }
                else{
                    cart.removeChild(rows[j]);
                    // update the total items in the basket and total price
                    totalCount.innerHTML = parseInt(totalCount.innerHTML)-parseInt(count[j].innerHTML);
                    totalPrice.innerHTML = parseFloat(totalPrice.innerHTML) - parseFloat(price[j].innerHTML);

                }
            }
            else{
                totalCount.innerHTML = totalCount.innerHTML;
                totalPrice.innerHTML = totalPrice.innerHTML;
            }
        }
    }
    
}
