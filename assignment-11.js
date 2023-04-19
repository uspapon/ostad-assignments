/*
    Create a mutiplication table
*/
function multiplicationTable(number = 1) {
    if (typeof (number) == 'number') {
        let result = '';
        const num = parseInt(number);
        for (let i = 1; i <= 10; i++) {

            const product = num * i;
            result += num + ' X ' + i + ' = ' + product + '\n';

        }

        return result;
    } else {
        return 'Please provide a valid integer';
    }


}
const number = 3.5;
const resultingTable = multiplicationTable(number);
console.log(resultingTable);