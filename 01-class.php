<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Class</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="
flex min-h-[100vh] 
justify-center 
items-center">
    <main class="
     bg-neutral-50/50 
    h-[640px] 
    w-[380px] 
    rounded-2xl">
        <header class="
        flex 
        justify-center 
        items-center 
        py-5 
        gap-5
        bg-black/80
        rounded-t-2xl">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="
                w-10 
                h-10 
                hover:scale-150 
                transition-all
                text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>                  
            </a>
            <h1 class="text-2xl  text-white/80">01 - Class</h1>
        </header>
<!-- Opciones -->
        <section class= "
        p-5
        my-2
        overflow-y-auto
        h-[540px]">

<!-- Lineal
        <?="Hello World"?>
        <br>
        <?php echo "Hello World" ?>
        <br>
        <?php print("Hello World") ?>
        <br>

        <?php
            $name = 'Jeremias Springfield';
            $age = 55;
            echo 'Name: ' . $name .'<br> Age:'. $age;
            echo "<br>Name: $name <br> Age: $age"
        ?>
-->

<!-- Estructural

        <?php
            function sayHello($name, $age){
                return "Welcome: $name - Age: $age";
            }
            echo sayHello('Homer Simpson', 48);
            echo sayHello('Bart Simpson', 15);
        ?>
-->

<!-- OOP -->
        <?php
            class Vehicle{
                // Attributes
                public $brand;
                public $refer;
                public $model;
                public $color;

                //Methods
                public function setAttributes($brand, $refer, $model, $color){
                    $this->brand = $brand;
                    $this->refer = $refer;
                    $this->model = $model;
                    $this->color = $color;
                }

                public function getAttributes(){
                    return "<div class='p-4 mb-4 flex-col ring-1 ring-white/50 rounded-md'>
                                <p><strong>Brand:</strong> $this->brand</p>
                                <p><strong>Reference:</strong> $this->refer</p>
                                <p><strong>Model:</strong> $this->model</p>
                                <p><strong>Color:</strong> $this->color</p>
                            </div>";
                }
            }
            $vehicle1 = new Vehicle;
            $vehicle1-> setAttributes('Volkswagen','Tiguan',2023,'Black');
            echo $vehicle1-> getAttributes();

            $vehicle2 = new Vehicle;
            $vehicle2-> setAttributes('Renault','Sandero',2022,'Blue');
            echo $vehicle2-> getAttributes();

            $vehicle3 = new Vehicle;
            $vehicle3-> setAttributes('Chevrolet','Camaro',2023,'Red');
            echo $vehicle3-> getAttributes();
        ?>

        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>