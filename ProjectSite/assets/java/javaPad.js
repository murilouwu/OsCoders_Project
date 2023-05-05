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

function frmTabOp(names, id, line, title){
	let divs = [
		[],
		[],
		[],
		[]
	];
	for(let i = 0; i<names.length; i++){
		for(let i2 = 0; i2<4; i2++){
			let idI = names[i]+""+i2;
			divs[i][i2] = document.querySelector(idI);
		};
	};

	for(let i = 0; i<divs[0].length; i++){
		if(i != id){
			divs[0][i].style.display = 'none';
		}else if(divs[0][i].style.display == 'none'){
			divs[0][i].style.display = 'flex';
		}
	};

	for(let i = 0; i<divs[1].length; i++){//icon
		if(i == (divs[1].length-1)){
			if(i == id && divs[1][i].style.color != 'var(--branco)'){
				divs[1][i].style.color = 'var(--branco)';
			}else if(divs[1][i].style.color != 'var(--shadow)'){
				divs[1][i].style.color = 'var(--shadow)';
			}
		}else if(i != id && divs[1][i].style.color != 'var(--azul)'){
			divs[1][i].style.color = 'var(--azul)';
		}else if(i == id && divs[1][i].style.color != 'var(--softBlue)'){
			divs[1][i].style.color = 'var(--softBlue)';
		}
	};

	for(let i = 0; i<divs[2].length; i++){//btn
		if(i == (divs[2].length-1)){
			if(i == id && divs[2][i].style.backgroundColor != 'var(--branco)'){
				divs[2][i].style.backgroundColor = 'var(--branco)';
			}else if(divs[2][i].style.backgroundColor != 'var(--shadow)'){
				divs[2][i].style.backgroundColor = 'var(--shadow)';
			}
		}else if(i != id && divs[2][i].style.backgroundColor != 'var(--shadow)'){
			divs[2][i].style.backgroundColor = 'var(--shadow)';
		}else if(i == id && divs[2][i].style.backgroundColor != 'var(--branco)'){
			divs[2][i].style.backgroundColor = 'var(--branco)';
		}
	};

	if(id == (divs[0].length-1)){
		document.querySelector(line).style.backgroundColor = 'var(--softBlue)';
	}
	else{
		document.querySelector(line).style.backgroundColor = 'var(--azul)';
	};
	let text = document.querySelector(title[0]);
	if(text.innerHTML != title[1]){
		text.innerHTML = title[1];
	}
}

function addBoll(bt, idBase){
	let i = 0;
	let lp = true;
	while(lp==true){
		let idI = idBase+''+i;
		let id = document.querySelector(idI);
		let ifVar = document.body.contains(id);
		if(ifVar==true){
			let text = id.innerHTML;
			if(text.includes('●')){
				let count = (text.length)-2;
				let textFinal = text.substr(0, count);
				id.innerHTML = textFinal;
			}
			i++;
		}else{
			lp == false;
			break;
		}
	};
	bt.innerHTML += ' ●';
}