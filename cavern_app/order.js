const form = document.querySelector("form");

function handleSubmitRequest(event) {
    const hasName = (form.name.value !== "");
    let hasCheese = false;
    for (var i = 0; i < form.cheese.length; i++) {
        if (form.cheese[i].checked) {
            hasCheese = true;
        }
    }
    // yes/no for fries. only 2 options max
    const hasFries = form.fries[0].checked || form.fries[1].checked;

    const success = hasName && hasCheese && hasFries;
    if (!success) {
        alert("Please fill all required fields!");
        event.preventDefault();
    }
}
form.addEventListener("submit", handleSubmitRequest);


function handleClick(event) {
    $(".options").show();
    if (this.id === "burgsand") {
        $("#type-burgsand").show()
        $("#type-wrap").hide()
    }
    else {
        $("#type-wrap").show()
        $("#type-burgsand").hide()
    }
}


$("input[name='entree']").each(function(index) {
    console.log($(this).prop("checked"));
    $(this).on("click", handleClick);
});

$(".options").hide();
