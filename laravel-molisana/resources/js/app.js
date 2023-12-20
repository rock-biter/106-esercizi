import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const confirmInputs = document.querySelectorAll("[data-confirm]");
console.log(confirmInputs);

confirmInputs.forEach((input) => {
    // console.log(input);

    input.addEventListener("click", (e) => {
        e.preventDefault();

        const confirm = window.confirm(
            "Vuoi davvero eliminare questo elemento?"
        );

        // console.log(confirm);
        if (!confirm) return;

        // if (confirm) {
        const form = input.closest("form");
        // const target = input.dataset.target;
        // console.log(target);
        // const form = document.querySelector(target);
        // console.log(form);

        if (form) {
            form.submit();
        }
        // submit
        // }
    });
});
