//jQuery('div').hide();


const person = {
    person_name: 'Leon',
    job_name: 'Web Dev',
    car: {
        make: 'Volvo',
        color: 'Gray',
    }
}


const settings = {
    height: 100,
    width: 200,
    color: '#08B2E3',
}

const {height = 400, width = 400, color = 'blue', position = 'relative'} = settings;

// const {person_name, job_name} = person;
// const {make: CarMake} = person.car;
//
// // person_name = 'Leon'
// // job_name = 'Web Dev'
// console.log(CarMake);

// const dog_name = 'Snickers';
// const dog_age = 2;

// function sentence_mod(string_data, ...var_data) {
//     debugger;
//     return 'cool';
// }
//
//
// const sentence = sentence_mod`my dog ${dog_name} is ${dog_age * 7} years old`;
//
// console.log(sentence);

/**
 * Destructure Array
 **/

const movies = ['Deadpool', 'Avengers', 'King Kong'];

const [movie_1, movie_2, movie_3, movie_4] = movies;

const technologies = ['PHP', 'React', 'JS', 'Python', 'WordPress'];



function tipCalculator(bill, percent = 0.20) {
    return bill * percent;
}
