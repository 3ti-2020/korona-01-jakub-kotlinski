const btn1 = document.querySelector("#num1");
const btn2 = document.querySelector("#num2");
const btn3 = document.querySelector("#num3");
const btn4 = document.querySelector("#num4");
const btn5 = document.querySelector("#num5");
const btn6 = document.querySelector("#num6");
const btn7 = document.querySelector("#num7");
const btn8 = document.querySelector("#num8");
const btn9 = document.querySelector("#num9");
const btn0 = document.querySelector("#num0");
const ekran = document.querySelector("#ekr");
const dodawanie = document.querySelector("#dod");
const odejmowanie = document.querySelector("#odj");
const mnozenie = document.querySelector("#pom");
const dzielenie = document.querySelector("#pod");
const wyczysc = document.querySelector("#wyc");
const rowna = document.querySelector("#row");
const ekrZnak = document.querySelector("#ekrznak")
const ekrLiczba = document.querySelector("#ekrliczba")
const ekrWynik = document.querySelector("#ekrwynik")


let wynik = "";
let liczba1 = 0;
let liczba2 = 0;
let ost = 0;
let znak = "";

btn1.addEventListener("click",function(){
    wynik += btn1.value;
    ekran.innerHTML = wynik;
    
})
btn2.addEventListener("click",function(){
    wynik += btn2.value;
    ekran.innerHTML = wynik;
}) 
btn3.addEventListener("click",function(){
    wynik += btn3.value;
    ekran.innerHTML = wynik;
})
btn4.addEventListener("click",function(){
    wynik += btn4.value;
    ekran.innerHTML = wynik;
}) 
btn5.addEventListener("click",function(){
    wynik += btn5.value;
    ekran.innerHTML = wynik;
}) 
btn6.addEventListener("click",function(){
    wynik += btn6.value;
    ekran.innerHTML = wynik;
}) 
btn7.addEventListener("click",function(){
    wynik += btn7.value;
    ekran.innerHTML = wynik;
}) 
btn8.addEventListener("click",function(){
    wynik += btn8.value;
    ekran.innerHTML = wynik;
}) 
btn9.addEventListener("click",function(){
    wynik += btn9.value;
    ekran.innerHTML = wynik;
}) 
btn0.addEventListener("click",function(){
    wynik += btn0.value;
    ekran.innerHTML = wynik;
}) 
dodawanie.addEventListener("click",function(){
    liczba1 = wynik;
    ekrZnak.innerHTML = "+";
    ekrLiczba.innerHTML = liczba1;
    ekran.innerHTML = "";
    wynik = "";
    znak = "+";
})
mnozenie.addEventListener("click",function(){
    liczba1 = wynik;
    ekrZnak.innerHTML = "*";
    ekrLiczba.innerHTML = liczba1;
    ekran.innerHTML = "";
    wynik = "";
    znak = "*";
})
odejmowanie.addEventListener("click",function(){
    liczba1 = wynik;
    ekrZnak.innerHTML = "-";
    ekrLiczba.innerHTML = liczba1;
    ekran.innerHTML = "";
    wynik = "";
    znak = "-";
})
dzielenie.addEventListener("click",function(){
    liczba1 = wynik;
    ekrZnak.innerHTML = "/";
    ekrLiczba.innerHTML = liczba1;
    ekran.innerHTML = "";
    wynik = "";
    znak = "/";
})
wyczysc.addEventListener("click",function(){
    liczba1 = "";
    liczba2 = "";
    wynik = "";
    znak = "";
    ekran.innerHTML = "";
    ekrZnak.innerHTML = "";
    ekrLiczba.innerHTML = "";
    ekrWynik.innerHTML = "";
})
rowna.addEventListener("click",function(){
    liczba2 = wynik;
    if(znak === "+")
        ost = parseInt(liczba1) + parseInt(liczba2);
    
    else if(znak === "-")
        ost = parseInt(liczba1) - parseInt(liczba2);
    
    else if(znak === "*")
        ost = parseInt(liczba1) * parseInt(liczba2);
    
    else if(znak === "/")
        ost = parseInt(liczba1) / parseInt(liczba2);
    ekrWynik.innerHTML = ost;
    znak = "";
    wynik = "";
    
})