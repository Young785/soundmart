$("#investButton").click(function() {
    var large = false;
    var investForm = document.getElementById("investForm");
    if (!large) {
        investForm.style.display = "block";
        large = true;
    } else {
        investForm.style.display = "none";
        large = false;
    }
    // sessionStorage.setItem("listID", $(".listID").val());
    // console.log(sessionStorage.getItem("listID"));
});

$(".unitNumber").on("keyup", function() {
    var unitValue = $(this).val() * 100 * 570;
    var paystack_fee = 1 / 5 * unitValue;
    var totalPayment = unitValue + paystack_fee;

    $("#totalAmount").val("₦" + totalPayment);
    $("#totalAmount2").val(totalPayment + "00");
    document.getElementById("paySum").innerHTML = "Pay ₦" + totalPayment;

    if ($(this).val() == '') {
        $("#totalAmount2").val(totalPayment + "00");
        $("#totalAmount").val(totalPayment);
        document.getElementById("paySum").innerHTML = "Pay ₦" + totalPayment;
    }
    // sessionStorage.setItem("unitNumber", $(this).val());
    // sessionStorage.setItem("listID", $(".listID").val());
    // console.log(sessionStorage.getItem("listID"));
});