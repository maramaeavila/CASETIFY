$(document).ready(function () {
  function loadCart() {
    $.ajax({
      url: "fetchcart.php",
      type: "GET",
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          let cartHTML = "";
          response.cart.forEach((item) => {
            cartHTML += `
                        <tr>
                            <td><input type="checkbox" class="cart-checkbox" data-price="${
                              item.price * item.quantity
                            }" value="${item.id}"></td>
                            <td>${item.product_name}</td>
                            <td><img src="${item.image}" alt="${
              item.product_name
            }" class="img-fluid" style="width: 80px; height: auto;"></td>
                            <td>${item.quantity}</td>
                            <td>₱ ${parseFloat(item.price).toFixed(2)}</td>
                        </tr>
                        `;
          });
          $("#cart-table").html(cartHTML);
        } else {
          Swal.fire({
            title: "Error",
            text: "Failed to load cart",
            icon: "error",
            backdrop: false,
          });
        }
      },
      error: function () {
        Swal.fire({
          title: "Error",
          text: "Failed to load cart",
          icon: "error",
          backdrop: false,
        });
      },
    });
  }

  loadCart();

  function updateTotal() {
    let total = 0;
    $(".cart-checkbox:checked").each(function () {
      total += parseFloat($(this).data("price"));
    });
    $("#total-amount").text(total.toFixed(2));
  }

  $(document).on("change", ".cart-checkbox", updateTotal);

  $("#select-all").click(function () {
    $(".cart-checkbox").prop("checked", $(this).prop("checked"));
    updateTotal();
  });

  $("#add-selected").click(function () {
    let selectedItems = [];
    $(".cart-checkbox:checked").each(function () {
      selectedItems.push($(this).val());
    });

    if (selectedItems.length === 0) {
      Swal.fire({
        title: "No Selection",
        text: "Please select at least one item.",
        icon: "warning",
        backdrop: false,
      });
      return;
    }

    $.ajax({
      url: "addselectcart.php",
      type: "POST",
      data: {
        cart_ids: selectedItems,
      },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          Swal.fire({
            title: "Success",
            text: response.message,
            icon: "success",
            backdrop: false,
          });
          loadCart();
          $("#total-amount").text("0.00");
        } else {
          Swal.fire({
            title: "Error",
            text: response.message,
            icon: "error",
            backdrop: false,
          });
        }
      },
      error: function () {
        Swal.fire({
          title: "Error",
          text: "Failed to add items",
          icon: "error",
          backdrop: false,
        });
      },
    });
  });
});
