let url_site = "";

/*
function sendForm(url){
    
    document.getElementById('send_apply').innerHTML = "Enviando...";
    
    var formName = document.getElementById("formName").value;
    var formLastName = document.getElementById("formLastName").value;
    var formEmail = document.getElementById("formEmail").value;
    var formMsg = document.getElementById("formMsg").value;
    var formFile = document.getElementById("formFile").value;

    var emailSend = document.getElementById("emailSend").value;
    var null1 = document.getElementById("nulo_cut").value;
    var null2 = document.getElementById("nulo_campo").value;

    var params = "emailSend="+emailSend+"&null1="+null1+"&null2="+null2+"&formName="+formName+"&formLastName="+formLastName+"&formEmail="+formEmail+"&formMsg="+formMsg+"&formFile="+formFile['tmp_name'];

    console.log("File: "+formFile);

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        var resposta = this.responseText;
        
        switch(resposta){
            case "5":
                document.getElementById("retorno_form").innerHTML = "<strong style='color: orange'>Erro incomum </strong>";
                document.getElementById('send_apply').innerHTML = "Enviar";
            break;
            case "4":
                document.getElementById("retorno_form").innerHTML = "<strong style='color: red'> Preencha o campo </strong>";
                document.getElementById('send_apply').innerHTML = "Enviar";
            break;
            case "1":
                document.getElementById("retorno_form").classList.add('bg-green');
                document.getElementById("retorno_form").innerHTML = "<strong> Inscrição realizada, agradecemos o contato </strong>";
                document.getElementById('send_apply').innerHTML = "Enviar";
                alert("Agradecemos sua inscrição");

                formName = document.getElementById("formName").value = "";
                formLastName = document.getElementById("formLastName").value = "";
                formEmail = document.getElementById("formEmail").value = "";
                formMsg = document.getElementById("formMsg").value = "";

                setTimeout(function(){
                    document.getElementById("retorno_form").innerHTML = "";
                document.getElementById("retorno_form").classList.remove('bg-green');
                }, 2000)
            break;
            default:
                document.getElementById("retorno_form").innerHTML = "<strong style='color: orange'>Erro desconhecido</strong>"+resposta;
                document.getElementById('send_apply').innerHTML = "Enviar";
        }
        console.log(resposta);

    }

    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(params);

}
*/


//send form by aajx
$("form#data").submit(function(e) {
    e.preventDefault();    

    document.getElementById('send_apply').innerHTML = "Enviando...";

    let name_apply = document.getElementById('formName').value;

    document.getElementById("retorno_form").innerHTML = '<img src="'+url_site+'/assets/img/sending.gif">'

    var formData = new FormData(this);

    $.ajax({
        url: url_site+'/submit_form.php',
        type: 'POST',
        data: formData,
        success: function (data) {
            //alert(data)

            switch(data){
                case "5":
                    document.getElementById("retorno_form").innerHTML = "<strong style='color: orange'>Erro incomum </strong>";
                    document.getElementById('send_apply').innerHTML = "Enviar";
                break;
                case "4":
                    document.getElementById("retorno_form").innerHTML = "<strong style='color: red'> Preencha todos os campos e o anexo </strong>";
                    document.getElementById('send_apply').innerHTML = "Enviar";
                break;
                case "1":
                    document.getElementById("retorno_form").classList.add('bg-green');
                    document.getElementById("retorno_form").innerHTML = "<strong> Tudo certo <strong>"+name_apply+"</strong>. Seu currículo foi enviado a empresa, BOA SORTE! </strong>";
                    document.getElementById('send_apply').innerHTML = "Enviar";

                    formName = document.getElementById("formName").value = "";
                    formLastName = document.getElementById("formLastName").value = "";
                    formEmail = document.getElementById("formEmail").value = "";
                    formMsg = document.getElementById("formMsg").value = "";

                    setTimeout(function(){
                        document.getElementById("retorno_form").innerHTML = "";
                        document.getElementById("retorno_form").classList.remove('bg-green');
                    }, 3500)
                break;
                default:
                    document.getElementById("retorno_form").innerHTML = "<strong style='color: orange'>Erro desconhecido</strong>"+data;
                    document.getElementById('send_apply').innerHTML = "Enviar";
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

function sendForm2(e){
    
    e.preventDefault();

    document.getElementById('btn_news_letter2').innerHTML = "Enviando...";
    
    var emailForm = document.getElementById("emailForm2").value;

    var null1 = document.getElementById("nulo_cut2").value;
    var null2 = document.getElementById("nulo_campo2").value;

    var params = "emailForm="+emailForm+"&null1="+null1+"&null2="+null2;

    alert('teste');
   
}

const btn_form = document.querySelector('.btn_form');
const inputs_f = document.querySelectorAll('.m-form input');


//funcao para envio de vaga (provisória)
if(btn_form){

    btn_form.addEventListener('click', (e) => {
    
        e.preventDefault();

        btn_form.innerHTML = "Publicando..."

        setTimeout(function(){

            alert('Formulário enviado');

            inputs_f.forEach((item) => {

                item.value = "";

            });

            document.querySelector('.m-form textarea').value = "";

            btn_form.innerHTML = "Publicar Emprego";

        }, 2000)
    
        
    
    });

}

const btn_contato = document.getElementById('btn_contato');

if(btn_contato){

    btn_contato.addEventListener('click', (e) => {

        e.preventDefault();
        
        let name = document.getElementById('contatoName').value;
        let sobrenome = document.getElementById('contatoSobrenome').value;
        let email = document.getElementById('contatoEmail').value;
        let msg = document.getElementById('contatoMsg').value;
    
        $.ajax({
            method: 'POST',
            url: 'https://formsubmit.co/ajax/wildarte10@gmail.com',
            dataType: 'json',
            accepts: 'application/json',
            data: {
                nome: name+" "+sobrenome,
                email: email,
                mensagem: msg,
                _subject: "Contato do site Vagas de Emprego PE"
            },
            success: (data) => {

                alert('Agradecemos o contato')
    
                document.getElementById('contatoName').value = "";
                document.getElementById('contatoSobrenome').value = "";
                document.getElementById('contatoEmail').value = "";
                document.getElementById('contatoMsg').value = "";
            },
            error: (err) => console.log(err)
        });
    
    });

}


