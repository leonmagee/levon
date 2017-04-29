const beer = {
    name: 'Modern Times',
    area: 'Point Loma'
};

let { name, area } = beer;

function do_something({name ='Modern Times', area ='Point Loma'}) {
    console.log();
}

do_something(beer);





// beer.name = 'Mike Hess';
//
// console.log(beer);

    //
    // const beer = 'ballast point';
    // beer = 'stone';


//
//
// const beer_array = ['Volvo', 'Toyota', 'Lexus'];
//
// let beers = [
//     {
//         name: 'Modern Times',
//         location: 'Point Loma'
//     },
//     {
//         name: 'Ballast Point',
//         location: 'Little Italy'
//     },
//     {
//         name: 'Stone',
//         location: 'Escondido'
//     },
// ]
//
// beers.map((beer, i) => {
//     //console.log(`beer ${i} is ${beer.name} located in ${beer.location}`);
// });
//
// //console.log(beers);
//
//
document.querySelector('.site-title').addEventListener('click', (click_element) => console.log( click_element)
);

function normal_function() {
    console.log( 'normal function called' );
}

//normal_function();

//
//
//
//
// const person = {
//     person_name: 'Leon',
//     job_name: 'Web Dev',
//     car: {
//         make: 'Volvo',
//         color: 'Gray',
//     }
// }
//
// //console.log(person);
//
//
// const settings = {
//     height: 100,
//     width: 200,
//     color: '#08B2E3',
// }
//
// //console.log(settings);
//
// const {height = 400, width = 400, color = 'blue', position = 'relative'} = settings;
//
// // const {person_name, job_name} = person;
// // const {make: CarMake} = person.car;
// //
// // // person_name = 'Leon'
// // // job_name = 'Web Dev'
// // console.log(CarMake);
//
// // const dog_name = 'Snickers';
// // const dog_age = 2;
//
// // function sentence_mod(string_data, ...var_data) {
// //     debugger;
// //     return 'cool';
// // }
// //
// //
// // const sentence = sentence_mod`my dog ${dog_name} is ${dog_age * 7} years old`;
// //
// // console.log(sentence);
//
// /**
//  * Destructure Array
//  **/
//
// const movies = ['Deadpool', 'Avengers', 'King Kong'];
//
// const [movie_1, movie_2, movie_3, movie_4] = movies;
//
// const technologies = ['PHP', 'React', 'JS', 'Python', 'WordPress'];
//
//
//
// function tipCalculator(bill, percent = 0.20) {
//     return bill * percent;
// }
