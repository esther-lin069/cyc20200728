import {Dog, playWith, Animal}from "./library.js"

let doggie = new Dog('Taiwan', undefined);
console.log(doggie.location,doggie.species);

playWith(doggie);