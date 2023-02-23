<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
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
            <h1 class="text-2xl  text-white/80">02 - Construct</h1>
        </header>
        <section class= "
        p-5
        my-2
        overflow-y-auto
        h-[540px]">
        
        <?php
            class PlayList{
                //Atributes
                private $name;
                private $artist = Array();
                private $album = Array();
                private $cover = Array();
                private $year = Array();
                //Methods
                public function __construct($name) {
                    $this->name = $name;
                }
                public function setPlayList($artist, $album, $cover, $year) {
                    $this->artist[] = $artist;
                    $this->album[] = $album;
                    $this->cover[] = $cover;
                    $this->year[] = $year;
                }
                public function getPlayList() {
                    echo "<div class='p-2 mb-4 ring-1 ring-white/80 rounded-md'>
                                <h2 class='text-center text-2xl my-4'> $this->name </h2>";
                                for($i = 0; $i < count($this->artist); $i++){
                                echo "<div class='p-2 mb-4 flex flex-col gap-4 bg-black/40 rounded-md'>
                                    <p>".$this->album[$i]."</p>
                                    <img src='".$this->cover[$i]."' alt='cover' widt='280px'>
                                    <p>".$this->artist[$i]."</p>
                                    <p>".$this->year[$i]."</p>
                                </div>";
                                }
                            "</div>";
                }
            }
            $myPlayList = new PlayList ('My Favorite Music');
            $myPlayList-> setPlayList('Nirvana', 'Nevermind', 'https://tinyurl.com/5n8dxyzb', 1991);
            $myPlayList-> setPlayList('Imagine Dragons', 'Mercury Act 2', 'https://tinyurl.com/yc3trvdj', 2022);
            $myPlayList-> setPlayList('Maroon 5', 'Jordi', 'https://tinyurl.com/4krxjtmk', 2021);
            $myPlayList-> setPlayList('Alan Walker', 'Different World', 'https://tinyurl.com/4cndkn3y', 2018);
            $myPlayList-> setPlayList('Imagine Dragons', 'Evolve', 'https://tinyurl.com/yc89ybn9', 2017);
            $myPlayList-> getPlayList();
        ?>

        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>