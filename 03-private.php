<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Private</title>
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
            <h1 class="text-2xl  text-white/80">03 - Private</h1>
        </header>
<!-- Opciones -->
        <section class= "
        p-5
        my-2
        overflow-y-auto
        h-[540px]">

        <h2 class="text-center text-2xl mb-6">Table Maker</h2>    
        <form class="p-2 mb-4 grid grid-cols-2 justify-center gap-4 ring-1 bg-white/20 ring-white/50 rounded-md" action="" method="post">
                <div class="flex flex-col items-center gap-4">
                    <label>Rows:</label>
                    <input type="range" name="nr" min="1" max="20" step="1" 
                           value="10" oninput="onr.value=this.value">
                    <output id="onr" class="text-2xl">10</output>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="20" step="1" 
                           value="10" oninput="onc.value=this.value">
                    <output id="onc" class="text-2xl">10</output>
                </div>
                <button class="p-2 bg-green-600 w-[324px] rounded-md hover:scale-95 transition">Make Table</button>
            </form>
            <?php
                class Table {
                    private $nr;
                    private $nc;

                    public function __construct($nr, $nc) {
                        $this->nr = $nr;
                        $this->nc = $nc;
                        $this->makeTable();
                    }
                    private function makeTable() {
                        echo "<table class='border-collapse mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++) {
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc; $c++) {
                                echo "<td class='p-2 ring-1 ring-white/50 bg-black/40'> </td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                if ($_POST) {
                    $table = new Table($_POST['nr'], $_POST['nc']);
                }
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>