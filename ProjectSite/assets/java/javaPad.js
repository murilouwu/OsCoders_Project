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

function frmTabOp(mtr, css, retCss){
	mostrar(mtr[0], mtr[1]);
	let divsCss = [
		css[0],
		document.querySelector(css[1])
	];
	divsCss[0].style.backgroundColor = 'var(--branco)';
	divsCss[1].style.color = 'var(--softBlue)';
	if(css[2] != '0'){
		divsCss[2] = document.querySelector(css[2]);
		divsCss[2].style.backgroundColor = 'var(--branco)';
	};
	let divsRetCss = [
		document.querySelector(retCss[0]),//-btns
		document.querySelector(retCss[1]),//-btns
		document.querySelector(retCss[2]),//-btns
		document.querySelector(retCss[3]),//-icons
		document.querySelector(retCss[4]),//-icons
		document.querySelector(retCss[5])//-icons
	];
	divsRetCss[0].style.backgroundColor = 'var(--shadow)';
	divsRetCss[1].style.backgroundColor = 'var(--shadow)';
	divsRetCss[2].style.backgroundColor = 'var(--shadow)';
	divsRetCss[3].style.color = 'var(--azul)';
	divsRetCss[4].style.color = 'var(--azul)';
	divsRetCss[5].style.color = 'var(--shadow)';

	if(retCss[6] != 'nulo'){
		divsRetCss[6] = document.querySelector(retCss[6]);
		divsRetCss[6].style.backgroundColor = 'var(--azul)';
	};
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