export function playWith(obj){
    obj.barking();
}

export class Animal{
    constructor(animal = 'What'){
        this.species = animal;
    }
    makeSound(){
        alert(`I'm ${this.species}`)
    }
}

export class Dog extends Animal{
    constructor(location="Earth", animal){
        super('dog');
        this.location = location;
    }
    barking(){
        super.makeSound();
        alert(location);
    }
    
}
