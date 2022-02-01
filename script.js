let btnPrimary = document.querySelector('#change');
let btnPrimary2 = document.querySelector('#change1');
let btnPrimary3 = document.querySelector('#change2');
let btnPrimary4= document.querySelector('#change3');
let btnPrimary5 = document.querySelector('#change4');
let btnPrimary6 = document.querySelector('#change5');
let btnPrimary7 = document.querySelector('#change6');
let btnPrimary8= document.querySelector('#change7');


let btnStart = document.querySelector('#start');
let btnNotify = document.querySelector('#notify');


btnPrimary.addEventListener('click',()=>btnPrimary.style.backgroundColor='#008000');
btnPrimary2.addEventListener('click',()=>btnPrimary2.style.backgroundColor='#008000');
btnPrimary2.addEventListener('click',()=>{
	if(btnPrimary2.style=="display:none;")
		btnPrimary3.style.display = 'none';
	else btnPrimary3.style.display = null
})
btnPrimary3.addEventListener('click',()=>btnPrimary3.style.backgroundColor='#008000');
btnPrimary4.addEventListener('click',()=>btnPrimary4.style.backgroundColor='#008000');
btnPrimary4.addEventListener('click',()=>{
	if(btnPrimary4.style=="display:none;")
		btnPrimary5.style.display = 'none';
	else btnPrimary5.style.display = null
})
btnPrimary5.addEventListener('click',()=>btnPrimary5.style.backgroundColor='#008000');
btnPrimary6.addEventListener('click',()=>btnPrimary6.style.backgroundColor='#008000');
btnPrimary7.addEventListener('click',()=>btnPrimary7.style.backgroundColor='#008000');
btnPrimary7.addEventListener('click',()=>{
	if(btnPrimary7.style=="display:none;")
		btnPrimary8.style.display = 'none';
	else btnPrimary8.style.display = null
})
btnPrimary8.addEventListener('click',()=>btnPrimary8.style.backgroundColor='#008000');
btnPrimary8.addEventListener('click',()=>{
	if(btnPrimary8.style=="display:none;")
		btnStart.style.display = 'none';
	else btnStart.style.display = null
})






