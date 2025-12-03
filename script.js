window.onload = function() {
console.log("The page has fully loaded");
alert(asd)
};
document.getElementById('switch').addEventListener('click', (event) => {
    const inc = document.getElementById("inc");
    const exp = document.getElementById("exp");
    const type_slct = document.getElementById("type");
    const mode = document.querySelector("[name=mode]")

    inc.classList.toggle("selected");
    exp.classList.toggle("selected");

    if (inc.classList.contains('selected')) {
        type_slct.innerHTML = `
            <option value="default" disabled selected>choose a type</option>
            <option value="salary">Salary</option>
            <option value="freelance">Freelance</option>
            <option value="gifts">Gifts</option>
            <option value="investments">Investments</option>
            <option value="other">Other</option>
        `;
        mode.value = "income"
    } else {
        type_slct.innerHTML = `
        <option value="default" disabled selected>choose a type</option>
        <option value="food_groceries">Food & Groceries</option>
        <option value="transport">Transport</option>
        <option value="rent_housing">Rent/Housing</option>
        <option value="investments_expenses">nvestment Expense</option>
        <option value="health">Health</option>
        <option value="entertainment">Entertainment</option>
        <option value="shopping">Shopping</option>
        <option value="other">Other</option>
        `;
        mode.value = "expense"
    }
});

const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    const string_RGX = /^[A-Za-z0-9 .,&'()\-]+$/;

    if (form.querySelector('[name="type"]').value == 'default') {
        Swal.fire({icon: "error", title: "Oops...", text: "Please enter a valid type",});
        return
    }
    if (!form.querySelector('[name="amount"]').value || form.querySelector('[name="amount"]').value < 0) {
        Swal.fire({icon: "error", title: "Oops...", text: "Please enter a valid amount",});
        return
    }
    if (!form.querySelector('[name="date"]').value){
        Swal.fire({icon: "error", title: "Oops...", text: "Please enter a valid date",});
        return
    }
    if (form.querySelector('[name="amount"]').value < 0) {
        Swal.fire({icon: "error", title: "Oops...", text: "Please enter a valid amount",});
        return
    }
    if (!string_RGX.test(form.querySelector('[name="desc"]').value)) {
        Swal.fire({icon: "error", title: "Oops...", text: "Please enter a valid description",});
        return
    }

    Swal.fire({icon: "success", title: "Oops...", text: "Please enter a valid type",});
    return
});