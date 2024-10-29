function cambiabandiera(){
    let image = document.getElementById("bandiera");
    let valuta = document.getElementById("id_valuta").value;

    switch(valuta){
        case "1":
           image.src = "./images/us-flag.gif";
           break;
        
        case "2":
            image.src = "./images/ja-flag.gif";
            break;
        
        case "3":
            image.src = "./images/sz-flag.gif";
            break;
        
        case "4":
            image.src = "./images/uk-flag.gif";
            break;
    }

}