// -----------------------------------------
// Combination Constructor/Prototype Pattern
// -----------------------------------------

// constructor function to create car objects
function Car(make, model, year) {
    this.make   = make;
    this.model  = model;
    this.year   = year;
}

// constructor prototype to share properties and methods
Car.prototype.sayCar = function() {
    alert('I have a ' + this.year + ' ' + this.make + ' ' + this.model + '.');    
};

// create 2 car objects for John and Jane
var johnCar = new Car('Ford', 'F150', '2011'),
    janeCar = new Car('Audi', 'A4', '2007');

// call method on Jane's car
janeCar.sayCar();