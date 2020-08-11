import Doggie, { playWith as play, Animal } from "./library.js";
//Dog在外面因為default,且要改名時不用加as

let obj = new Doggie(undefined, 3);
console.log(obj.weight, obj.location);
play(obj);
