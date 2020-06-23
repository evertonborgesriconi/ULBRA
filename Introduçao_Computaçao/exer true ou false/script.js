function calc() {
    let valueOne = document.getElementsByName("valueOne")[0].checked;
    let valueTwo = document.getElementsByName("valueTwo")[0].checked;
    let select = document.getElementById("select").value;
    let result = document.getElementById("result");

    let operacoes = {
        not() {
            let string = "";
            if (!valueOne)
                string += `<span>|True or 1|</span>`;
            else
                string += `<span >|False or 0|</span>`;

            if (!valueTwo)
                string += `<span >| True or 1|</span>`;
            else
                string += `<span >|False or 0|</span>`;
            return string
        },
        and() {
            if (valueOne && valueTwo)
                return `<span style="color: green;">True or 1</span>`;
            return `<span style="color: red;">False or 0</span>`;
        },
        or() {
            if (valueOne || valueTwo)
                return `<span>True or 1</span>`;
            return `<span>False or 0</span>`;
        },
        xor() {
            if (valueOne ^ valueTwo)
                return `<span>True or 1</span>`;
            return `<span>False or 0</span>`;
        }
    }
    result.innerHTML = operacoes[select]();
    return false;
}