function PreViewImg(input, imgPreview){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(imgPreview).attr('style', "background-image: url('"+e.target.result+"');");
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function subir(){
	window.scrollTo(0, 0);
}

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

function red(page){
	window.location = page;
}

function drop(btn, id, fun, textId, texts){
	let es = fun==0? 1:0;
	ocultar(id, es);
	let div = document.querySelector(textId);
	div.innerHTML = texts[0];
	
	let newTexts = [texts[1], texts[0]];
	let fun2 = fun==0? 1:0;
	let onclick = "drop(this, '"+id+"', "+fun2+", '"+textId+"',['"+newTexts[0]+"', '"+newTexts[1]+"'])";
	btn.setAttribute("onclick", onclick);
}