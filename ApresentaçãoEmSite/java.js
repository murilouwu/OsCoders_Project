function mostrar(ocu, chave){
    for (var i=0; i<ocu.length; i++){	
		if (i<chave){
			ocultar(ocu[i], 0);	
		}else{
			ocultar(ocu[i], 1);
		};
	};
};

function ocultar(obj, es){
	let div = document.querySelector(obj);
	if(es==1){
		div.style.display = 'flex';
	}else{
		div.style.display = 'none';
	};
};

function frmMv(btn, Mc, chave, poss){
    mostrar(Mc, chave); 
    let text = '[';
    let pos = poss>2? 1: (poss+1);
    for(let i=0; i<Mc.length; i++){
        if((i+1)==pos){
            continue;
        }else{
            text += "'#slide"+(i+1)+"',";
        }
    }
    text += "'#slide"+pos+"']";
    let div = document.querySelector('#infoPag');
    div.innerHTML = ' '+poss+'/3 ';
    let onclick = "frmMv(this, "+text+", "+chave+","+pos+")";
	btn.setAttribute("onclick", onclick);
}