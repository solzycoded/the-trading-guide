// DATA TYPES
var x = 'another thing'; // var can be changed

{
	let x = 'something'; 
	// x can exist as something else, but only inside the block scope
}
//__________________


// FUNCTIONS
	// DATA TYPES
// ARROW FUNCTIONS
const something = (x, y) => x * y;
const something = (x, y) => {return x * y};
// better to use "const", cos functions can only be declared once
// don't have 'this' 
// not suited for defining object methods
// they must be declared before they are used
//__________________


// LOOPS
	// for an array
const cars = ['something', 'nothing', 'another thing']; 

let text = "";

for (let x of cars){
	text += x + " ";
}
	//____________________

const person = {fname: "hone", lname: "some", age: 25}
let text = "";

for (let x in person) {
	text += person[x];
}
	//____________________

const numbers = [34, 33, 4, 4, 2, 4];

let text = "";
numbers.forEach(myfunction);

const myfunction = (value, index, array) => {
	text += value;
}

	// for a string

let car = 'something'; 

let text = "";

for (let x of car){
	text += x + " ";
}
//__________________


// MAPS
const maps = new Map();

maps.set(yaba, 'kilometre 17');
maps.set(ikeja, 'kilometre 27');
//__________________


// CLASSES (a template for javascript object)
	// always add a method called "constructor"
class Car {
	constructor(name, year) {
		this.name = name;
		this.year = year;
	}

	// functions in class
	start(){
		let sound = 'vroom';
		return sound;
	}

	stop(){
		let sound = 'sim sim';
		return sound;
	}
}

// using a class
const mycar1 = new Car('ford', 2023);

mycar1.start();

const mycar2 = new Car('audi', 2033);

mycar2.stop();
//__________________


// PROMISES (object that links 'producing code [takes sometime]' and 'consuming code [must wait for the result]')
const myPromise = new Promise(function(myResolve, myReject){
	// 'producing code' (may take sometime)

	myResolve(); // when successful
	myReject(); // when error
 });

// 'consuming code' (must wait for a fulfilled promise).
myPromise.then(
	function(value) { /* code is successful */},
	function(error) { /* code if some error */}
);

const myPromise = new Promise(function(myResolve, myReject) {
  setTimeout(function() { myResolve("I love You !!"); }, 3000);
});

myPromise.then(function(value) {
  document.getElementById("demo").innerHTML = value;
});
//__________________


// THE SYMBOL TYPE (hidden identifier that no other code can accidentally access)
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50,
  eyeColor: "blue"
};

let id = Symbol('id');
person[id] = 140353;
// Now person[id] = 140353
// but person.id is still undefined

// Symbols are always unique.
// If you create two symbols with the same description they will have different values.
//__________________


// FUNCTION REST PARAMETER
const sum = function(...args) {
	let sum = 0;

	for (let arg of args) sum += arg;

	return sum;
}

let x = sum(4, 9, 8, 5, 3, 4);
//__________________


// ARRAY (FROM)
Array.from("ABCDEFG")  // Returns [A,B,C,D,E,F,G]
//__________________


// NUMBER METHODS
Number.isInteger(10); // returns true
Number.isInteger(10.5); // returns false
//__________________


// MODULES (still need to read up on exports and imports, to understand it's use)
	// Import from named exports
import { name, age } from "./person.js";
	// Import from default exports
import message from "./message.js";
//__________________


// JS ASYNCHRONOUS ITERATION (iterators and iterables)
	// asynchronous iterables (we can use await keyword in for/of loops)
for await (){}	
//__________________


// JS PROMISE (FINALLY)
let myPromise = new Promise();

myPromise.then();
myPromise.catch();
myPromise.finally();
//__________________


// JS OBJECT REST PROPERTIES (allows us to destruct an object and collect the leftovers onto a new object)
let {x, y, ...z} = {x: 1, y: 2, a: 3, b: 4};
x; // 1
y; // 2
z; // {a: 3, b: 4}
