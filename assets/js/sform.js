function sendForm(url){
    
    document.getElementById('send_apply').innerHTML = "Enviando...";
    
    var formName = document.getElementById("formName").value;
    var formLastName = document.getElementById("formLastName").value;
    var formEmail = document.getElementById("formEmail").value;
    var formMsg = document.getElementById("formMsg").value;
    var formFile = document.getElementById("formFile");

    var emailSend = document.getElementById("emailSend").value;
    var null1 = document.getElementById("nulo_cut").value;
    var null2 = document.getElementById("nulo_campo").value;

    var params = "emailSend="+emailSend+"&null1="+null1+"&null2="+null2+"&formName="+formName+"&formLastName="+formLastName+"&formEmail="+formEmail+"&formMsg="+formMsg+"&formFile[]="+formFile;

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

function sendForm2(url){
    
    document.getElementById('btn_news_letter2').innerHTML = "Enviando...";
    
    var emailForm = document.getElementById("emailForm2").value;

    var null1 = document.getElementById("nulo_cut2").value;
    var null2 = document.getElementById("nulo_campo2").value;

    var params = "emailForm="+emailForm+"&null1="+null1+"&null2="+null2;

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        var resposta = this.responseText;
        
        switch(resposta){
            case "5":
                document.getElementById("retorno_form2").innerHTML = "<strong style='color: orange'>Erro incomum </strong>";
                document.getElementById('btn_news_letter2').innerHTML = "Enviar";
            break;
            case "4":
                document.getElementById("retorno_form2").innerHTML = "<strong style='color: red'> Preencha o campo </strong>";
                document.getElementById('btn_news_letter2').innerHTML = "Enviar";
            break;
            case "1":
                document.getElementById("retorno_form2").innerHTML = "<strong style='color: #99ff99'> Inscrição realizada </strong>";
                document.getElementById('btn_news_letter2').innerHTML = "Enviar";
                alert("Agradecemos sua inscrição");
                document.getElementById("emailForm2").value = "";
                setTimeout(function(){
                    document.getElementById("retorno_form2").innerHTML = "";
                }, 2000)
            break;
            default:
                document.getElementById("retorno_form2").innerHTML = "<strong style='color: orange'>Erro desconhecido</strong>";
                document.getElementById('btn_news_letter2').innerHTML = "Enviar";
        }
        console.log(resposta);

    }
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(params);
}