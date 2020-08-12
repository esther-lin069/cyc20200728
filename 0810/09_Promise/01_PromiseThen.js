function longTimeWork(workFine = true, errorMessage = "test") {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            (workFine) ? resolve(workFine) : reject(errorMessage);
        }, 1000);
    })
}

function usingLongTimeWork() {
    longTimeWork(false,"87ㄏ")  // try true/false
    .then(function (e) { //被resolve呼叫
        console.log(e);
    })
    .catch(function (e) { //被reject呼叫
        console.log(e);
    })
}

usingLongTimeWork();

// 第一件攏長的工作 > ( promise    )\ ＿.then  成功 > 第二件工作
//usingLongTimeWork( 成功了沒？   )/   .catch 失敗 > 失敗了再來該怎麼辦