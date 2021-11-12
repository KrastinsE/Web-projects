/*
let x, y, z; // mainigie - var, let, const
x = 5 ;
y = 10;
z= x + y;
console.log("Rezultāts ir: ", z);
window.alert("Rezultāts ir: "+ z);
let zeta=4.0245;
console.log("Tips: ", typeof(zeta));
let teksts="Rezultāts ir: ";
console.log(teksts, " ", zeta);
*/

let auto=[]; // nodefinets tuks masivs 'auto'
auto[0]="Audi";
auto[1]="Alfa Romeo";
let mo="Mocis";
let moto=["Suzuki","Honda","Kawasaki","Ducati",435]; 
console.log("Teksta garums: ",teksts.lenght, " Masīva garums: ", moto.lenght );

for (var i = 0; i < moto.length; i++) {
  moto[i]=mo+moto[i];
}
if (zeta*2<5){
  console.log('Izpildās')
}else{
  console.log('Neizpildās')
}
zero(); // izsaucam funkciju, kods lasas no augsas uz leju

function zero() {
  window.alert("Ervins value your privacy :)");
}
let cc=137;

function objektaGarums(objekts){
  console.log("Tips: ",typeof(objekts)," Garums: ",objekts.lenght);
  cc=cc/objekts.lenght;
  return cc;
}

objektaGarums("Lācis: ");
console.log("1: ",objektaGarums(teksts));
console.log("2: ",objektaGarums(moto));

// console.log(moto);