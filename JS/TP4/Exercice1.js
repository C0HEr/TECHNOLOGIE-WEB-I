// Exercice 1


/*

1- la valeur qui sera affichée est : Location
2- le résultat des opération concatine avec la chaîne de caractères
3- tout les num entre 1 est 8
4- tous les num inférieur a 9
5- boucle infinie
*/

/**  Q6 **/

let x = 8,y = 9,s;
s=x+y;
console.log(s);
alert(s)

/*** Q7 ***/

let listVal = [12,100,50], Max = 0;

for(let i=0; i < listVal.length; i++) {
    for(let j=0; j < listVal.length; j++) {
        if(listVal[j] > listVal[i])
            Max = listVal[j];
    }
}

console.log("La valeur le plus grand est:" + Max);

/*** Q8 ***/
let val = prompt('Entre un nombre entiers:'), result = " ";

if(val>0) {
    for(let i=1 ; i < val ; i++) {
        if(val % i == 0)
            result += i +" ";
    }
} else {
    alert('Stp entre un nombre entier !!')
}

alert("Les vacteur de : "+ val +" est  :"+ result);

