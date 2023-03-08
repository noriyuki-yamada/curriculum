//問1:isEven関数を実行して、以下の配列から偶数だけが出力されるように実装してください。
let numbers = [ 2, 5, 12, 13, 15, 18, 22];

function isEven(num){
    if( num % 2 === 0){
    console.log(num + 'は偶数です');
    }
}

for(let i = 0; i < numbers.length; i++){
    isEven(numbers[i]);    
}


/*問2:以下の要件を満たすように実装してください。

【要件】

・インスタンス化した時にガソリンとナンバーがセットされるようなCarクラスを作成する

・「ガソリンは〇〇です。ナンバーは△△です」と出力される「getNumGas」という関数を作成する*/

class Car{
    constructor(Gasoline,Number){
        this.Gasoline = Gasoline;
        this.Number = Number;
    }

    getNumGas(){
        console.log(`ガソリンは${this.Gasoline}です。ナンバーは${this.Number}です。`)
    }
}

let sample = new Car (20.5, 1234);
sample.getNumGas();
