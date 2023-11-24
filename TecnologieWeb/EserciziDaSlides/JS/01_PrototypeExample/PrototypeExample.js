/**
 * Constructor of the object Person (Different type of object OOP like Java)
 * 
 * @param {*} name 
 * @param {*} surname 
 */
function Person(name, surname) {
    this.firstName = name;
    this.lastName = surname;
}

var person1 = new Person("Emanuele", "Dajko");

/**
 * Introduces a new function to the prototype Person
 * 
 * @Note By using the func "alert", u can get a web popup.
 * @Note By using the func "console.log", u can get a console log.
 */
Person.prototype.welcome = function () {
    alert("Welcome, " + this.firstName + this.lastName + "!");
}

// Call the function welcome of the prototype Person
person1.welcome();
