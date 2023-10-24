const btn = document.getElementById("button");

btn.addEventListener("click", (event) => {
    event.preventDefault();
    
    const altura = document.getElementById("altura");
    const valorAltura = altura.value;

    const peso = document.getElementById("altura");
    const valorPeso = peso.value;

    const conta = (valorAltura / valorPeso) * 2;

    const url = ""
    let data = {
        "altura": valorAltura,
        "peso": valorPeso
    };

    const result = enviaDados(url, data);

    if(result.status == "Sucesso!"){
        limpaInputs(altura, peso)
    } else {

    }
})

const enviaDados = async (url, data) => {
    const response = await fetch(url, {
        method: "POST",
        body: JSON.stringify(data)
    });

    return response.json()
}

const limpaInputs = (altura, peso) => {
    altura = altura.innerHTML("");
    peso = peso.innerHTML("");
}


