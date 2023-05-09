const form = document.getElementById("form");

if (form){
    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        
        const dadosForm = new FormData(form);

        const dados = await fetch ("dados.php", {
            method: "POST",
            body: dadosForm
        });
        
        const resposta = await dados.json();
        console.log(resposta);

        if (resposta['status']){
            Swal.fire({
                text: resposta['msg'],
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Fechar'
              });
        }else {
            Swal.fire({
                text: resposta['msg'],
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Fechar'
              });
        }
    });

}










/*function alert (){
    Swal.fire('Any fool can use a computer', 'success');
}

alert();*/