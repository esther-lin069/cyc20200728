function Work1 (workFine, errorMessage = "default error1"){
    return new Promise((resolve,reject) => {
        setTimeout(() => {
            workFine? resolve("I'm Work1 successed!") : reject(errorMessage);
        },1000);
    })
}

function Work2(workFine, errorMessage = "faild Work2"){
    return new Promise((resolve,reject) => {
        setTimeout(function(){
            workFine? resolve("Work2 finished") : reject(errorMessage);
        },3000);
    })
}


async function usingLongTimeWork(){
    try{
        let [result1,result2] = await Promise.all([Work1(true),Work2(true)]);
        var total = `${result1} and ${result2}`;
        console.log(total);
    }
    catch(e){
        console.log(e);
    }
    
}

usingLongTimeWork();