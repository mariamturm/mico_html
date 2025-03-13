function processNumbers(a, b, ...rest) {
    const sum = a + b;
    const product = rest.length ? rest.reduce((acc, num) => acc * num, 1) : 1;
    return [sum, product];
}

console.log("Exercise 1");
console.log(processNumbers(2, 3, 4, 5));   // Output: [5, 20]  (2+3, 4*5)
console.log(processNumbers(1, 2, 3, 4, 5)); // Output: [3, 60]  (1+2, 3*4*5)
console.log(processNumbers(10, 5));        // Output: [15, 1]  (10+5, no numbers left so product is 1)





function getCity(user) {
    const { banks } = user;
    return banks?.[2]?.address?.city;
}


const user = {
    banks: [
        { address: { city: "New York" } },
        { address: { city: "Los Angeles" } },
        { address: { city: "Chicago" } }
    ]
};
console.log("Exercise 2");
console.log(getCity(user)); 
console.log(getCity({}));   



function deepCopy(obj) {
    if (typeof obj !== 'object' || obj === null) {
        return obj;  
    }

    
    let newObj = Array.isArray(obj) ? [] : {};

    for (let key in obj) {
        if (obj.hasOwnProperty(key)) {
            newObj[key] = deepCopy(obj[key]);
        } else {
            
            newObj[key] = obj[key];
        }
    }

    return newObj;
}
const original = {
    name: 'Mariam',
    age: 29,
    address: {
        city: 'Tbilisi',
        country: 'Georgia'
    },
    hobbies: ['reading', 'traveling']
};

const copied = deepCopy(original);


copied.address.city = 'Batumi';
copied.hobbies.push('coding');

console.log("Exercise 3");
console.log(original);  
console.log(copied);    

