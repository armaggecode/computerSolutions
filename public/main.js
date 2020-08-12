$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

window.setTimeout(function() {
    $("#msg-alert").alert('close');
    }, 2000);

$('#deleteCust').on('show.bs.modal', function (e) {
    let id = $(e.relatedTarget).data().id;
    console.log(id);
    $(e.currentTarget).find('#IdCustomerDel').val(id);
})

$('#updateCust').on('show.bs.modal', function (e) {
    let id = $(e.relatedTarget).data().id;
    let cardId = document.getElementById('cardID' + id).innerText;
    let name = document.getElementById('name' + id).innerText;
    let lastName = document.getElementById('lastName' + id).innerText;
    let gender = document.getElementById('gender' + id).innerText;
    let address = document.getElementById('address' + id).innerText;
    let phone = document.getElementById('phone' + id).innerText;
    let email = document.getElementById('email' + id).innerText;
    let city = document.getElementById('city' + id).innerText;

    $(e.currentTarget).find('#idCustomerUpd').val(id);
    $(e.currentTarget).find('#cardIdCustomerUpd').val(cardId);
    $(e.currentTarget).find('#nameCustomerUpd').val(name);
    $(e.currentTarget).find('#lastNameCustomerUpd').val(lastName);
    $(e.currentTarget).find('#genderCustomerUpd').val(gender);
    $(e.currentTarget).find('#addressCustomerUpd').val(address);
    $(e.currentTarget).find('#phoneCustomerUpd').val(phone);
    $(e.currentTarget).find('#emailCustomerUpd').val(email);
    $(e.currentTarget).find('#cityCustomerUpd').val(city);
});

$('#deleteProd').on('show.bs.modal', function (e) {
    let id = $(e.relatedTarget).data().id;
    console.log(id);
    $(e.currentTarget).find('#IdProductDel').val(id);
})

$('#updateProd').on('show.bs.modal', function (e) {
    let id = $(e.relatedTarget).data().id;
    let code = document.getElementById('productCode' + id).innerText;
    let name = document.getElementById('name' + id).innerText;
    let brand = document.getElementById('brand' + id).innerText;
    let quantity = document.getElementById('quantity' + id).innerText;
    let purchasePrice = document.getElementById('purchasePrice' + id).innerText;
    let salePrice = document.getElementById('salePrice' + id).innerText;
    let stock = document.getElementById('stock' + id).innerText;
    let category = document.getElementById('category' + id).innerText;
    let supplier = document.getElementById('supplier' + id).innerText;
    let description = document.getElementById('description' + id).innerText;

    $(e.currentTarget).find('#idProductUpd').val(id);
    $(e.currentTarget).find('#productCodeUpd').val(code);
    $(e.currentTarget).find('#nameProductUpd').val(name);
    $(e.currentTarget).find('#brandUpd').val(brand);
    $(e.currentTarget).find('#quantityUpd').val(quantity);
    $(e.currentTarget).find('#purchasePriceUpd').val(purchasePrice);
    $(e.currentTarget).find('#salePriceUpd').val(salePrice);
    $(e.currentTarget).find('#unitInStockUpd').val(stock);
    $(e.currentTarget).find('#CategoryUpd').val(category);
    $(e.currentTarget).find('#SupplierUpd').val(supplier);
    $(e.currentTarget).find('#descriptionUpd').val(description);
});
