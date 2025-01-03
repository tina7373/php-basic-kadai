<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題15~16章</title>
</head>
<body>
    <p>
        <?php
            //Foodクラス
            class Food{
                private $name;
                private $price;

                //コンストラクタ
                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }
                
                //show_priceメソッド
                public function show_price(){
                    echo $this->price;
                }
            }

            //Animalクラス
            class Animal{
                private $name;
                private $height;
                private $weight;

                //コンストラクタ
                public function __construct(string $name, int $height, int $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                //show_heightメソッド
                public function show_height(){
                    echo $this->height;
                }
            }

            //Foodインスタンス化
            $potato = new Food('potato', 250);

            //animalインスタンス化
            $dog = new Animal('dog', 60, 5000);

            //値を出力
            print_r($potato);
            echo '<br>';
            print_r($dog);
            echo '<br>';

            // メソッドの実行
            $potato->show_price();
            echo '<br>';
            $dog->show_height();
            echo '<br>';



        ?>
    </p>
</body>
</html>